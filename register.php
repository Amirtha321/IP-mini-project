<?php
include 'config.php';
session_start();
if(isset($_POST['register'])){
$name = $_POST["name"];
$email = $_POST["email"];
$pwd = $_POST["password"];

$sql = "INSERT INTO customers(name, email, password) VALUES ('$name','$email','$pwd')";
if ($con->query($sql) === TRUE) {
    // header('location: login.html');
    header('location: login.php');
  } else {
    echo "Error: " . $sql . "<br>" . $con->error;
  }
}
?> 

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Register Page</title>
</head>

<body class=" bg-primary pt-5">
  <div class="container mt-5 formcontainer bg-light border border-light rounded-3 w-25">
    <div class="container p-5 rounded-3">
      <h1 class="p-5 text-center">Register</h1>
      <form method="POST" action="">
        <div class="mb-3">
          <label for="exampleInputName" class="form-label">Name</label>
          <input type="text" name="name" class="form-control" id="exampleInputName" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">Enter your full name</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>

        <button type="submit" name="register" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>

