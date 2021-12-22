<?php

session_start();
// if (!isset($_SESSION['uname'])) {
//   header('location:login.php');
// }

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <title>Home Page</title>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark ps-5 sticky-lg-top color">
    <div class="container-fluid">
      <a class="navbar-brand h1" href="#">FLASH CARS</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
        <ul class="navbar-nav  mb-2 mb-lg-0 nav justify-content-end p-1 ">
          <li class="nav-item ps-2">
            <a class="nav-link " aria-current="page" href="#header">Home</a>
          </li>
          <li class="nav-item ps-2">
            <a class="nav-link " aria-current="page" href="#cars">Cars</a>
          </li>
          <li class="nav-item dropdown ps-2">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Account
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <?php
              if (isset($_SESSION['uname'])) {
                echo ' <li>
                <p class="dropdown-item">Welcome,

                                                  ' . $_SESSION["uname"] . '
                                                  </p>
              </li>
              <li><a class="dropdown-item" href="orders.php">My orders</a></li>
              <li><a class="dropdown-item" href="logout.php" >Log out</a></li>';
              } else {
                echo ' <li><a class="dropdown-item" href="register.php">Register</a></li>
              <li><a class="dropdown-item" href="login.php" >Log In</a></li>';
              }
              ?>




            </ul>
          </li>
          <li class="nav-item ps-2">
            <a class="nav-link " aria-current="page" href="#about">About</a>
          </li>
          <li class="nav-item ps-2 pe-5">
            <a class="nav-link " aria-current="page" href="#contact">Contact</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>

  <section id="header">


    <div id="carouselExampleIndicators" class="carousel slide ps-4 pe-4 pb-5" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
   
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="1500">
          <img src="images/banner-image-2.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item " data-bs-interval="1500">
          <img src="images/banner-image-1.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item" data-bs-interval="1500">
          <img src="images/banner-image-3.jpg" class="d-block w-100" alt="...">
        </div>
       
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>


  </section>
  <section id="cars">
    <div class="container pt-5 ps-1 pe-1 pb-5">
      <h1 class="sectionhead pb-5">Cars Available</h1>
      <div class="container">
        <div class="row ">

          <div class="col-lg-3 col-md-6 pb-1 rounded-3 ">
            <div class="card shadow-lg p-3 mb-5 bg-body rounded-3 " style="width: 18rem;">
              <img src="images/c1.webp" class="card-img-top" alt="car img">
              <div class="card-body">
                <h5 class="card-title">BMW</h5>
                <p class="card-text">Model S </p>
                <a href="booking.php?img=images/c1.webp&car=BMW-Model-S" class="btn btn-primary">Book Now</a>
              </div>
            </div>

          </div>
          <div class="col-lg-3 col-md-6 pb-1 rounded-3">
            <div class="card shadow-lg p-3 mb-5 bg-body rounded-3" style="width: 18rem;">
              <img src="images/c2.webp" class="card-img-top" alt="car img">
              <div class="card-body">
                <h5 class="card-title">AUDI</h5>
                <p class="card-text">Model A7</p>
                <a href="booking.php?img=images/c2.webp&car=AUDI-Model-A7" class="btn btn-primary">Book Now</a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 pb-1 rounded-3">
            <div class="card shadow-lg p-3 mb-5 bg-body rounded-3" style="width: 18rem;">
              <img src="images/c3.jfif" class="card-img-top" alt="car img">
              <div class="card-body">
                <h5 class="card-title">BENZ</h5>
                <p class="card-text">Model Y </p>
                <a href="booking.php?img=images/c3.jfif&car=BENZ-Model-Y" class="btn btn-primary">Book Now</a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 pb-1 rounded-3">
            <div class="card shadow-lg p-3 mb-5 bg-body rounded-3" style="width: 18rem;">
              <img src="images/c1.webp" class="card-img-top" alt="car img">
              <div class="card-body">
                <h5 class="card-title">TESLA</h5>
                <p class="card-text">Model S </p>
                <a href="booking.php?img=images/c1.webp&car=TESLA-Model-S" class="btn btn-primary">Book Now</a>
              </div>
            </div>
          </div>

        </div>
        <div class="row ">
          <div class="col-lg-3 col-md-6 pt-1 rounded-3">
            <div class="card shadow-lg p-3 mb-5 bg-body rounded-3" style="width: 18rem;">
              <img src="images/c2.webp" class="card-img-top" alt="car img">
              <div class="card-body">
                <h5 class="card-title">TESLA</h5>
                <p class="card-text">Model Y</p>
                <a href="booking.php?img=images/c2.webp&car=TESLA-Model-Y" class="btn btn-primary">Book Now</a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 pt-1 rounded-3">
            <div class="card shadow p-3 mb-5 bg-body rounded-3" style="width: 18rem;">
              <img src="images/c3.jfif" class="card-img-top" alt="car img">
              <div class="card-body">
                <h5 class="card-title">BMW</h5>
                <p class="card-text">Model V </p>
                <a href="booking.php?img=images/c3.jfif&car=BMW-Model-V" class="btn btn-primary">Book Now</a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 pt-1 rounded-3">
            <div class="card shadow-lg p-3 mb-5 bg-body rounded-3" style="width: 18rem;">
              <img src="images/c1.webp" class="card-img-top" alt="car img">
              <div class="card-body">
                <h5 class="card-title">FORD</h5>
                <p class="card-text">Model S </p>
                <a href="booking.php?img=images/c1.webp&car=FORD-Model-S" class="btn btn-primary">Book Now</a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 pb-1 rounded-3">
            <div class="card shadow-lg p-3 mb-5 bg-body rounded-3" style="width: 18rem;">
              <img src="images/c2.webp" class="card-img-top" alt="car img">
              <div class="card-body">
                <h5 class="card-title">BMW</h5>
                <p class="card-text">Model C </p>
                <a href="booking.php?img=images/c2.webp&car=BMW-Model-C" class="btn btn-primary">Book Now</a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section class="page-section bg-dark text-white mb-0 p-5" id="about">
    <div class="container p-5">

      <h2 class="page-section-heading text-center text-uppercase text-white">About</h2>

      <div class="divider-custom divider-light">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
        <div class="divider-custom-line"></div>
      </div>

      <div class="row">
        <div class="col-lg-4 ms-auto">
          <p class="lead p-2">We here at Flash Cars private limited care about our customers so we assure that all cars are of superior quality and maintained well. We provide cars that are safe and strong. Our company's goal is to make the world a better place by increasing the standards of automobiles</p>
        </div>
        <div class="col-lg-4 me-auto p-2">
          <p class="lead">Our company "Flash Cars" was founded by Akhash in 2021. Our company's motto is " Make Cars Available For Everyone". We aim at selling quality cars at affordable prices </p>
        </div>
      </div>

    </div>
  </section>
  <section class="page-section" id="contact">
    <div class="container p-5">
      <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0 ">Contact Me</h2>
      <div class="divider-custom p-3">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
        <div class="divider-custom-line"></div>
      </div>

      <div class="row justify-content-center">
        <div class="col-lg-8 col-xl-7">
          <form id="contactForm" >

            <div class="form-floating mb-3">
              <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
              <label for="name">Full name</label>
              <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
            </div>

            <div class="form-floating mb-3">
              <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
              <label for="email">Email address</label>
              <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
              <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
            </div>

            <div class="form-floating mb-3">
              <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
              <label for="phone">Phone number</label>
              <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
            </div>

            <div class="form-floating mb-3">
              <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
              <label for="message">Message</label>
              <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
            </div>
            <button class="btn btn-primary btn-xl disabled" id="submitButton" type="submit">Send</button>
          </form>
        </div>
      </div>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>