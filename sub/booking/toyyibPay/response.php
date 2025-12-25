<?php

include ("connection.php");

// $refno = $_POST['refno'];
$status = $_GET['status_id'];
$billcode = $_GET['billcode'];
$order_id = $_GET['order_id'];
$transaction_id = $_GET['transaction_id'];
// $amount = $_POST['amount'];

echo $status ."<br>"; 
echo $billcode. "<br>";
echo $order_id ."<br>";
echo $transaction_id ."<br>";
// echo "RM".$amount ."<br>";
// $amount = $_POST['amount'];
// $transaction_time = $_POST['transaction_time'];

// $booking_id = $conn->insert_id;

// $paymentsql="INSERT INTO `payment`(`reference_no`, `booking_id`, `payment_status`, `billcode`, `order_id`, `amount`, `transaction_time`) VALUES ('$refno','$booking_id','$status','$billcode','$order_id','$amount','$transaction_time')";

// $db=$conn->query($paymentsql);

// echo '<pre>';
// echo 'GET Data';
// print_r($_GET);
// echo 'POST Data';
// print_r($_POST);
// echo '</pre>';
exit;