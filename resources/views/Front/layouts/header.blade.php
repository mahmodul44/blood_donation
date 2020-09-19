<html>
<head>
<title>blood bank</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light " style="background-color:#dc3545">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="{{URL::to('index')}}">Blood Bank Management System</a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
    <li>
    <a class="nav-link" href="#"></a>
    </li> 
    <li>
    <a class="nav-link" href="#"></a>
    </li>
    <li>
    <a class="nav-link" href="#"></a>
    </li> 
    <li>
    <a class="nav-link" href="#"></a>
    </li>        
      <li class="nav-item active">
        <a class="nav-link text-white" href="{{URL::to('index')}}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li  class="nav-item ">
        <a class="nav-link text-white" href="{{URL::to('about')}}">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="{{URL::to('whyblood_donar')}}">Why Become Donar</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="{{URL::to('bedonar')}}">Become Donar</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="{{URL::to('search_donar')}}">Search Donar</a>
      </li>
       <li class="nav-item">
        <a class="nav-link text-white" href="{{URL::to('front_gallery')}}">Gallery</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="{{URL::to('contact')}}">Contact Us</a>
      </li>
    </ul>
    <!-- <form action="" class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2"  type="search" placeholder="Search blood group" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> -->
  </div>
</nav>
