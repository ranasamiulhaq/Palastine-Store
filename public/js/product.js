let page=2;


function fetchProducts(){
    const endpoint='/product/'+page;
    fetch(endpoint).then(response=>{
        if(!response.ok){
            throw new Error("error:",response)
        }
        return response.json()
    }).then(data => {
            appendProductsToView(data);
            page++;
    }
    
    ).catch(error => {
        console.error('Error during fetch:', error);
    });

}
const debouncedFetchProducts = debounce(fetchProducts);
window.addEventListener('scroll', handleScroll);
function handleScroll() {
    if (window.innerHeight + window.scrollY >= document.body.offsetHeight - 300) {
        debouncedFetchProducts();
    }
}

function debounce(func) {
    let isExecuting = false;
    return function () {
        if (!isExecuting) {
            isExecuting = true;
            func.apply(this, arguments);

            setTimeout(() => {
                isExecuting = false;
            }, 100); 
        }
    };
}


function appendProductsToView(products) {
    const container = document.querySelector('.px-xl-5'); ;

    products.forEach(product => {
        const card = document.createElement('div');
        card.className = 'col-lg-3 col-md-6 col-sm-12 pb-1';
        card.innerHTML = `
            <div class="card product-item border-0 mb-4 rounded">
                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                    <img class="img-fluid w-100" src="${product.image_source}" alt="${product.title}">
                </div>
                <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                    <h6 class="text-truncate mb-3">${product.title}</h6>
                    <div class="d-flex justify-content-center">
                        ${product.price !== null? `<h6>$${product.price}</h6>` : `<h6 class="text-muted">Price not available</h6>`}
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-between border">
                    <a href="${product.link}" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                    <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                </div>
            </div>`;
        container.appendChild(card);
    });

}