<?php
namespace Tests\Browser;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\Models\scrapped_data;
class ScrapeEcommerceSiteTest extends DuskTestCase
{
        public function testScrapeEcommerceSite()
    {
        $this->browse(function ($browser) {
            scrapped_data::truncate();
            $browser->visit('https://www.punjabcashandcarry.com.pk/shop');
            sleep(10);
            $this->scrollDown($browser, 10); 
            $elements=$browser->script("
            var elements=document.querySelectorAll('.daz-product-slot3-product-item.ng-star-inserted');
            var data = [];
            var linkElements = document.querySelectorAll('.ng-star-inserted .card a.product-image-setting');
            linkElements.forEach(function (linkElement, index) {
                var element = elements[index];
                var title = element.querySelector('.product-item-title').innerText;
                var imageSource = element.querySelector('.product-item-product-img').getAttribute('src');
                var relativelink = linkElement.getAttribute('href');
                var link = 'https://www.punjabcashandcarry.com.pk' + relativelink;
                var excludedBrands = ['Nestle', 'Pepsi', 'Colgate', 'Pringles' ,'Blue Band','Everyday'];
                var isExcluded = excludedBrands.some(function (brand) {
                    return title.includes(brand);
                });
                if (!isExcluded) {
                    data.push({
                        imageSource: imageSource,
                        title: title,
                        link: link
                    });
                }
            });
            return data;
        ");
            $innerArray = $elements[0];
            foreach ($innerArray as $item) {
                $imageSource = $item['imageSource'];
                $link = $item['link'];
                $title = $item['title'];
                scrapped_data::create([
                    'title' => $item['title'],
                    'link' => $item['link'],
                    'image_source' => $item['imageSource'],
                ]);
    
                echo "Image Source: $imageSource\n";
                echo "Link: $link\n";
                echo "Title: $title\n";
            }
 
        });
    }

    protected function scrollDown($browser, $times)
    {
        for ($i = 0; $i < $times; $i++) {
            $browser->driver->executeScript('window.scrollTo(0, document.body.scrollHeight);');
            $browser->pause(1000); 
        }
    }

}
