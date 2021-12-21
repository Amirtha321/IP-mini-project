<?php
// include 'config.php';
// session_start();
//  if(isset($_POST['login'])){
//   $email = mysqli_real_escape_string($con,$_POST['email']);
//   $pwd = mysqli_real_escape_string($con,$_POST['password']); 
//   $pwd = hash('sha256',$pwd);
//   $query = "SELECT * FROM orders WHERE email='$email' && password='$pwd'";
//   $result = mysqli_query($con, $query);
//   $num = mysqli_num_rows($result);   

//   // $email = $_POST["email"];
//   // $pwd =  password_hash($_POST["password"], PASSWORD_DEFAULT);
//   // $sql = "SELECT * FROM customers WHERE email='$email' && password='$pwd'";
//   // $result = mysqli_query($con, $sql);
//   //       $num = mysqli_num_rows($result);     
//         if($num == 1){
//             header('location:home.php');
//         }
//         else{
//             echo '<script>alert("Wrong Credentials")</script>';    
    
//         }
//  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>orders</title>
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

</body>
</html>