document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("searchstore").addEventListener("keydown", function() {
        suggest();
    });

    function suggest() {
        var term = document.getElementById("searchstore").value;
        const endpoint = "/search/" + term;
        const suggestionList = document.getElementById("stores");
        suggestionList.innerHTML = '';

        fetch(endpoint)
            .then(response => {
                if (!response.ok) {
                    throw new Error('HTTP error! Status: ' + response.status);
                }
                return response.json();
            })
            .then(data => {
                data.forEach(store => {
                    const option = document.createElement('option');
                    option.value = store.title;
                    suggestionList.appendChild(option);
                });
            })
            .catch(error => {
                console.error('Error', error);
            });
    }
});
