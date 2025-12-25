<?php
include("assets/php/Feedback.php");
include("assets/php/connect.php");
session_start();
if(isset($_SESSION['views']))
    $_SESSION['views'] = $_SESSION['views']+1;
else
    $_SESSION['views']=1;
    
include("count.php");

?>


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
    <link rel="stylesheet" href="assets/css/styleEvent.css"> 
    <link rel="shortcut icon" type="image/jpg" href="images/logo.png"/>
    <link rel="stylesheet" href="assets/css/templatemo-woox-travel2.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/feedback.css">
    <link rel="stylesheet" href="assets/css/footerstyle.css">
    <link rel="stylesheet" href="assets/css/footer_icon.css">
    <link rel="html" href="footer.html">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Include jQuery -->
    
    <style>
        .fas{
          transition:0.3s;
          padding-top:4px;
          width:50px;
        }
        
        .fas:hover{
          background-color: #fff;
          color:#22b3c1;
          border-radius:100px;
        }
        
        #overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8); /* Dark background */
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 9999; /* Ensure it stays on top */
        }
        #overlay img {
            max-width: 90%; /* Responsive image */
            max-height: 90%; /* Responsive image */
        }
        /* Hide the overlay */
        .hidden {
            display: none;
        }
    </style>

  </head>
<body style="background-color:#222;">
    
    <audio id="myAudio"><source src="assets/Audio/beachsound.mp3" type="audio/mpeg"></audio>
    
    <div id="overlay" aria-hidden="false">
    <img src="images/please1.png" alt="Welcome Image">
</div>

<script>
    // Function to run on page load
    $(document).ready(function() {
        var img = $("#overlay img"); // Select the image inside the overlay

        // Hide the image after 3000 milliseconds (3 seconds)
        setTimeout(function() {
            img.closest('#overlay').hide(); // Hide the entire overlay
        }, 3000);
    });
</script>




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
                        <img src="images/logo.png" alt="" style="margin-top: -28px;">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                      <li><a href="index.php"  class="active" >Home</a></li>
                        <li><a href="event-page.php">Event</a></li>
                        
                          <li class="dropdown">
                            <a style="background: none;" class="btn btn-secondary dropdown-toggle" type="button" 
                            id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">Packages</a>
                              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" >
                                <li ><a class="dropdown-item" href="bookingpage.php#downIV" style=" color: black; background: none; text-align: center; ">Island Vacation</a></li>
                                <li><a class="dropdown-item" href="bookingpage.php#downIH" style="color: black; background: none; text-align: center;">Island Hopping</a></li>
                                <!-- <li><a class="dropdown-item" href="#" style="color: black;" >Something else here</a></li> -->
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
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  
  <div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h4>Discover Our Best Package!</h4>
          <h2>Amazing Prices &amp; More</h2>
          <div class="border-button"><a href="bookingpage.php">Discover More</a></div>
        </div>
      </div>
    </div>
  </div>

  <br>
<center>
<div>
    <video width="400" align="center" controls>
      <source src="images/VIDEO/montage1.mp4" type="video/mp4">
    
    </video>
    
</div>
  </center>


<!-- ------------------------------------------------------------------EVENT------------------------------------------------------------------------------- -->
<br><br>
<h2 style="text-align: center; color:rgb(246, 246, 246);">Event</h2>
<hr>
<div class="events-body">
    <div class="container2">
    
        <?php
            $query = "SELECT * FROM `event` " ;
            $query_run = mysqli_query($conn,$query);
            $i = 0 ;
            
            while($row=mysqli_fetch_assoc($query_run) and $i != 4 )
                    {
            ?>
            
                <div class="item-container2">
                    <div class="img-container2">
                        <img src="images/EVENT/<?php echo $img1 =  $row['Image1']?> " alt="Event image">
                        <img src="images/EVENT/<?php echo $img1 =  $row['Image2']?> " alt="Event image">
                    </div>
                    
                    <div class="body-container2">
                        <div class="overlay2"></div>
                        
                        <div class="event-info">
                            <p class="title"><?php echo $title =  $row['Title']?> </p>
                            <div class="separator"></div>
                            <p class="info">Mersing, Johor</p>
                            <p class="price">Free</p>
            
                            <div class="additional-info">
                                <p class="info">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <?php echo $sec = $row['Second_Description'] ?>
                                </p>
                                <p class="info">
                                    <i class="far fa-calendar-alt"></i>
                                    
                                </p>
            
                                <p class="info description">
                                  
                                </p>
                            </div>
                        </div>
                        <a class="action" href="event-page.php" style="text-decoration: none;">See Detail</a>
                    </div>
            </div>
        <?php
            
            
            $i++;            
            }
                
        ?>
        
        </div>
    </div>
<!-- ------------------------------------------------------------------END EVENT------------------------------------------------------------------------------- -->




<hr>
<form action="" method="post" class="feedback">
  <h1 style="color: white;">Leave us some feedback</h1> <br>
    <h3 class="name">Nickname  <input type="text" name="name" class="txt" required></h3> <br>
    <h3 class="name">Feedback <br> <textarea name="feedback" style="width: 600px; height: 100px" class="txtfeedback" required></textarea></h3> <br>
    <input type="submit" class="button-62" role="button" value="submit" name="submit">
    <hr>
</form> 

<div class="cities-town">
  <div class="container">
      <div class="row">
          <div class="slider-content">
              <div class="row">
                  <div class="col-lg-12">
                      <h2>Others <em> Feedback</em></h2>
                  </div>
      <div class="col-lg-12">
        <div class="owl-cites-town owl-carousel" >

                <?php
                
                    $query = "SELECT * FROM `feedback` WHERE `status` = 'Approved' " ;
                    $query_run = mysqli_query($conn,$query);

                    while($row = mysqli_fetch_array($query_run))
                    {
                        ?>
                        <div class="item" style="float: left ;width:100%; ">
                          <h1 class="name" ><?php echo $name=$row['name']?></h1>
                          <h6 style="font-size: 15px;"><?php echo $feed=$row['feedback']?></h6>
                        </div>
                        <?php
                    }
                
                ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ------------------------------------------------------------------END PLACES------------------------------------------------------------------------------- -->

<!-- ------------------------------------------------------------------BANNER------------------------------------------------------------------------------- -->

<center>
  <form action="assets/php/Email.php" method="POST" id="email" >
      <div class="call-to-action">
        <div class="container">
          <div class="row">
            <div class="col-lg-12  "  >
              <h2>Are You Looking To Travel ?</h2>
        
              <h4>Get notified about the latest promotion in our website.</h4>
              <br>Your email here 
                <input type="email" class="txt" name="email" style="width: 300px;" required>
                <input type="submit" class="button-62" role="button" value="notify me" name="notify">
            </div>
            
          </div>
        </div>
      </div>
    </form>
  </center>

  <!-- ------------------------------------------------------------------END BANNER------------------------------------------------------------------------------- -->

  <!-- ------------------------------------------------------------------FOOTER------------------------------------------------------------------------------- -->
  <script> 
$(function(){
  $("#header").load("header.html"); 
  $("#footer").load("footer.html"); 
});
</script> 
  <div id="footer"></div>
  <!-- ------------------------------------------------------------------END FOOTER------------------------------------------------------------------------------- -->


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
    $(".option").click(function(){
      $(".option").removeClass("active");
      $(this).addClass("active"); 
    });

    $(function(){

  $("#footer").load("footer.html"); 
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