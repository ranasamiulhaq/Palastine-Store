<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/product.css">

    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg  fixed-top mainNav">
        <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
            <ul class="navbar-nav topnavs">
                
            <li class="nav-item">
                <a  href="main">Home</a>
            </li>
            <li class="nav-item active">
                <a  href="product">Products</a>
            </li>
            <li class="nav-item">
                <a  href="About">About</a>
            </li>
            <li class="nav-item ">
                <a href="donate">Donations</a>
            </li>
            <li class="nav-item ">
                <a  href="blog">Blog</a>
            </li>
                
            </ul>
            <ul class="navbar-nav topnavs justify-content-end">
                    <li class="nav-item">
                        <a  href="#"><img src="images\cart.png" style="height: 25px;" ></a>
                    </li>
                    <li class="nav-item">
                        <a  href="#">Cart</a>
                    </li>
                    <li class="nav-item">
                        <a  href="login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a  href="signup">Signin</a>
                    </li>
                    <li class="nav-item">
                        <a href="admin">Admin</a>
                    </li>
            </ul>
        </div>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

    </nav>

    <div class="container mt-3">
    <div class="container-fluid pt-5 mb-5">
    <div class="logo justify-content-between">
        <form  action="\product" method="post">
            @csrf
            <img src="images/mainlogo.png" style="height:150px"  alt="logo">
            <input id="searchstore" list="stores" class="form-inline col-sm-12 col-md-8 col-ld-6 py-1" name="query" type="search" placeholder="Search in Mart" aria-label="Search">
            <datalist id="stores">
            </datalist>
            <button id="search"><a class="search-icon " href="#" ><img class="search" src="images\search.png"  style="height: 35px;"></a></button>
        </form>
    </div>
    </div>
</div>
    <div class="row px-xl-5 pb-3">
    @foreach ($products as $product)
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="card product-item border-0 mb-4 rounded">
                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                    <img class="img-fluid w-100" src="{{ $product->image_source }}" alt="{{ $product->title }}">
                </div>
                <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                    <h6 class="text-truncate mb-3">{{ $product->title }}</h6>
                    <div class="d-flex justify-content-center">
                        @if (!is_null($product->price))
                            <h6>${{ $product->price }}</h6>
                        @else
                            <h6 class="text-muted">Price not available</h6>
                        @endif
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-between border">
                    <a href="{{ $product->link }}" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                    <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                </div>
            </div>
        </div>
    @endforeach
 </div>
           
<div class="container-fluid foot mt-5 pt-5">
    <div class="row px-xl-5 pt-5">
        <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
            <a href="" class="text-decoration-none">
                <h1 class="mb-4 font-weight-semi-bold">Online Bazaar</h1>
            </a>
            <p>This is a Non-Israeli product store. We ensure that none of our products support Israel directly or indirectly.</p>
            <p class="mb-2"><i class="fa fa-map-marker-alt  mr-3"></i>Islamad, Pakistan</p>
            <p class="mb-2"><i class="fa fa-envelope  mr-3"></i>NonIsreal@store.com</p>
            <p class="mb-0"><i class="fa fa-phone-alt  mr-3"></i>+092 333 333333  </p>
        </div>
        <div class="col-lg-8 col-md-12">
            <div class="row">
                <div class="col-md-4 mb-5">
                    <h5 class="font-weight-bold text-dark mb-4">Quick Links</h5>
                    <div class="d-flex flex-column justify-content-start">
                      <a class="text-dark mb-2" href="main.html"><i class="fa fa-angle-right mr-2"></i>Home</a>
                      <a class="text-dark mb-2" href="product.html"><i class="fa fa-angle-right mr-2"></i>Products</a>
                      <a class="text-dark mb-2" href="about.html"><i class="fa fa-angle-right mr-2"></i>About us</a>
                      <a class="text-dark mb-2" href="donation.html"><i class="fa fa-angle-right mr-2"></i>Donations</a>
                      <a class="text-dark mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Checkout</a>
                      <a class="text-dark" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                  </div>
                </div>
                
                <div class="col-md-4 mb-5">
                    <h5 class="font-weight-bold text-dark mb-4">Newsletter</h5>
                    <form action="">
                        <div class="form-group mb-4">
                            <input type="text" class="form-control border-0 py-2" placeholder="Your Name" required="required" />
                        </div>
                        <div class="form-group mb-4">
                            <input type="email" class="form-control border-0 py-2 " placeholder="Your Email"
                                required="required" />
                        </div>
                        <div>
                            <button  type="submit">Subscribe Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
  </div>
  
    <div class="row border-top border-light mx-xl-5 py-4">
        <div class="col-md-6 px-xl-0">
            <p class="mb-md-0  text-md-left text-dark">
                &copy; <a class="text-dark font-weight-semi-bold" href="#">Online Bazaar</a>. All Rights Reserved. 
            </p>
        </div>
        <div class="col-md-6 px-xl-0 text-center text-md-right">
            <img class="img-fluid" src="img/payments.png" alt="">
        </div>
    </div>

<a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="js/product.js"></script>
</body>
</html>
