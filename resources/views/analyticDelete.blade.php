<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/analytics.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Murder-Free Store</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="adminAnalytics.html">Analytics </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="analyticsManage.html">Update Products <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="analyticsAdd.html">Add Product</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Delete Product</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../main.html">Visit Site</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="adminLogout">Logout</a>
            </li>
          </ul>
        </div>
      </nav>
      <div id="mainContainer">
        <div class="mTitle">
            <h3>
                Delete Products!
            </h3>
        </div>
        <div class="mCard">
            <div style="margin: 1%;">
                <input id="searchInput" type="text" placeholder="Enter Product ID">
            <button id="Searchbtn">Search</button>
            </div>
            
            <div id="detailContainer">
                <textarea name="prodDetail" id="txtDetails" cols="60" rows="15" readonly style="color: gray;" >{
                    "productId": "123456",
                    "productName": "Smartphone",
                    "price": 499.99,
                    "brand": "TechCo",
                    "inStock": true,
                    "features": [
                      "5.5-inch Display",
                      "Quad-core Processor",
                      "64GB Storage",
                      "12MP Camera"
                  }
                  </textarea>
                  
                  <br>
                <button id="delbtn">Delete Product</button>
            </div>
        </div>
      </div>

      <script src="js/analyticsManage.js"></script>
</body>
</html>