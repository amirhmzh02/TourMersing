<?php

include("../assets/php/connect.php");
$id = $_POST['id'];
$query="SELECT * FROM `islandhopping` WHERE `hopping_ID` = ($id)";
$result = mysqli_query($conn,$query);

$rows=$result->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>LIGHT & EASY [3 ISLAND]</title>

    <!-- Bootstrap core CSS -->
    <link href="vendortemplate/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.minnew.css">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/bookingdetails-pagestyle.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="assets/css/templatemo-woox-travel.css">
    <link rel="stylesheet" href="assets/css/footerstyle.css">
    <link rel="stylesheet" href="assets/css/footer_icon.css">
    <link rel="shortcut icon" type="image/jpg" href="image/logo.png"/>

    <style>
      .box{
        width: 100px;
        height: 100px;
        border: 1px solid black;
        }

        .box{
        width: 200px;
        height: 200px;
        background-color: rgb(239, 205, 70);
        border: 1px solid rgb(239, 205, 70);
        margin: 80%;
        padding: 0;
        }

        .float-left {
        float:left;
        width:260px; 
        

        }
    </style>

  </head>

<body style="background-color:#222;">
    
    
 
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

  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.html" class="logomta">
                        <img src="image/logo.png" alt=""></a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                      <li><a href="../index.php" >Home</a></li>
                        <li><a href="../event-page.php">Event</a></li>
                        
                          <li class="dropdown">
                            <a style="background: none;" class="btn btn-secondary dropdown-toggle" type="button" 
                            id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" class="active">Packages</a>
                              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" >
                                <li ><a class="dropdown-item" href="../bookingpage.php" style=" color: black; background: none; text-align: center;">Island Vacation</a></li>
                                <li><a class="dropdown-item" href="../bookingpage.php" style="color: black; background: none; text-align: center;">Island Hopping</a></li>
                                <!-- <li><a class="dropdown-item" href="#" style="color: black;" >Something else here</a></li> -->
                              </ul>
                          </li>
                        <li><a href="../aboutus-page.html">About Us</a></li>
                      <li><a href="../privacypolicy-page.html"  >Policy</a></li>
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

  <div class="about-main-content">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="content">
            <div class="blur-bg"></div>
            <h4>DAY-TRIP</h4>
            <div class="line-dec"></div>
            <h2><?php echo $rows['name']?></h2>
            <p>Enjoying our hidden gems here! Also in the package, <br>we include some interesting activities such as jungle trekking!</p>
            <div class="main-button">
              <a href="#down">Discover More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="cities-town" id="lightdown">
    <div class="container">
      <div class="row">
        <div class="slider-content">
          <div class="row">

            <div class="row" >
              <div class="col-lg-4">
                <div class="hours">
                  <h1 style="color: #22b3c1" id="down" >RM <?php echo $rows['priceA']?>/person</h1>
                  <h5 style="color: #abd7db">RM <?php echo $rows['priceC']?>/child [5-11yo]</h5>
                  <!-- <h6 style="color: #aca4a4; font-style: italic;">**Limited for 12pax per reservation!</h6> -->
                  <hr style="color: rgb(40, 193, 193);">
                  
                  
                </div>
              </div>
            <div class="col-lg-12">
              <h2><?php echo $rows['name']?><em></em></h2>
              
            </div>
            <div class="col-lg-12">
              <div class="owl-cites-town owl-carousel">
                  
                <?php
            
                  $imageURL1 = '../AdminDashboard/islandHoppingAdmin/image/'.$rows["image1"];
                  $imageURL2 = '../AdminDashboard/islandHoppingAdmin/image/'.$rows["image2"];
                  $imageURL3 = '../AdminDashboard/islandHoppingAdmin/image/'.$rows["image3"];
                  $imageURL4 = '../AdminDashboard/islandHoppingAdmin/image/'.$rows["image4"];
            
                ?>
                  
                  
                <div class="item">
                  <div class="thumb">
                    <img src="<?php echo $imageURL1;?>" alt="">
                  </div>
                </div>
                <div class="item">
                  <div class="thumb">
                    <img src="<?php echo $imageURL2;?>" alt="">
                  </div>
                </div>
                <div class="item">
                  <div class="thumb">
                    <img src="<?php echo $imageURL3;?>" alt="">

                  </div>
                </div>
                <div class="item">
                  <div class="thumb">
                    <img src="<?php echo $imageURL4;?>" alt="">
                  </div>
                </div>
 
              </div>
            </div>
          </div>

<div class="down-content">
            <a href="meeting-details.html"><br>
              
              <h4>ADVENTURE [5 ISLAND]</h4>
            </a>
              <p style="color: #413f3f;">*Itinerary are subject to change due to weather/current condition</p>
              <p style="color: #413f3f;">*Free of charge for children 4yo & below</p>
              <p style="color: #413f3f;">*Price are NOT include Marine Park fees</p>
            <hr>
            
            <div class="row">
                <div class="col-sm-4">
                  <h5>Island tour:</h5>-->
              <p>
                <ul style="color: #413f3f;">
                <li><?php echo $rows['islandIncluded']?></li>
                
              </ul>
            </p>
                </div>
                
                <div class="col-sm-4">
                  <h5>Package Includes:</h5>-->
                      <p>
                        <ul style="color: #413f3f;">
                        <li><?php echo $rows['packageIncluded']?></li>
                        
                      </ul>
                    </p>
                </div>
                
                <div class="col-sm-4">
                  <h5>Book Now</h5>-->
                  <p style="color: #413f3f;"><?php echo $rows['phonenum1']?><br><?php echo $rows['phonenum2']?></p>
                </div>
              </div>
            </div>
            
            
            <div class="container mt-5">
              <div class="row">
                <div class="col-sm-6">
                  <h5>Itinerary:</h5>-->
                <p>
                  <ul style="color: #413f3f;">
                    <li>8.30am - Registration & short briefing</li>
                    <li>9.00am - Registration & short briefing</li>
                    <li>1.00pm - Depart back & arrived at jetty</li>
                  </ul> 
                </p>
                </div>
                <div class="col-sm-6" >
                  <div class="main-button">
                  <a href="https://api.whatsapp.com/send?phone=60183835565">Book a package</a>
                </div>
                <div class="main-button">
                  <a href="/bookingpage.php#downIH">Back To Package List</a>
                </div>
              </div>
              </div>
            </div>
          </div>
        </div><br><br>
          <div class="col-lg-12">
            <h6 style="font-style:oblique;">**Guests need to make a full payment 4 days earlier for reservation before the actual date.</h6>
          </div>
        </div>
      </div>
    </div>
  </div>
  
        
  
  
 <!-- ------------------------------------------------------------------FOOTER------------------------------------------------------------------------------- -->
<div id="footer"></div>

  <!-- ------------------------------------------------------------------END FOOTER------------------------------------------------------------------------------- -->


  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/wow.js"></script>
  <script src="assets/js/tabs.js"></script>
  <script src="assets/js/popup.js"></script>
  <script src="assets/js/custom.js"></script>

<script> 
    $(function(){
      $("#header").load("header.html"); 
      $("#footer").load("footer.html"); 
    });
    </script> 

  <script>
    $(".option").click(function(){
      $(".option").removeClass("active");
      $(this).addClass("active"); 
    });
  </script>

  </body>

</html>
