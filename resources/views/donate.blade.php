@extends('Layouts.Theme') 

@section('title','Blog')

@section('pageTitle')
   <li class="nav-item ">
        <a  href="main">Home</a>
    </li>
    <li class="nav-item ">
        <a  href="product">Products</a>
    </li>
    <li class="nav-item">
        <a  href="About">About</a>
    </li>
    <li class="nav-item active">
        <a href="donate">Donations</a>
    </li>
    <li class="nav-item ">
        <a  href="blog">Blog</a>
    </li>
@endsection

@section('content')
<div class="dono_container col-md-12">
  <div class="banner_container col-md-12">

    <div class="dono_banner col-md-10">
          <div class="txt">
            <h2 class="font-weight-bold">Donate to Palestine</h2>
          <p class="lead">Support the cause of your choice and make a difference in the lives of those in need.</p>
          </div>
        <div class="col-md-6 text-center">
          <img src="images/donate_palestine.png" class="img-fluid" alt="Donate to Palestine">
        </div>
      </div>
    </div>
</div>

<div class="dono_cards">
  <div class="card">
    <div class="card_corner"></div>
    <div class="card_img">
    <img src="images/alkhidmat.png"  alt="Donate to Palestine" class="img-card">
    </div>
    <div class="card-int">
      <p class="card_title">Alkhidmat</p>
      <p class="excerpt">Donate To Ghaza Through AlKhidmat </p>
      <button class="card_button"><a href='https://alkhidmat.org/'>Donate Now!</a></button>
    </div>
  </div>
  <div class="card">
    <div class="card_corner"></div>
    
    <div class="card_img">
    <img src="images/islamicaid.png"  alt="Donate to Palestine" class="img-card">
    </div>
    <div class="card-int">
      <p class="card_title">Islamic Aid</p>
      <p class="excerpt">Donate To Ghaza Through Islamic Aid</p>
      <button class="card_button"><a href='https://islamicaid.com/'>Donate Now!</a></button>
    </div>
  </div>
  <div class="card">
    <div class="card_corner"></div>
    <div class="card_img">
    <img src="images/islamicrelief.jpg"  alt="Donate to Palestine" class="img-card">
    </div>
    <div class="card-int">
      <p class="card_title">Islamic Relief</p>
      <p class="excerpt">Donate To Ghaza Through Islamic Relief</p>
      <button class="card_button"><a href='https://islamic-relief.org/'>Donate Now!</a></button>
    </div>
  </div>
  <div class="card">
    <div class="card_corner"></div>
    <div class="card_img">
    <img src="images/jdc.png"  alt="Donate to Palestine" class="img-card">
    </div>
    <div class="card-int">
      <p class="card_title">JDC Welfare</p>
      <p class="excerpt"><a href='https://jdcwelfare.org/'>Donate To Ghaza Through JDC<a></p>
      <button class="card_button">Donate Now!</button>
    </div>
  </div>
  <div class="card">
    <div class="card_corner"></div>
    <div class="card_img">
    <img src="images/unfpa.jpg"  alt="Donate to Palestine" class="img-card">
    </div>  
    <div class="card-int">
      <p class="card_title">UNFPA</p>
      <p class="excerpt">Donate To Ghaza Through UNFPAt</p>
      <button class="card_button">Donate Now!</button>
    </div>
  </div>
  <div class="card">
    <div class="card_corner"></div>
    <div class="card_img">
    <img src="images/unrwa.png"  alt="Donate to Palestine" class="img-card">
    </div>
    <div class="card-int">
      <p class="card_title">UNRWA</p>
      <p class="excerpt">Donate To Ghaza Through UNRWA</p>
      <button class="card_button">Donate Now!</button>
    </div>
  </div>
  
</div>

<script>
  function atclick(){

  }
@endsection