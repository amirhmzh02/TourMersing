<?php
require_once 'toyyibpay_key.php';
include ("connection.php");

if (isset($_POST['btnOnline'])) {

    $name = $_POST['fullname']; 
    $email = $_POST['email'];
    $phoneNumber= $_POST['numphone'];
    $destination = $_POST['destination'];
    $checkIn = $_POST['checkIndate'];
    $checkOut = $_POST['checkOutdate'];
    $numPax = $_POST['pax'];
    $totalPrice = $_POST['total'];

    $customersql="INSERT INTO `customer`(`fullname`, `phone_number`, `email`) VALUES ('$name','$phoneNumber','$email')";
    // $customersql="INSERT INTO `customer`(`fullname`, `phone_number`, `email`) VALUES ('amir hamzah','0123456789','amirhmzh002@gmail.com')";
    // $customersql="SELECT * FROM `customer`";

    $db=$conn->query($customersql);
    // $row = $db -> fetch_array(MYSQLI_NUM);
    
    if($db){
        $customer_id = $conn->insert_id;

        $bookingsql="INSERT INTO `booking`(`customer_id`, `destination`, `checkIn_date`, `checkOut_date`, `number_of_pax`, `total_price`) VALUES ('$customer_id','$destination','$checkIn', '$checkOut','$numPax','$totalPrice')";

        $db = $conn->query($bookingsql);


    }
}


$totalPrice = $_POST["total"];

$post_data = array(
    'userSecretKey' => $secret_key,
    'categoryCode' => $category_code,
    'billName' => 'Travelling Package Booking',
    'billDescription' => 'Book an Island Vacation package in Mersing.',
    'billPriceSetting' => 1,
    'billPayorInfo' => 0,
    // 'billAmount' => 200,
    'billAmount' => $totalPrice * 100,
    'billReturnUrl' => 'https://etourmersing.com/booking/toyyibPay/receipt/receipt.php',
    'billCallbackUrl' => '',
    'billExternalReferenceNo' => time().rand(),
    'billTo' => $name,
    'billEmail' => $email,
    'billPhone' => $phoneNumber,
    'billSplitPayment' => 0,
    'billSplitPaymentArgs' => '',
    'billPaymentChannel' => 0,
    'billChargeToCustomer' => 0,
);

// php curl to post data to payment gateway
$curl = curl_init();
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_URL, 'https://toyyibpay.com/index.php/api/createBill');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $post_data);

$result = curl_exec($curl);
$info = curl_getinfo($curl);
curl_close($curl);
$result = json_decode($result, true);



// echo '<pre>';
// print_r($result);
// echo '</pre>';
// exit;

$post_data['billCode'] = $result[0]['BillCode'];
$post_data['paymentURL'] = 'https://toyyibpay.com/' . $result[0]['BillCode'];

$billcode=($result[0]['BillCode']);
$last_id = $conn->insert_id;
$totalPrice = $totalPrice + 1;
$paymentsql="INSERT INTO `payment`(`booking_id`, `billcode`, `amount`) VALUES ('$last_id','$billcode','$totalPrice')";

$db=$conn->query($paymentsql);


header('Location: ' . $post_data['paymentURL']);
