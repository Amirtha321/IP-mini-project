<?php
include 'config.php';
session_start();
if (isset($_POST['order'])) {
  $phone = $_POST['phone'];
  $address = $_POST['address'];
  $city = $_POST["city"];
  $pin = $_POST["pin"];


  $sql = "INSERT INTO orders(phone, address, city, pin) VALUES ('$phone','$address','$city','$pin')";
  if ($con->query($sql) === TRUE) {
    header('location: login.php');
  } else {
    echo "Error: " . $sql . "<br>" . $con->error;
  }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Booking Page</title>

</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-blue bg-dark ps-5 sticky-lg-top">
    <div class="container-fluid">
      <a class="navbar-brand h1" href="#">CARS</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
        <ul class="navbar-nav  mb-2 mb-lg-0 nav justify-content-end p-1 ">
          <li class="nav-item ps-1">
            <a class="nav-link " aria-current="page" href="#header">Home</a>
          </li>
          <li class="nav-item ps-1">
            <a class="nav-link " aria-current="page" href="http://localhost/IP-mini-project/home.php#cars">Cars</a>
          </li>
          <li class="nav-item ps-1">
            <a class="nav-link " aria-current="page" href="#about">About</a>
          </li>
          <li class="nav-item ps-1 pe-5">
            <a class="nav-link " aria-current="page" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>



  <div class="container pt-5">
    <div class="row ">
      <div class="col-lg-6 col-md-6">
        <h1 class="sectionhead">BMW Model S</h1>
        <img src="images/c1.webp " width=500 alt="">

      </div>
      <div class="col-lg-6 col-md-6">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Diam donec adipiscing tristique risus nec feugiat in fermentum. Et pharetra pharetra massa massa ultricies mi quis hendrerit dolor. Ac felis donec et odio pellentesque diam volutpat. Ut etiam sit amet nisl. Eros donec ac odio tempor orci dapibus ultrices in iaculis. Sem fringilla ut morbi tincidunt augue interdum velit. Turpis massa tincidunt dui ut ornare. Mattis rhoncus urna neque viverra justo nec ultrices. Mi tempus imperdiet nulla malesuada pellentesque elit. Diam in arcu cursus euismod quis viverra nibh cras. Condimentum vitae sapien pellentesque habitant morbi tristique senectus et.

          Amet volutpat consequat mauris nunc congue. Sit amet aliquam id diam maecenas ultricies. Elementum pulvinar etiam non quam lacus. Enim sit amet venenatis urna cursus eget nunc scelerisque. Mollis aliquam ut porttitor leo a. Sapien et ligula ullamcorper malesuada proin. Lorem dolor sed viverra ipsum. Mollis aliquam ut porttitor leo. Lobortis feugiat vivamus at augue eget arcu dictum varius duis. Non diam phasellus vestibulum lorem sed.





        </p>
        <button type="button" class="btn btn-primary bt" data-bs-toggle="modal" data-bs-target="#exampleModal">Book Now</button>
      </div>
    </div>

    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Order Details</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form method="POST" action="test.php">
              <div class="mb-3">
                <label for="exampleInputContact" class="form-label">Phone number</label>
                <input type="text" name="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">Provide your phone number for more info.</div>
              </div>
              <div class="mb-3">
                <label for="exampleCarName" class="form-label">Address</label>
                <input type="text" name="address" class="form-control" id="exampleName" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">Enter your Address</div>
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">City</label>
                <input type="text" name="city" class="form-control" id="exampleInputPassword1">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Pincode</label>
                <input type="text" name="pin" class="form-control" id="exampleInputPassword1">
              </div>

            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" name="order" class="btn btn-primary" onclick="javascript:window.location.href='test.php';">Confirm Order</button>
          </div>
        </div>
      </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.js"></script>
<script>
    $(document).ready(function(){

    $('.order').click(function(){
document.write("hello");
     
    });});
</script>
</body>

</html>