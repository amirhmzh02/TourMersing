<?php

//include the DB connections details here
include("php/connect.php");

if (isset($_POST['sumbit'])) {
  $sql="INSERT INTO tourism1 (country,quantity)
  VALUES ('$_POST[country]','$_POST[quantity]')";
  // print_r($sql);
  // exit();

  $result = $conn->query($sql);

  //redirect to the register_done page;
  $_SESSION['country'] = $_POST['country'];
  $_SESSION['quantity'] = $_POST['quantity'];
  
  $to = 'Login.html';
  header('Location: '. $to);
  mysqli_close($conn);
  exit;
}

?>