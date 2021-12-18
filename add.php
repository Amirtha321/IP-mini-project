<?php
$name = $_POST["name"];
$email = $_POST["email"];
$pwd = $_POST["password"];

$sql = "INSERT INTO customers (name, email, password) VALUES ('$name','$email','$pwd')";
if ($con->query($sql) === TRUE) {
    header('location: login.html');
  } else {
    echo "Error: " . $sql . "<br>" . $con->error;
  }

?>