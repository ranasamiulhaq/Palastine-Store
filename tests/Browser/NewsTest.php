<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\Models\testt;

class NewsTest extends DuskTestCase
{
    public function testNewsSite()
    {
        testt::truncate();  // db delete krky dobara insert krdy gi ye commmand

            $this->browse(function (Browser $browser) {
                $browser->visit('https://www.aljazeera.com/news/liveblog/2023/12/29/israel-hamas-war-live-israel-kills-at-least-20-in-attack-on-rafah')
                    ->waitFor('.card-live__content-area') 
                    ->waitFor('.card-live__content'); 
        
                $titles = $browser->elements('.card-live__content-area h2');
                $contents = $browser->elements('.card-live__content p');
        
                foreach ($titles as $index => $titleElement) {
                    $titleText = $titleElement->getText();
                    $contentText = $contents[$index]->getText();
                    
                    $news = new testt;
                    $news->title = $titleText;
                    $news->inf = $contentText;
                    $news->save();
                }

                foreach ($titleTexts as $title) {
                    echo $title . "\n";
                }
        
                foreach ($contentTexts as $content) {
                    echo $content . "\n";
                }
            });
            
           

    }

    // public function testNewsImage()    {
    //     //testt::truncate();  // db delete krky dobara insert krdy gi ye commmand

    //     $this->browse(function (Browser $browser) {
    //         $browser->visit('https://www.aljazeera.com/tag/israel-palestine-conflict/')
    //             ->waitFor('.u-clickable-card__link span') 
    //             ->waitFor('.responsive-image img'); 
        
    //         $titles = $browser->elements('.u-clickable-card__link span');
    //         $contents = $browser->elements('.gc__excerpt p');
    //         $publish = $browser->elements('.screen-reader-text');
    //         $pic = $browser->elements('.responsive-image img');
        
    //         foreach ($titles as $index => $titleElement) {
    //             $titleText = $titleElement->getText();
    //             $contentHTML = $browser->driver->executeScript(
    //                 'return arguments[0].innerHTML;',
    //                 [$contents[$index]]
    //             );
    //             $contentPublish = $publish[$index]->getText();
    //             $contentImage = $pic[$index]->getAttribute('src'); // Assuming you want the image source

    //             // Optionally, you can print or log the results
    //             echo "Title: $titleText\n";
    //             echo "Content: $contentHTML\n";
    //             echo "Publish Date: $contentPublish\n";
    //             echo "Image Source: https://www.aljazeera.com/.$contentImage\n\n";
    //         }
    //     });
        
            
           

}