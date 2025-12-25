<?php
require_once 'toyyibpay_key.php';
include ("connection.php");

if (isset($_POST['btnOnline'])) {

    $name = $_POST['fullname']; 
    $email = $_POST['email'];
    $phoneNumber= $_POST['numphone'];
    $package = $_POST['package'];   
    $numofadult = $_POST['numofadult'];
    $numofchild = $_POST['numofchild'];
    $totalPrice = $_POST['total'];
    $date = $_POST['date'];

    $customersql="INSERT INTO `islandcustomer`(`fullname`, `phone_number`, `email`) VALUES ('$name','$phoneNumber','$email')";

    $db=$conn->query($customersql);
    
    if($db){
        $customer_id = $conn->insert_id;

        $bookingsql="INSERT INTO `islandbooking`(`customer_id`, `package`, `number_of_adult`, `number_of_child`, `Total`, `date`) VALUES ('$customer_id','$package','$numofadult', '$numofchild','$totalPrice','$date')";

        $db = $conn->query($bookingsql);


    }
}


$totalPrice = $_POST["total"];

$post_data = array(
    'userSecretKey' => $secret_key,
    'categoryCode' => $category_code,
    'billName' => 'Island Hoping Package Booking',
    'billDescription' => 'Book an Island Hopping package in Mersing.',
    'billPriceSetting' => 1,
    'billPayorInfo' => 0,
    // 'billAmount' => 200,
    'billAmount' => $totalPrice * 100,
    'billReturnUrl' => 'https://etourmersing.com/booking/toyyibPayIsland/receipt/receipt.php',
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
curl_setopt($curl, CURLOPT_URL, 'https://dev.toyyibpay.com/index.php/api/createBill');
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
$post_data['paymentURL'] = 'https://dev.toyyibpay.com/' . $result[0]['BillCode'];

$billcode=($result[0]['BillCode']);
$last_id = $conn->insert_id;
$totalPrice = $totalPrice + 1;
$paymentsql="INSERT INTO `islandpayment`(`booking_id`, `billcode`, `amount`) VALUES ('$last_id','$billcode','$totalPrice')";

$db=$conn->query($paymentsql);


header('Location: ' . $post_data['paymentURL']);
