// document.addEventListener('DOMContentLoaded', function () {
//     var txtDetails = document.getElementById('txtDetails');
//     var textareaHint = document.querySelector('.textarea-hint');

//     txtDetails.addEventListener('input', function () {
//         if (txtDetails.value.trim() !== '') {
//             textareaHint.style.display = 'none';
//         } else {
//             textareaHint.style.display = 'block';
//         }
//     });
// });

// var add = document.getElementById('addbtn');

// add.addEventListener('click', function () {
//     var txtDetails = document.getElementById('txtDetails').value;

//     try {
//         var jsonData = JSON.parse(txtDetails);

//         const response =fetch('/insert-products', {
//             method: 'POST',
//             headers: {
//                 'Content-Type': 'application/json',
//                 'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
//             },
//             body: JSON.stringify({
//                 title: jsonData.title, 
//                 price: jsonData.price,
//                 description: jsonData.description,
//                 company: jsonData.company,
//                 link: jsonData.link, 
//                 image_source: jsonData.image
//             }),
//         });
          
//         if (response.ok) {
//             const data = response.json();
//             if (data && data.error) {
//                 alert('Error: ' + data.error);
//             } else {
//                 alert('Data inserted successfully');
//             }
//         } else {
//             alert('An error occurred while processing the request');
//         }

//     } catch (e) {
//         alert('Invalid JSON format. Please check your input.');
//         console.error(e);
//     }
// });

var searchButton = document.getElementById('Searchbtn');


searchButton.addEventListener('click', function () {
    if (document.getElementById('delbtn')) {

    var term = document.getElementById("searchInput").value;
    const endpoint = "/searchProd/" + term;
    const delpoint = "/delProd/" + term;
    const resultContainer = document.getElementById("txtDetails");

    fetch(endpoint)
        .then(response => {
            if (!response.ok) {
                throw new Error('HTTP error! Status: ' + response.status);
            }
            return response.json();
        })
        .then(data => {
            const jsonString = JSON.stringify(data, null, 2);

            resultContainer.innerHTML = `${jsonString}`;
        })
        .catch(error => {
            console.error('Error', error);
            resultContainer.innerHTML = 'Error fetching data.';
        });

       

          }
else
{
    var term = document.getElementById("searchInput").value;
    const endpoint = "/searchProd/" + term;
    const title = document.getElementById("title");
    const price = document.getElementById("price");
    const description = document.getElementById("description");
    const company = document.getElementById("company");
    const link = document.getElementById("link");
    const image_source = document.getElementById("image_source");
    const id = document.getElementById("id");
    fetch(endpoint)
        .then(response => {
            if (!response.ok) {
                throw new Error('HTTP error! Status: ' + response.status);
            }
            return response.json();
        })
        .then(data => {
            id.value = data.id;
            title.value = data.title;
            price.value = data.price;
            link.value = data.link;
            description.value = data.description;
            company.value = data.company;

            image_source.value = data.image_source;
            
        })
        .catch(error => {
            console.error('Error', error);
            resultContainer.innerHTML = 'Error fetching data.';
        });
}}
)


if(
    document.getElementById("delbtn")
){
const delbtn = document.getElementById("delbtn");
delbtn.addEventListener('click', function () {
    var term = document.getElementById("searchInput").value;
    const delpoint = "/delProd/" + term;

    fetch(delpoint, {
        method: 'DELETE', 
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        }
    })
        .then(response => {
            if (!response.ok) {
                throw new Error('HTTP error! Status: ' + response.status);
            }
            return response.json();
        })
        .then(data => {
            alert(data.message); 
            window.location.reload(); 
        })
        .catch(error => {
            console.error('Error', error);
            alert('Error deleting product. Please try again.'); 
        });
});
}

