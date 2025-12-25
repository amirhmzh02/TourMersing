<?php

include("assets/php/connect.php");
$query="SELECT * from islandvacation";
$result = mysqli_query($conn,$query);

$queryH = "SELECT * FROM `islandhopping`";
$resultH = mysqli_query($conn,$queryH);

?>

<!DOCTYPE html>
<html lang="en">

  <head>

  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Packages</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.minbooking.css">
    <link rel="stylesheet" href="assets/css/slider.css">
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    
    <link rel="stylesheet" href="assets/css/templatemo-style.css">
    <link rel="stylesheet" href="assets/css/feedback.css">
    
    <link rel="stylesheet" href="assets/css/footer_icon.css">
    <link rel="shortcut icon" type="image/jpg" href="images/logo.png"/>
    
    <title>Packages</title>

    
    <style>
  
@import url(https://fonts.googleapis.com/css?family=Open+Sans:400,500,300,700);

* {
  /* font-family: Open Sans; */
}

.logofooter{
    width: 100px;
    height: 100px;
}


.footer-distributed{
  /* background footer */
  background: rgb(34, 133, 146);
  box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
  box-sizing: border-box;
  width: 100%;
  text-align: left;
  font: bold 16px sans-serif;
  padding: 55px 50px;
}

.footer-distributed .footer-left,
.footer-distributed .footer-center,
.footer-distributed .footer-right{
  display: inline-block;
  vertical-align: top;
}

/* Footer left */

.footer-distributed .footer-left{
  width: 40%;
}

/* The company logo */

.footer-distributed h3{
  color:  #ffffff;
  font: normal 36px 'Open Sans', cursive;
  margin: 0;
}

.footer-distributed h3 span{
  color:  lightseagreen;
}

/* Footer links */

.footer-distributed .footer-links{
  color:  #ffffff;
  margin: 20px 0 12px;
  padding: 0;
}

.footer-distributed .footer-links a{
  display:inline-block;
  line-height: 1.8;
  font-weight:400;
  text-decoration: none;
  color:  inherit;
}

.footer-distributed .footer-company-name{
  color:  #222;
  font-size: 14px;
  font-weight: normal;
  margin: 0;
}

/* Footer Center */

.footer-distributed .footer-center{
  width: 35%;
}

.footer-distributed .footer-center i{
  background-color:  #33383b;
  color: #ffffff;
  font-size: 25px;
  width: 38px;
  height: 38px;
  border-radius: 50%;
  text-align: center;
  line-height: 42px;
  margin: 10px 15px;
  vertical-align: middle;
}

.footer-distributed .footer-center i.fa-envelope{
  font-size: 17px;
  line-height: 38px;
}

.footer-distributed .footer-center p{
  display: inline-block;
  color: #ffffff;
  font-weight:400;
  vertical-align: middle;
  margin:0;
}

.footer-distributed .footer-center p span{
  display:block;
  font-weight: normal;
  font-size:14px;
  line-height:2;
}

.footer-distributed .footer-center p a{
  color:  lightseagreen;
  text-decoration: none;;
}

.footer-distributed .footer-links a:before {
  content: "|";
  font-weight:300;
  font-size: 20px;
  left: 0;
  color: #fff;
  display: inline-block;
  padding-right: 5px;
}

.footer-distributed .footer-links .link-1:before {
  content: none;
}

/* Footer Right */

.footer-distributed .footer-right{
  width: 20%;
}

.footer-distributed .footer-company-about{
  line-height: 20px;
  color:  #92999f;
  font-size: 13px;
  font-weight: normal;
  margin: 0;
}

.footer-distributed .footer-company-about span{
  display: block;
  color:  #ffffff;
  font-size: 14px;
  font-weight: bold;
  margin-bottom: 20px;
}

.footer-distributed .footer-icons{
  margin-top: 25px;
  
}

.footer-distributed .footer-icons a{
  display: inline-block;
  width: 40px;
  height: 40px;
  cursor: pointer;
  /* background-color:  #6bb2dd; */
  border-radius: 50%;

  font-size: 20px;
  color: #ffffff;
  text-align: center;
  line-height: 35px;

  margin-right: 3px;
  margin-bottom: 3px;

}

.fas{
  transition:0.3s;
  padding-top:12px;
  padding-left:-12px;
  width:50px;
 
}

.fas:hover{
  background-color: #fff;
  color:#22b3c1;
  border-radius:100%;
  
}



/* If you don't want the footer to be responsive, remove these media queries */

@media (max-width: 880px) {

  .footer-distributed{
    font: bold 14px sans-serif;
  }

  .footer-distributed .footer-left,
  .footer-distributed .footer-center,
  .footer-distributed .footer-right{
    display: block;
    width: 100%;
    margin-bottom: 40px;
    text-align: center;
  }

  .footer-distributed .footer-center i{
    margin-left: 0;
  }

.ul {
    display: flex;
}
.dropdown-item {
    order: 1;
}
@media all and (min-width: 960px) {
    .mlink {
        order: 0;
    }
}
  
}

  </style>

  </head>

<body style="background-color:#222;">
    
    <audio id="myAudio"><source src="assets/Audio/beachsound.mp3" type="audio/mpeg"></audio>
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
                    <a href="index.php" class="logo">
                        <img src="images/logo.png" alt="">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                      <li><a href="index.php" >Home</a></li>
                        <li><a href="event-page.php">Event</a></li>
                        
                          <li class="dropdown">
                            <a style="background: none;" class="btn btn-secondary dropdown-toggle" type="button" 
                            id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" class="active">Packages</a>
                              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" >
                                <li ><a class="dropdown-item" href="bookingpage.php#downIV" style=" color: black; background: none; text-align: center; ">Island Vacation</a></li>
                                <li><a class="dropdown-item" href="bookingpage.php#downIH" style="color: black; background: none; text-align: center;">Island Hopping</a></li>
                              </ul>
                          </li>
                        <li><a href="aboutus-page.html">About Us</a></li>
                      <li><a href="privacypolicy-page.html"  >Policy</a></li>
                      <li><a href="Login.php" >Admin</a></li>
                      <li><a><i onclick="togglePlay()" align="center" class='fas fa-volume-up'></i></a></li>
                    </ul> 
                    <a class='menu-trigger'>
                      <span>Menu</span>
                  </a>
                    <!-- ***** Menu End ***** -->
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <!-- ***** Main Banner Area Start ***** -->
  <section id="section-1">
    <div class="content-slider">
      <input type="radio" id="banner1" class="sec-1-input" name="banner" checked>
      <input type="radio" id="banner2" class="sec-1-input" name="banner">
      <input type="radio" id="banner3" class="sec-1-input" name="banner">
      <input type="radio" id="banner4" class="sec-1-input" name="banner">
      <div class="slider">
        <div id="top-banner-11" class="banner">
          <div class="banner-inner-wrapper header-text">
            <div class="main-caption">
              <h2>Take a Glimpse Into The Beautiful Of:</h2>
              <h1 style="text-shadow: 2px 4px #16568a;" >Pulau Besar</h1>
              
            </div>
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <div class="more-info">
                    <div class="row">
                      <div class="col-lg-3 col-sm-6 col-6">
                        <i class="fa fa-user"></i>
                        <h4><span>Start from:</span><br>RM590</h4>
                      </div>
                      <div class="col-lg-3 col-sm-6 col-6">
                        <i class="fa fa-globe"></i>
                        <h4><span>Island:</span><br>Pulau Besar</h4>
                      </div>
                      <div class="col-lg-3 col-sm-6 col-6">
                        <i class="fa fa-home"></i>
                        <h4><span>Special:</span><br>Jungle trekking</h4>
                      </div>
                      <div class="col-lg-3 col-sm-6 col-6">
                        <div class="main-button">
                          <a href="BOOKINGDETAILS/bookingdetails-aseania.html">Explore More</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="top-banner-22" class="banner">
          <div class="banner-inner-wrapper header-text">
            <div class="main-caption">
              <h2>Take a Glimpse Into The Beautiful Of:</h2>
              <h1 style="text-shadow: 2px 4px #16568a;" >Pulau Rawa</h1>
              
            </div>
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <div class="more-info">
                    <div class="row">
                      <div class="col-lg-3 col-sm-6 col-6">
                        <i class="fa fa-user"></i>
                        <h4><span>Start from:</span><br>RM1,350</h4>
                      </div>
                      <div class="col-lg-3 col-sm-6 col-6">
                        <i class="fa fa-globe"></i>
                        <h4><span>Island:</span><br>Pulau Rawa</h4>
                      </div>
                      <div class="col-lg-3 col-sm-6 col-6">
                        <i class="fa fa-home"></i>
                        <h4><span>Special:</span><br>Full Board Meal</h4>
                      </div>
                      <div class="col-lg-3 col-sm-6 col-6">
                        <div class="main-button">
                          <a href="BOOKINGDETAILS/bookingdetails-rawa.html">Explore More</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="top-banner-33" class="banner">
          <div class="banner-inner-wrapper header-text">
            <div class="main-caption">
              <h2>Take a Glimpse Into The Beautiful Of:</h2>
              <h1 style="text-shadow: 2px 4px #16568a;" >Pulau Besar</h1>
              
            </div>
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <div class="more-info">
                    <div class="row">
                      <div class="col-lg-3 col-sm-6 col-6">
                        <i class="fa fa-user"></i>
                        <h4><span>Start from:</span><br>RM455</h4>
                      </div>
                      <div class="col-lg-3 col-sm-6 col-6">
                        <i class="fa fa-globe"></i>
                        <h4><span>Island:</span><br>Pulau Besar</h4>
                      </div>
                      <div class="col-lg-3 col-sm-6 col-6">
                        <i class="fa fa-home"></i>
                        <h4><span>Special:</span><br>Jungle Trekking</h4>
                      </div>
                      <div class="col-lg-3 col-sm-6 col-6">
                        <div class="main-button">
                          <a href="BOOKINGDETAILS/bookingdetails-dcoconut.html">Explore More</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="top-banner-44" class="banner">
          <div class="banner-inner-wrapper header-text">
            <div class="main-caption">
              <h2>Take a Glimpse Into The Beautiful Of:</h2>
              <h1 style="text-shadow: 2px 4px #16568a;" >Pulau Aur</h1>
              
            </div>
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <div class="more-info">
                    <div class="row">
                      <div class="col-lg-3 col-sm-6 col-6">
                        <i class="fa fa-user"></i>
                        <h4><span>Start from:</span><br>RM550</h4>
                      </div>
                      <div class="col-lg-3 col-sm-6 col-6">
                        <i class="fa fa-globe"></i>
                        <h4><span>Island:</span><br>Pulau Aur</h4>
                      </div>
                      <div class="col-lg-3 col-sm-6 col-6">
                        <i class="fa fa-home"></i>
                        <h4><span>Special:</span><br>Snorkeling trip</h4>
                      </div>
                      <div class="col-lg-3 col-sm-6 col-6">
                        <div class="main-button">
                          <a href="BOOKINGDETAILS/bookingdetails-bluewater.html">Explore More</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="controls">
          <label for="banner1"><span class="progressbar"><span class="progressbar-fill"></span></span><span class="text">1</span></label>
          <label for="banner2"><span class="progressbar"><span class="progressbar-fill"></span></span><span class="text">2</span></label>
          <label for="banner3"><span class="progressbar"><span class="progressbar-fill"></span></span><span class="text">3</span></label>
          <label for="banner4"><span class="progressbar"><span class="progressbar-fill"></span></span><span class="text">4</span></label>
        </div>
      </nav>
    </div>
  </section>
  <!-- ***** Main Banner Area End ***** -->
<!-- ------------------------------------------------------------------BOOKING------------------------------------------------------------------------------- -->
  <section class="featured-places" id="blog">
    <div class="container" >
      <div class="row">
          <div class="col-md-12" id="downIV">
              <div class="section-heading">
                <h1 style="color: white;">ISLAND VACATION</h1><hr>
              </div>
          </div> 
      </div> 
      <div class="row">
        <?php 
        while($row=mysqli_fetch_assoc($result))
          {
        ?>

          <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="featured-item">
                  <div class="thumb">
                    
                    <?php
            
                       $imageURL1 = 'AdminDashboard/islandVacationAdmin/image/'.$row["image1"];
                    ?>
                    <img src="<?php echo $imageURL1; ?>" alt="">
 
                  </div>
                  <div class="down-content">
                      <h4><?php echo $row['name']?></h4>
                      <span style="color:#22b3c1;"></span>
                      <h6 style="color: grey; font-size: 14px;">Start from</h6>
                      <h3>RM<?php echo $row['price']?><p>/pax</p></h3>
                      <p>Address: <?php echo $row['address']?></p>
                      <div class="row">
                          <div class="col-md-6 first-button">
                              <div class="text-button">
                                <a href="https://api.whatsapp.com/send?phone=60183835565">Book Now</a>  
                              </div>
                          </div>
                          <div class="col-md-6 second-button">
                              <div class="text-button">
                                <form action="BOOKINGDETAILS/bookingdetails.php" method="post" enctype="multipart/form-data">
                                  <input type="hidden" name="id" value="<?php echo $row['vacation_id']?>">
                                  <button style="width: 100%; background: transparent; border-style: hidden;" name="btnViewMore"><a>More</a> </button>
                                </form>
                                  
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

          <?php 
        
            }
          ?>

          </div>
          
      </div>
  </div>
  </div>
  </div>
  </section>
  <!-- ------------------------------------------------------------------END BOOKING------------------------------------------------------------------------------- -->
<!-- ------------------------------------------------------------------PLACES------------------------------------------------------------------------------- -->
 
<div class="amazing-deals"  >
  <div class="container" id="downIH" >
    <div class="row">
      <div class="col-md-12"  >
            <div class="section-heading">
                <h1 style="color: white;">ISLAND HOPPING</h1><hr>
            </div>
      </div> 

      <?php 
        while($rowH=mysqli_fetch_assoc($resultH))
          {
        ?>

      <div class="col-lg-6 col-sm-6">
        <div class="item">
          <div class="row">
            <div class="col-lg-6">
              <div class="image">
                <?php
            
                       $imageURL1H = 'AdminDashboard/islandHoppingAdmin/image/'.$rowH["image1"];
                       $imageURL2H = 'AdminDashboard/islandHoppingAdmin/image/'.$rowH["image2"];
                    ?>

                <img src="<?php echo ($imageURL1H);?>" alt="">
                <img src="<?php echo ($imageURL2H);?>" alt="">
              </div>
            </div>
            <div class="col-lg-6 align-self-center">
              <div class="content">
                <span class="info" style="color: #111; font-weight: bold; " >RM <?php echo $priceA = $rowH['priceA']?><span style="color:#111; font-weight:normal; font-size: 14px;">/person</span><br>RM <?php echo $priceB = $rowH['priceC']?><span style="color:#111; font-weight:normal; font-size: 14px;">/child [5-11yo]</span></span>
                <h4 style="color: #22b3c1" ><?php echo $name = $rowH['name']?></h4>
                <div class="row">
                  <div class="col-6">
                    <i class="fa fa-clock"></i>
                    <span class="list" style="color: rgb(98, 96, 96);" >DAY-TRIP</span>
                  </div>
                  <div class="col-6">
                    <i class="fa fa-map"></i>
                    <span class="list" style="color: rgb(98, 96, 96);" >3 ISLAND</span>
                  </div>
                </div>
                <p style="color: #2a2a2a;" >Included: <br><?php echo $include = $rowH['packageIncluded']?></p>
                <div class="main-button">
                    <form action="BOOKINGDETAILS/HoppingDetail.php" method="post" enctype="multipart/form-data">

                    <input type="hidden" name="id" value="<?php echo $rowH['hopping_ID']?>">
                    <button style="border-color:transparent; background-color:transparent;"><a>VIEW MORE </a></button>

                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <?php
          }
      ?>

      <!-- <div class="col-lg-6 col-sm-6">
        <div class="item">
          <div class="row">
            <div class="col-lg-6">
              <div class="image">
                <img src="assets/images/deals-02.jpg" alt="">
              </div>
            </div>
            <div class="col-lg-6 align-self-center">
              <div class="content">
                <span class="info" style="color: #111; font-weight: bold; " >RM180<span style="color:#111; font-weight:normal; font-size: 14px;">/person</span><br>RM90<span style="color:#111; font-weight:normal; font-size: 14px;">/child [5-11yo]</span></span>
                <h4 style="color: #22b3c1; font-weight: bold; " >ADVENTURE</h4>
                <div class="row">
                  <div class="col-6">
                    <i class="fa fa-clock"></i>
                    <span class="list" style="color: rgb(98, 96, 96);" >DAY-TRIP</span>
                  </div>
                  <div class="col-6">
                    <i class="fa fa-map"></i>
                    <span class="list" style="color: rgb(98, 96, 96);">5 ISLAND</span>
                  </div>
                </div>
                <p style="color: #2a2a2a;">Included: <br>•Boat Transfer & Guide<br>•Snorkeling Equipment<br>•Lunch & Drinks<br>•Life Jacket/ Safety Equipment</p>
                <div class="main-button">
                  <a href="BOOKINGDETAILS/bookingdetails-adventure.html">VIEW MORE</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> -->



      <!-- <div class="col-lg-6 col-sm-6">
        <div class="item">
          <div class="row">
            <div class="col-lg-6">
              <div class="image">
                <img src="assets/images/deals-03.jpg" alt="">
              </div>
            </div>
            <div class="col-lg-6 align-self-center">
              <div class="content">
                <span class="info">**Undefined</span>
                <h4>Glasgow City Lorem</h4>
                <div class="row">
                  <div class="col-6">
                    <i class="fa fa-clock"></i>
                    <span class="list">5 Days</span>
                  </div>
                  <div class="col-6">
                    <i class="fa fa-map"></i>
                    <span class="list">Daily Places</span>
                  </div>
                </div>
                <p>Lorem ipsum dolor sit amet dire consectetur adipiscing elit.</p>
                <div class="main-button">
                  <a href="reservation.html">Make a Reservation</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-sm-6">
        <div class="item">
          <div class="row">
            <div class="col-lg-6">
              <div class="image">
                <img src="assets/images/deals-04.jpg" alt="">
              </div>
            </div>
            <div class="col-lg-6 align-self-center">
              <div class="content">
                <span class="info">*Offer Until 24th March</span>
                <h4>Glasgow City Lorem</h4>
                <div class="row">
                  <div class="col-6">
                    <i class="fa fa-clock"></i>
                    <span class="list">5 Days</span>
                  </div>
                  <div class="col-6">
                    <i class="fa fa-map"></i>
                    <span class="list">Daily Places</span>
                  </div>
                </div>
                <p>This free CSS template is provided by Template Mo website.</p>
                <div class="main-button">
                  <a href="reservation.html">Make a Reservation</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> -->
      <div class="col-lg-12">
        <ul class="page-numbers">
          <!--<li><a href="bookingpage.php#downIV"><i class='fas fa-umbrella-beach'></i></a></li>-->
          <li ><a href="bookingpage.php#downIV"><i class='fas fa-umbrella-beach'></i></a></li>
          <li class="active"><a href="bookingpage.php#downIH"><i class='fas fa-ship'></i></a></li>
          <!-- <li><a href="#">3</a></li> -->
          <!--<li><a href="bookingpage.php#downIH"><i class="fa fa-arrow-right"></i></a></li>-->
        </ul>
      </div>
    </div>
  </div>
</div><br><br><br><br>

<!-- ------------------------------------------------------------------END PLACES------------------------------------------------------------------------------- -->


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
    function bannerSwitcher() {
      next = $('.sec-1-input').filter(':checked').next('.sec-1-input');
      if (next.length) next.prop('checked', true);
      else $('.sec-1-input').first().prop('checked', true);
    }

    var bannerTimer = setInterval(bannerSwitcher, 5000);

    $('nav .controls label').click(function() {
      clearInterval(bannerTimer);
      bannerTimer = setInterval(bannerSwitcher, 5000)
    });
  </script>
  
  <script>
  var x = document.getElementById("myAudio"); 
  var isPlaying = false;     

  function togglePlay() {
  if (isPlaying) {
    x.pause()
   
    
  } else {
    x.play();
  }
};


x.onplaying = function() {
  isPlaying = true;
};
x.onpause = function() {
  isPlaying = false;
  
};
  </script>

  </body>

</html>

