<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>eTourMersing</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-woox-travel.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="shortcut icon" type="image/jpg" href="assets/images/logo.png"/>
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

<style>
  @media screen {
  img {
  max-width: 100%;
  }
  td,
  th {
  box-sizing: border-box;
  }
  u~div .wrapper {
  min-width: 100vw;
  }
  a[x-apple-data-detectors] {
  color: inherit;
  text-decoration: none;
  }
  .all-font-roboto {
  font-family: Roboto, -apple-system, "Segoe UI", sans-serif !important;
  }
  .all-font-sans {
  font-family: -apple-system, "Segoe UI", sans-serif !important;
  }
  }
  @media (max-width: 600px) {
  .sm-inline-block {
  display: inline-block !important;
  }
  .sm-hidden {
  display: none !important;
  }
  .sm-leading-32 {
  line-height: 32px !important;
  }
  .sm-p-20 {
  padding: 20px !important;
  }
  .sm-py-12 {
  padding-top: 12px !important;
  padding-bottom: 12px !important;
  }
  .sm-text-center {
  text-align: center !important;
  }
  .sm-text-xs {
  font-size: 12px !important;
  }
  .sm-text-lg {
  font-size: 18px !important;
  }
  .sm-w-1-4 {
  width: 25% !important;
  }
  .sm-w-3-4 {
  width: 75% !important;
  }
  .sm-w-full {
  width: 100% !important;
  }
  }
  </style>
  <style>
  @media (max-width: 600px) {
  .sm-dui17-b-t {
  border: solid #4299e1;
  border-width: 4px 0 0;
  }
  }
  @media print {
  .noPrint{
    display:none;
  }
  .hidden {
       display: none;
    }
  .sm-inline-block-2{
    margin-top:-30px;
    width:20%;
  }
  .sm-w-3-4 .sm-inline-block-2{
    margin-top:-30px;
  }
}
td{
  color:#000;
}
  </style>

  </head>

<?php
include ("connection.php");


$status = $_GET['status_id'];
$billcode = $_GET['billcode'];
$refno = $_GET['transaction_id'];

if($status == 1){
  $status = "success";
}

elseif($status == 2){
  $status = "pending";
}

else
{
  $status = "fail";
}

$paymentsql="UPDATE `islandpayment` SET `reference_no`='$refno',`payment_status`='$status' WHERE `billcode`='$billcode' " ;

$db=$conn->query($paymentsql);




$sql = "SELECT islandcustomer.fullname,islandcustomer.phone_number,islandcustomer.email,islandbooking.package,islandbooking.number_of_adult,islandbooking.number_of_child,islandbooking.total,islandbooking.date,islandpayment.payment_id,islandpayment.reference_no,islandpayment.payment_status,islandpayment.billcode FROM islandcustomer LEFT JOIN islandbooking ON islandcustomer.customer_id = islandbooking.customer_id LEFT JOIN islandpayment ON islandpayment.booking_id = islandbooking.booking_id WHERE islandpayment.billcode = '$billcode' " ;
$db = $conn -> query($sql);

$row = $db -> fetch_array(MYSQLI_NUM);

$fullname = $row[0];
$phone_number = $row[1];
$email = $row[2];
$package = $row[3];
$number_of_adult = $row[4];
$number_of_child = $row[5];
$total = $row[6];
$date = $row[7];
$payment_id = $row[8];
?>


<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->  
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="https://etourmersing.com" class="logo" style="margin-top: 0px;">
                        <img src="assets/images/img-01.png" alt="">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                      <li><a href="https://etourmersing.com" >Go back</a></li>
                        
                    </ul> 
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  
  <br><br><br>
  
        <div style="display: none; line-height: 0; font-size: 0;">Hey Jamie, thanks for booking with us - your reservation is now confirmed ✔</div>
<table class="wrapper all-font-sans" width="100%" height="100%" cellpadding="0" cellspacing="0" role="presentation">
<tr>
<td align="center" style="padding: 24px;" width="100%">
<table class="sm-w-full" width="600" cellpadding="0" cellspacing="0" role="presentation">
<!-- <tr> -->
<!-- <td colspan="2" class="sm-inline-block" style="display: none;">
<img src="https://images.unsplash.com/photo-1505577058444-a3dab90d4253?ixlib=rb-0.3.5&s=fed02ccbe457c9b8fc1f2cf76f30d755&w=600&h=400&q=80&fit=crop" alt="Double Room" style="border: 0; line-height: 100%; vertical-align: middle; border-top-left-radius: 4px; border-top-right-radius: 4px; box-shadow: 0 10px 15px -3px rgba(0, 0, 0, .1), 0 4px 6px -2px rgba(0, 0, 0, .05);">
</td> -->
<!-- </tr> -->
<!-- <tr> -->
<!-- <td class="sm-hidden" style="padding-top: 40px; padding-bottom: 40px;" width="160">
<img class="hidden" src="https://images.unsplash.com/photo-1505577058444-a3dab90d4253?ixlib=rb-0.3.5&s=fed02ccbe457c9b8fc1f2cf76f30d755&w=320&h=800&q=80&fit=crop" alt="Double room" style="border: 0; line-height: 100%; vertical-align: middle; border-top-left-radius: 4px; border-bottom-left-radius: 4px; box-shadow: 0 10px 15px -3px rgba(0, 0, 0, .1), 0 4px 6px -2px rgba(0, 0, 0, .05);" width="160">
</td> -->
<td align="left" class="sm-p-20 sm-dui17-b-t" style="border-radius: 2px; padding: 40px; position: relative; box-shadow: 0 10px 15px -3px rgba(0, 0, 0, .1), 0 4px 6px -2px rgba(0, 0, 0, .05); vertical-align: top; z-index: 50;" bgcolor="#ffffff" valign="top">
<table width="100%" cellpadding="0" cellspacing="0" role="presentation">
<tr>
<td width="80%">
<h1 class="sm-text-lg all-font-roboto" style="font-weight: 700; line-height: 100%; margin: 0; margin-bottom: 4px; font-size: 24px;">Customer Receipt-ISLAND HOPPING</h1>
<p class="sm-text-xs" style="margin: 0; color: #a0aec0; font-size: 14px;">Your reservation is now confirmed</p>
</td>
<td style="text-align: right;" width="20%" align="right">
<a style="text-decoration: none;" onclick="window.print()">
<img src="assets/images/pdf.png" alt="Download PDF" style="border: 0; line-height: 100%; vertical-align: middle; font-size: 12px; width:40px;" width="24">
</a>
</td>
</tr>
</table>
<div style="line-height: 32px;">&zwnj;</div>
<table class="sm-leading-32" style="line-height: 28px; font-size: 14px;" width="100%" cellpadding="0" cellspacing="0" role="presentation">
    <tr>
        <td class="sm-inline-block" style="color: #718096;" width="60%">Reference No</td>
        <td class="sm-inline-block-2" style="color: #080808; font-weight: 600; text-align: right;" width="50%" align="right"><?php echo $refno ?></td>
        <!-- <?php echo $refno ?> -->
    </tr>

    <tr>
        <td class="sm-inline-block" style="color: #718096;" width="60%">Payment ID</td>
        <td class="sm-inline-block-2" style="color: #080808; font-weight: 600; text-align: right;" width="50%" align="right"><?php echo $payment_id ?></td>
        <!-- <?php echo $order_id ?> -->
    </tr>

    <tr>
      <td class="sm-inline-block" style="color: #718096;" width="60%">BillCode</td>
      <td class="sm-inline-block-2" style="color: #080808; font-weight: 600; text-align: right;" width="50%" align="right"><?php echo $billcode ?></td>
    </tr>

    <tr>
      <td class="sm-inline-block" style="color: #718096;" width="60%">Payment Status</td>
      <td class="sm-inline-block-2" style="color: #080808; font-weight: 600; text-align: right;" width="50%" align="right"><?php echo $status ?></td>
    </tr>

    <tr>
      <td class="sm-inline-block" style="color: #718096;" width="60%">Guest</td>
      <td class="sm-inline-block-2" style="color: #080808; font-weight: 600; text-align: right;" width="50%" align="right"><?php echo $fullname ?></td>
    </tr>

    <tr>
      <td class="sm-w-1-4 sm-inline-block" style="color: #718096;" width="50%">Package</td>
      <td class="sm-w-3-4 sm-inline-block-2" style="color: #080808; font-weight: 600; text-align: right;" width="50%" align="right"><?php echo $package ?></td>
    </tr>
</table>
<table width="100%" cellpadding="0" cellspacing="0" role="presentation">
<tr>
<td style="padding-top: 24px; padding-bottom: 24px;">
<div style="background-color: #edf2f7; height: 2px; line-height: 2px;">&zwnj;</div>
</td>
</tr>
</table>
<table style="font-size: 14px;" width="100%" cellpadding="0" cellspacing="0" role="presentation">
<tr>
<td class="sm-w-full sm-inline-block sm-text-center" width="40%">
<p class="all-font-roboto" style="margin: 0; margin-bottom: 4px; color: #a0aec0; font-size: 10px; text-transform: uppercase; letter-spacing: 1px;">Date</p>
<p class="all-font-roboto" style="font-weight: 600; margin: 0; color: #000000;"><?php echo $date ?></p>
</td>
</tr>
</table>
<table width="100%" cellpadding="0" cellspacing="0" role="presentation">
<tr>
<td style="padding-top: 24px; padding-bottom: 24px;">
<div style="background-color: #edf2f7; height: 2px; line-height: 2px;">&zwnj;</div>
</td>
</tr>
</table>
<table style="line-height: 28px; font-size: 14px;" width="100%" cellpadding="0" cellspacing="0" role="presentation">
<tr>
<td style="color: #718096;" width="50%">Number of people</td>
<td style="color: #54c6c4; font-weight: 600; text-align: right;" width="50%" align="right"><?php echo "ADULT : ".$number_of_adult."   CHILDREN : ".$number_of_child?></td>
</tr>
<tr>
<td style="color: #718096;" width="50%">Total price</td>
<td style=" color: #54c6c4; font-weight: 600; text-align: right;" width="50%" align="right">RM<?php echo $total ?></td>
</tr>
<tr>
<td style="font-weight: 600; padding-top: 32px; color: #000000; font-size: 20px;" width="50%">Total</td>
<td style="font-weight: 600; padding-top: 32px; text-align: right; color: #68d391; font-size: 20px;" width="50%" align="right">RM<?php echo $total ?></td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
</table>
        

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>Copyright © <a href="#">ETour Mersing</a> Company. All rights reserved. 
        </div>
      </div>
    </div>
  </footer>


  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/wow.js"></script>
  <script src="assets/js/tabs.js"></script>
  <script src="assets/js/popup.js"></script>
  <script src="assets/js/custom.js"></script>

  <script>
    $(".option").click(function(){
      $(".option").removeClass("active");
      $(this).addClass("active"); 
    });
  </script>

  </body>

</html>
