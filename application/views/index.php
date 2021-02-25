<!DOCTYPE html>
<html>
<head>
<title>Airline </title>
<meta charset=utf-8>
            <meta name="viewport" content="width=device-width,initial-scale=1">

<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">


<link rel="stylesheet" href="../css/style.css">

<style>
</style>
</head>
<body>
  <!---section 1 started-->
  <header>
  <nav>
    <div class="container-fluid top bg-">
      <div class="row text-primary">
        <div class="col-7">
          <i class="fas fa-plane-departure text-primary  fa-1x"></i>
          <h1 class="text-primary"><i>Airline Booking System</i></h1>
          
        </div>
      <div class="col-5 text-dark text-end">
        <i class="fab fa-facebook text-primary "></i>
        <i class="fab fa-instagram text-primary "></i>
        <i class="fab fa-youtube text-primary "></i>
        <i class="fab fa-google text-primary "></i>
      </div>
    </div>
  </div>
    </nav>
</header>



<section>
  <!----Carosel Start-->
    <div id="carouselExampleSlidesOnly" class="carousel slide " data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="../img/38c.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="../img/23c.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="../img/33c.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
    </div>

      <!----Carosel End-->

  <section class="search-sec py">
    <div class="container">
            <div class="row">
              <div class="col-6">
                <form action="#" method="post" novalidate="novalidate">
                  <div class="row">
                <div class="col-lg-12">
                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                            <input type="text" class="form-control search-slt" placeholder="Enter Pickup City">
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                            <input type="text" class="form-control search-slt" placeholder="Enter Drop City">
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                            <select class="form-control search-slt" id="exampleFormControlSelect1">
                                <option>Select Vehicle</option>
                                <option>Example one</option>
                                <option>Example one</option>
                                <option>Example one</option>
                                <option>Example one</option>
                                <option>Example one</option>
                                <option>Example one</option>
                            </select>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                            <button type="button" class="btn btn-danger wrn-btn">Search</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <div class="col-6 box ">
<form class="border  border-2 border-light p-3 rounded-bottom rounded" action="">
<div class="row mb-3">
    <div class="col-sm-10">
      <input type="email" class="form-control" placeholder="email" name="email" required>
    </div>
  </div>
  <div class="row mb-3">
    <div class="col-sm-10">
      <input type="password" class="form-control" placeholder="password" required name="password">
    </div>
  </div>
  <button>
  <input type="submit" class="btn btn-primary" name="submit" value="submit"></button>
<a href="<?php echo base_url()?>main/register">Sign-Up</a>
</form>
</div>
</div>
</div>
</div>
</div>
</section> 
</div>
    <div class="col-4">
    </div>
  </div>
</div>  
</section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script src="js/script.js"></script>
</body>
</html>