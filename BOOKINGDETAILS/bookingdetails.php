<?php

include("../assets/php/connect.php");
$id = $_POST['id'];
$query="SELECT * FROM `islandvacation` WHERE `vacation_id` = ($id)";
$result = mysqli_query($conn,$query);
$rows=$result->fetch_assoc();

?>



<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>ASEANIA BEACH RESORT</title>

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
    <link rel="html" href="footer.html">
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
                    <a href="../index.php" class="logomta">
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
                                <li ><a class="dropdown-item" href="/bookingpage.html" style=" color: black; background: none; text-align: center;">Island Vacation</a></li>
                                <li><a class="dropdown-item" href="/bookingpage.html" style="color: black; background: none; text-align: center;">Island Hopping</a></li>
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
            <h4><?php echo $rows['name']?></h4>
            <div class="line-dec"></div>
            <h2>3DAYS 2NIGHT</h2>
            <p>Enjoying our hidden gems here! Also in the package, <br>we include some interesting activities such as jungle trekking!</p>
            <div class="main-button">
              <a href="#down">Discover More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="cities-town">
    <div class="container">
      <div class="row">
        <div class="slider-content">
          <div class="row">

            <div class="row">
              <div class="col-lg-4">
                <div class="hours">
                  <h1 style="color: #22b3c1">RM <?php echo $rows['price']?>/pax</h1>
                  <h6 style="color: #aca4a4; font-style: italic;">**Limited for 12pax per reservation!</h6>
                  <hr style="color: rgb(40, 193, 193);">
                  
                  
                </div>
              </div>
            <div class="col-lg-12">
              <h2><?php echo $rows['name']?></h2>
              
            </div>
            <div class="col-lg-12">
              <div class="owl-cites-town owl-carousel">
                <?php
            
                  $imageURL1 = '../AdminDashboard/islandVacationAdmin/image/'.$rows["image1"];
                  $imageURL2 = '../AdminDashboard/islandVacationAdmin/image/'.$rows["image2"];
                  $imageURL3 = '../AdminDashboard/islandVacationAdmin/image/'.$rows["image3"];
                  $imageURL4 = '../AdminDashboard/islandVacationAdmin/image/'.$rows["image4"];
            
               ?>
                <div class="item">
                  <div class="thumb">
                    <img src="<?php echo $imageURL1;?>" alt=""/>
                  </div>
                </div>
                <div class="item">
                  <div class="thumb">
                    <img src="<?php echo $imageURL2;?>" alt=""/>
                  </div>
                </div>
                <div class="item">
                  <div class="thumb">
                    <img src="<?php echo $imageURL3;?>" alt=""/>

                  </div>
                </div>
                <div class="item">
                  <div class="thumb">
                    <img src="<?php echo $imageURL4;?>" alt=""/>
                  </div>
                </div>
 
              </div>
            </div>
          </div>
          <div class="down-content" id="down">
            
            
            <a href="meeting-details.html"><br>
              
              <h4><?php echo $rows['name']?></h4>
            </a>
              <p style="color: #413f3f;"><?php echo $rows['address']?></p>
            <hr>

              <div class="float-left">
                <h5>Package Includes:</h5>
              <p>
              <?php echo $rows['packageIncluded']?> <br><br>
            </p>
              </div>
              
              <div class="float-left" style="margin-left: 5%;">
                <div class="location">
                  <h5>Location</h5>
                  <p style="color: #413f3f;"><?php echo $rows['address']?></p>
                </div>
              </div>
              
              <div class="float-left" style="margin-left: 6%;">
                <div class="book now">
                  <h5>Book Now</h5>
                  <p style="color: #413f3f;"><?php echo $rows['phonenum1']?><br><?php echo $rows['phonenum2']?></p>
                </div>
              </div>
              
              <div class="float-left">
                <div class="main-button">
                  <a href="https://api.whatsapp.com/send?phone=60183835565">Book a package</a>
                </div>
                <div class="main-button">
                  <a href="../bookingpage.php">Back To Package List</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-12">
            <h6 style="font-style:oblique;">**Guests need to make a full payment 7 days earlier for reservation before the actual date.</h6>
          </div>
        </div>
      </div>
    </div>
  </div>

  

  <div class="cities-town2">
    <div class="container">
      <div class="row">
        <div class="slider-content">
          <div class="row">
            <div class="col-lg-12">
              <h5  class="text-white mb-4">Request for other package ?<br> please contact us for details quotation:</h5>
              <a style="color: whitesmoke; background-color: #34c67f; border-radius: 70px; " class="custom-btn btn custom-bg-primary" href="https://api.whatsapp.com/send?phone=60183835565">Send Message
              <i class="fab fa-whatsapp" style="size: 36px;"></a></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  
  

  
  <br>
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
