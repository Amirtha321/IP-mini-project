<?php
include 'config.php';
session_start();

  $phone = $_POST['phone'];
  $address = $_POST['address'];
  $city = $_POST["city"];
  $pin = $_POST["pin"];


  $sql = "INSERT INTO orders(phone, address, city, pin) VALUES ('$phone','$address','$city','$pin')";
  if ($con->query($sql) === TRUE) {
 
  } else {
    echo "Error: " . $sql . "<br>" . $con->error;
  }

?>