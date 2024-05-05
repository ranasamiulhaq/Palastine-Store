@extends('Layouts.Theme') 

@section('title','About')
@section('pageTitle')
   <li class="nav-item ">
        <a  href="main">Home</a>
    </li>
    <li class="nav-item ">
        <a  href="product">Products</a>
    </li>
    <li class="nav-item active">
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

   <div class="about_card" >
        <div class="about_text">
            <h2>About Us</h2>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic quos, dolores omnis rerum doloremque reprehenderit!
                Necessitatibus reprehenderit qui laboriosam aut iure veniam voluptates id. Laudantium corrupti expedita ipsum itaque
                voluptatibus!
            </p>
        </div>
        <div class="about_img">
            <img class="image_a" src="images/alqasa.png" alt="alaqsa">
        </div>
    </div>
    <div class="about_card card_rev">
        <div class="about_text">
            <h2>About Us</h2>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic quos, dolores omnis rerum doloremque reprehenderit!
                Necessitatibus reprehenderit qui laboriosam aut iure veniam voluptates id. Laudantium corrupti expedita ipsum itaque
                voluptatibus!
            </p>
        </div>
        <div class="about_img">
            <img class="image_a" src="images/save.png" alt="alaqsa">
        </div>
    </div>  
    
@endsection