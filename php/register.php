<?php


//include the DB connections details here
include("php/connect.php");

if (isset($_POST['register'])) {
  $sql="INSERT INTO registration (username, email, password)
  VALUES ('$_POST[username]','$_POST[email]','$_POST[password]')";
//   print_r($sql);
//   exit();

  $result = $conn->query($sql);

  //redirect to the register_done page;
  $_SESSION['username'] = $_POST['username'];
  $_SESSION['email'] = $_POST['email'];
  $_SESSION['password'] = $_POST['password'];
  
  $to = 'Login.html';
  header('Location: '. $to);
  mysqli_close($conn);
  exit;
}

?>