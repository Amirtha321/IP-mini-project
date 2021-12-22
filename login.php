<?php
include 'config.php';
session_start();

if (isset($_POST['login'])) {
  $name = mysqli_real_escape_string($con, $_POST["name"]);
  // $email = mysqli_real_escape_string($con, $_POST['email']);
  $pwd = mysqli_real_escape_string($con, $_POST['password']);
  $pwd = hash('sha256', $pwd);
  $query = "SELECT * FROM customers WHERE name='$name' && password='$pwd'";
  $result = mysqli_query($con, $query);
  $num = mysqli_num_rows($result);

  // $email = $_POST["email"];
  // $pwd =  password_hash($_POST["password"], PASSWORD_DEFAULT);
  // $sql = "SELECT * FROM customers WHERE email='$email' && password='$pwd'";
  // $result = mysqli_query($con, $sql);
  //       $num = mysqli_num_rows($result);     
  if ($num == 1) {
    $_SESSION["uname"] = $name;
    header('location:home.php');
  } else {
    echo '<script>alert("Wrong Credentials")</script>';
  }
}

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Login Page</title>
</head>

<body class=" bg-danger pt-5">
  <div class="container mt-5 formcontainer bg-light border border-light rounded-3 w-25">
    <div class="container p-5 rounded-3">
      <h1 class="p-5 text-center">Login</h1>
      <form method="POST" action="">
        <div class="mb-3">
          <label for="exampleInputName" class="form-label">Name</label>
          <input type="text" name="name" class="form-control" id="exampleInputName" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">Enter your full name</div>
        </div>
        <!-- <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div> -->
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="row">
          <div class="mb-3">
            <p class="form-text">Don't have an account? <a href="register.php">Register</a></p>
          </div>

          <button type="submit" name="login" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>

  </form>
  </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>