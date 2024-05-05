<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Line Chart Example</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/analytics.css">

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" src="JS/analytics.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Murder-Free Store</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="#">Analytics <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="analyticsManage">Update Products </span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="analyticsAdd">Add Product</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="analyticDelete">Delete Product</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="main">Visit Site</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="adminLogout">Logout</a>
            </li>
          </ul>
        </div>
      </nav>
      <div class="bodyContainer">
      <div id="mainContainer">
        <!-- <div class="card flexContainer">
          <div id="chart-container"></div>
        </div>
        <div class="rowflexContainer">
          <div class="card flexContainer halfContainer">
            <div id="piechart_3d"></div>
          </div>
          <div class="card flexContainer halfContainer">
            <div id="curve_chart"></div>
          </div>
        </div> -->
        <div class="rowflexContainer ">
        <div class="formCard flexContainer">
          <div id="totalWebsiteViews" class="txtinput mTitle ">
            <h3>Total Website Views</h3>
            <p id="wViews"><?php echo $totalViews; ?></p>
          </div>
        </div>
        
        <div class="formCard flexContainer">
          <div id="currentSignedUpUsers" class="txtinput mTitle">
            <h3>Current Signed Up Users</h3>
            <p id="wViews"><?php echo $totalUsers; ?></p>

          </div>
        </div>
        <div class="formCard flexContainer">
          <div id="tProducts" class="txtinput mTitle">
            <h3> Total Products On Site</h3>
            <p id="wViews"><?php echo $totalProducts; ?></p>

          </div>
        </div>
        <div class="formCard flexContainer">
          <div id="currentSignedUpUsers" class="txtinput mTitle">
            <h3>Punjab Cash And Carry Products</h3>
            <p id="wViews"><?php echo $pccProd; ?></p>

          </div>
        </div>
        <div class="formCard flexContainer">
          <div id="currentSignedUpUsers" class="txtinput mTitle">
            <h3>Carre Four Products</h3>
            <p id="wViews"><?php echo $cfProd; ?></p>

          </div>
        </div>
      </div>
        
        </div>
      </div>
      
        
        
        
</body>
</html>
