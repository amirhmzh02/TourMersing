<?php


include("connect.php");

if (isset($_POST['submit'])) {

  $name = $_POST['name'];
  $feedback = $_POST['feedback'];
  

  $sql="INSERT INTO `feedback` (`name`, `feedback`)
  VALUES ('$name','$feedback')";
  // print_r($sql);
  // exit();

  $result = $conn->query($sql);
  
  $to = 'index.php';
  header('Location: '. $to);
  mysqli_close($conn);
  exit;
}

?>