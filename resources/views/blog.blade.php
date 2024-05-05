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
    <li class="nav-item ">
        <a href="donate">Donations</a>
    </li>
    <li class="nav-item active">
        <a  href="blog">Blog</a>
    </li>
@endsection

@section('content')
    <!-- resources/views/blog.blade.php -->
<div class="banner-pl">
    <label id="news-title">Live Palastine News</label>
</div>  


    <div class="blog-cards">
        @foreach ($news as $neww) 
           <div class="image"></div>
            <div class="card_info col-sm-12 col-md-10 col-lg-10">
              <span class="page pb-4">Al-jazeera</span>
              <a href="#" class="title pb-2">{{ $neww->title }}</a>
              <p class="content">{{ $neww->inf }}</p>
            </div>
         
        @endforeach 
    </div>

@endsection