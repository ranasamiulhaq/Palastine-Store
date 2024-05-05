<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Document</title>
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
              <a class="nav-link" href="analyticsManage.html">Update Products </a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Add Product<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="analyticDelete.html">Delete Product</a>
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
      <div class="bodyContainer">
      <div id="mainContainer">
        <div class="mTitle">
            <h3>
                Add Product
            </h3>
        </div>
        <div class="formCard">
            <div id="detailContainer">
                <form action="/analyticsAdd" method="post" enctype="multipart/form-data">
                  @csrf
                    <input type="text" id="title" name="title" placeholder="Enter Product Name">
                    <input type="text" id="link" name="link" placeholder="Enter Product Link">
                    <input type="text" id="price" name="price" placeholder="Enter Product Price">
                    <input type="text" id="desc" name="description" placeholder="Enter Product Description">
                    <input type="text" id="company" name="company" placeholder="Enter Company Name">
                    <input type="text" id="image_source" name="image_source" placeholder="Enter Image Source">
                    <br>
                   <button type="submit">Add Product</button>
                </form>
                
            </div>
        </div>
      </div>
      </div>
      
</body>
</html>