<?php
include("assets/php/connect.php");

// Prepare the SQL statement to prevent SQL injection
$query = "SELECT * FROM event ORDER BY Event_ID DESC";

// Prepare the statement
$stmt = $conn->prepare($query);

// Check if the preparation was successful
if ($stmt === false) {
    die('Error preparing the statement: ' . $conn->error);
}

// Execute the statement
$stmt->execute();

// Bind the result variables to the query
$stmt->bind_result($eventID,$year, $date, $month, $title, $mainDescription, $secondDescription, $image1, $image2, $image3, $time);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>Event</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/cssEvent/event-pagestyle.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="assets/css/cssEvent/event-style.css" />
    <link rel="shortcut icon" type="image/jpg" href="images/logo.png"/>
    <link rel="stylesheet" href="assets/css/footerstyle.css">
    <link rel="stylesheet" href="assets/css/footer_icon.css">
</head>

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
</style>

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
                        <li><a href="index.php">Home</a></li>
                        <li><a href="event-page.html" class="active">Event</a></li>
                        <li class="dropdown">
                            <a style="background: none;" class="btn btn-secondary dropdown-toggle" type="button" 
                            id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">Packages</a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="bookingpage.php#downIV" style="color: black; background: none; text-align: center;">Island Vacation</a></li>
                                <li><a class="dropdown-item" href="bookingpage.php#downIH" style="color: black; background: none; text-align: center;">Island Hopping</a></li>
                            </ul>
                        </li>
                        <li><a href="aboutus-page.html">About Us</a></li>
                        <li><a href="privacypolicy-page.html">Policy</a></li>
                        <li><a href="Login.php">Admin</a></li>
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

<!-- ------------------------------------------------------------------EVENT------------------------------------------------------------------------------- -->
<br><br><br><br>
<?php 
    // Fetch the results row by row
    while ($stmt->fetch()) {
?>
<div class="event-container">
    <h3 style="color: white;" class="year">2022</h3>

    <div class="event" id="event1">
        <div class="event-left">
            <div class="event-date">
                <div class="date"><?php echo $date; ?></div>
                <div class="month"><?php echo $month; ?></div>
            </div>
        </div>

        <div class="event-right">
            <h3 class="event-title"><?php echo $title; ?></h3>

            <div class="event-description" style="color: white;">
                <?php echo $mainDescription; ?><br><br>
                <?php echo $secondDescription; ?><br><br>
            </div>

            <div class="images">
                <?php
                $imageURL1 = 'AdminDashboard/eventAdmin/image/'.$image1;
                $imageURL2 = 'AdminDashboard/eventAdmin/image/'.$image2;
                $imageURL3 = 'AdminDashboard/eventAdmin/image/'.$image3;
                ?>
                <img src="<?php echo $imageURL1; ?>" alt="" class="event-img" />
                <img src="<?php echo $imageURL2; ?>" alt="" class="event-img"/>
                <img src="<?php echo $imageURL3; ?>" alt="" class="event-img"/>
            </div>

            <div class="event-timing">
                <img src="images/EVENT/time.png" alt="" /> <?php echo $time; ?>
            </div>
        </div>
    </div>
</div>
<?php 
    }
?>
<!-- ------------------------------------------------------------------END EVENT------------------------------------------------------------------------------- -->

<!-- ------------------------------------------------------------------FOOTER------------------------------------------------------------------------------- -->
<div id="footer"></div>
<!-- ------------------------------------------------------------------END FOOTER------------------------------------------------------------------------------- -->

<!-- Scripts -->
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

<script>
var x = document.getElementById("myAudio"); 
var isPlaying = false;     

function togglePlay() {
    if (isPlaying) {
        x.pause();
    } else {
        x.play();
    }
}

x.onplaying = function() {
    isPlaying = true;
};
x.onpause = function() {
    isPlaying = false;
};
</script>

</body>
</html>