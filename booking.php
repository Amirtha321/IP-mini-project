<?php
$img_url = $_GET['img'];
$car_name = $_GET['car'];
include 'config.php';
session_start();
if (isset($_POST['order'])) {
  $phone = $_POST['phone'];
  $address = $_POST['address'];
  $city = $_POST["city"];
  $pin = $_POST["pin"];


  $sql = "INSERT INTO orders(phone, address, city, pin) VALUES ('$phone','$address','$city','$pin')";
  if ($con->query($sql) === TRUE) {
    $_SESSION['phone'] = $phone;
    header('location: success.php');
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
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark ps-5 sticky-lg-top">
    <div class="container-fluid">
      <a class="navbar-brand h1" href="#">CARS</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
        <ul class="navbar-nav  mb-2 mb-lg-0 nav justify-content-end p-1 ">
          <li class="nav-item ps-1">
            <a class="nav-link " aria-current="page" href="http://localhost/IP-mini-project/home.php#header">Home</a>
          </li>
          <li class="nav-item ps-1">
            <a class="nav-link " aria-current="page" href="http://localhost/IP-mini-project/home.php#cars">Cars</a>
          </li>
          <li class="nav-item ps-1">
            <a class="nav-link " aria-current="page" href="http://localhost/IP-mini-project/home.php#about">About</a>
          </li>
          <li class="nav-item ps-1 pe-5">
            <a class="nav-link " aria-current="page" href="http://localhost/IP-mini-project/home.php#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>



  <div class="container pt-5">
    <div class="row ">
      <div class="col-lg-6 ">
        <h1 class="sectionhead"><?php echo "$car_name" ?></h1>
        <img src=<?php echo "$img_url" ?> width="500" alt="">

      </div>
      <div class="col-lg-6">
        <h4 class=" pt-2">Price: ₹ 49,99,999</h4>
        <h4 class=" pt-4">About this item: </h4>
        <p>
        <ul>
          <li>Made of Fine Metal . The Material of the car is used to give it absolutely clear finish </li>
          <li>Original Sport Car Look, 4 Wheel Drive , 6 Doors Can be Opened </li>
          <li>Lights and Music : Front and Tail lights & Sounds when doors are opened. </li>
        </ul>
        </p>
        <h4 class=" pt-4">Specifications:</h4>
        <table class="table ">


          <tbody>
            <tr>
              <th scope="row">Brand</th>
              <td>BMW</td>

            </tr>
            <tr>
              <th scope="row">Model Name</th>
              <td>Model S</td>

            </tr>
            <tr>
              <th scope="row">Material</th>
              <td>Steel</td>

            </tr>
            <tr>
              <th scope="row">Colour</th>
              <td>Red</td>

            </tr>

          </tbody>
        </table>
      </div>
    </div>

    <section id="order-form">
      <div class="container p-5">
        <form method="POST" action="">
          <div class="mb-3">
            <!-- <label for="exampleInputphone" class="form-label">Model ID</label>
            <input type="text" name="model" class="form-control" id="exampleInputphone" aria-describedby="emailHelp"> -->
          </div>
          <div class="mb-3">
            <label for="exampleInputphone" class="form-label">Phone number</label>
            <input type="text" name="phone" class="form-control" id="exampleInputphone" aria-describedby="emailHelp">
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
          <input type="submit" name="order" value="Confirm Booking" class="btn btn-primary">
        </form>
      </div>

    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>