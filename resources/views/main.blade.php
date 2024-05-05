@extends('Layouts.Theme') 

@section('title','Home')
@section('pageTitle')
    <li class="nav-item active">
        <a  href="main">Home</a>
    </li>
    <li class="nav-item ">
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
@endsection

@section('content')

    <div class="container-fluid pt-5 mb-5">
    <div class="logo justify-content-between">
        <form >
            <img src="images/mainlogo.png" style="height:150px"  alt="logo">
            <input id="searchstore" list="stores" class="form-inline col-sm-12 col-md-8 col-ld-6 py-1" type="search" placeholder="Search in Mart" aria-label="Search">
            <datalist id="stores">
            </datalist>
            <button id="search"><a class="search-icon " href="#" ><img class="search" src="images\search.png"  style="height: 35px;"></a></button>
        </form>
    </div>
    </div>

        
    <div class="row text-center">
        <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active" data-interval="10000">
                <img src="images\cr3.jpg" class="d-block w-100" alt="First slide">
              </div>
              <div class="carousel-item" data-interval="2000">
                <img src="images\cr2.jpg" class="d-block w-100" alt="2nd slide">
              </div>
              <div class="carousel-item">
                <img src="images\cr1.jpg" class="d-block w-100" alt="3rd slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
    </div>
          
    <div class="d-flex text-center justify-content-center pt-5">
        <nav class="navbar navbar-expand-lg navbar-light  gurranty">
                <ul class="navbar-nav ">
                    <li class="nav-item">
                    <img class="d-inline w-40" src="images\delivey.png" style="height: 50px;">
                    <a class="nav-link" >Nation Wide Delivery</a>
                    </li>
                    <li class="nav-item">
                    <img class="d-inline w-40" src="images\strore.png" style="height: 50px;">
                        <a class="nav-link">Trusted Stores</a>
                    </li>
                    <li class="nav-item">
                    <img class="d-inline w-40" src="images\best.png" style="height: 50px;">
                        <a class="nav-link">Best Price Guarantee</a>
                    </li>
                    <li class="nav-item">
                    <img class="d-inline w-40" src="images\moneyback.png" style="height: 50px;">
                        <a class="nav-link">100% Authentic Products</a>
                    </li>
                </ul>
            </nav>
    </div>

  <!-- Productss -->

  <!-- Offer Start -->
  <div class="container-fluid offer pt-5">
    <div class="row px-xl-5">
        <div class="col-md-6 pb-4">
            <div class="position-relative text-center text-md-right text-white mb-2 py-5 px-5 sale">
                <img src="images/bag.png"  style="height: 300px; max-width: 100%; " alt="">
                <div class="position-relative" style="z-index: 1;">
                    <h5 class="text-uppercase  mb-3">20% off the all order</h5>
                    <h1 class="mb-4 font-weight-semi-bold">Limited Time Deals</h1>
                    <a href="" class="btn  py-md-2 px-md-3">Shop Now</a>
                </div>
            </div>
        </div>
        <div class="col-md-6 pb-4">
            <div class="position-relative text-center text-md-left text-white mb-2 py-5 px-5 sale">
                <img src="images/falsh.png" style="height: 300px; max-width: 100%; " w-40 alt="">
                <div class="position-relative" style="z-index: 1;">
                    <h5 class="text-uppercase  mb-3">Sale offers</h5>
                    <h1 class="mb-4 font-weight-semi-bold">Blessed Friday Sale</h1>
                    <a href="" class="btn py-md-2 px-md-3">Shop Now</a>
                </div>
            </div>
        </div>
    </div>
<!-- Offer End -->
@endsection