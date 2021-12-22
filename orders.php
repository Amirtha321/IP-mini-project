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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>orders</title>
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

  <section id="table">
    <div class="container">
      <?php
      session_start();
      if (isset($_SESSION['phone'])){
      $phno = $_SESSION['phone'];
      include 'config.php';
      $sql = "SELECT * FROM orders WHERE phone = $phno ";
      $result = mysqli_query($con, $sql);
      $counter = 1;
      echo '<div class = "container p-5" ><h1>Orders List</h1>';
      echo '<table class="table table-striped table-bordered ">';
      echo '<thead>
    <tr>
      <th scope="col">S.No</th>
      <th scope="col">Address</th>
      <th scope="col">City</th>
      <th scope="col">Pincode</th>
      
    </tr>
  </thead>';
  echo'</div>';

      while ($row = mysqli_fetch_array($result)) {
        echo "<tr><td>" . $counter . "</td><td>" . $row['address'] . "</td><td>" . $row['city'] . "</td>   <td>" . $row['pin'] . "</td>   </tr>";
        $counter++;
      }

      echo "</table>";
      mysqli_close($con);
    }
    else{
      echo "<h1>No entries</h1>";
    }
      
      ?>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>