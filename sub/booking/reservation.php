<?php
session_start();
include('connection.php');
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
    <link rel="stylesheet" href="assets/css/bookingpayment_pagestyle.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="assets/css/style.css">

    <style>
  html {
  scroll-behavior: smooth;
 }
 
 a {
  text-decoration: none;
  color: black;
 } 
 
 #down {
  margin-top: 5%;
  padding-bottom: 0%;
 } 

 .containerbtn{  
    float: left;  
    margin: 10px;  
}  
.right{  
    float: left;  
    margin: 10px;  
    color: blue;  
    font-size: 20px;  
    font-weight:bold;  
}  
.radio {  
    width: 20px;  
    position: relative;  
}  
.radio label {  
    width: 20px;  
    height: 20px;  
    cursor: pointer;  
    position: absolute;  
    top: 0;  
    left: 0;  
    background: white;  
    border-radius: 50px;  
    box-shadow: inset 0px 1px 1px white, 3px 3px 9px rgba(0,0,0,0.5);  
    border: 1px solid black;  
}  
.radio label:after {  
    content: '';  
    position: absolute;  
    top: 4px;  
    left: 4px;  
    border: 6px solid blue;  
    border-radius: 50px;  
    opacity: 0;  
    }  
.radio label:hover::after {  
    opacity: 0.3;  
    }  
.radio input[type=radio] {  
    visibility: hidden;  
}  
.radio input[type=radio]:checked + label:after {  
     opacity: 1;  
    }    
</style>


</head>

<body style="background-color:#222;">

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
                        <img src="assets/images/logo.png" alt="">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                      <li><a href="https://etourmersing.com/bookingpage.php" >Go back</a></li>
                        
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

  <div class="second-page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h4>Book Prefered Deal Here</h4>
          <h2>Make Your Reservation</h2><br>
          <h4>Island Vacation</h4>
        </div>
      </div>
    </div>
  </div>

  <div id="down" class="reservation-form">
    <h2 style="text-align: center; color:aliceblue;">Online Payment</h2>
  <hr>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3986.2207021891677!2d103.97487121475575!3d2.433331298226761!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31c53443aaaaaaab%3A0x9c55ea3ca337ef35!2sD&#39;Coconut%20Island%20Resort!5e0!3m2!1sen!2smy!4v1664516478647!5m2!1sen!2smy" width="100%" height="450px" frameborder="0" style="border:0; border-top-left-radius: 23px; border-top-right-radius: 23px;" allowfullscreen=""></iframe>
            <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12469.776493332698!2d-80.14036379941481!3d25.907788681148624!2m3!1f357.26927939317244!2f20.870722720054623!3f0!3m2!1i1024!2i768!4f35!3m3!1m2!1s0x88d9add4b4ac788f%3A0xe77469d09480fcdb!2sSunny%20Isles%20Beach!5e1!3m2!1sen!2sth!4v1642869952544!5m2!1sen!2sth" width="100%" height="450px" frameborder="0" style="border:0; border-top-left-radius: 23px; border-top-right-radius: 23px;" allowfullscreen=""></iframe> -->
          </div>
        </div>
        <div class="col-lg-12">
          <form id="reservation-form" name="gs" method="POST" role="search" action="toyyibPay/request.php">
            <div class="row">
              <div class="col-lg-12">
                <h4>Make Your <em>Booking Payment</em> Through This <em>Form</em></h4>
              </div>
              <div class="col-lg-6">
                  <fieldset>
                      <label for="fullname" class="form-label">Enter Your Full Name</label>
                      <input type="text" name="fullname" class="fullname" placeholder="Full Name" autocomplete="on" required>
                  </fieldset>
              </div>
              <div class="col-lg-6">
                  <fieldset>
                      <label for="email" class="form-label">Your Email</label>
                      <input style="width: 100%;" type="Email" name="email" class="email" placeholder="Ex. xxxxxxx@gmail.com" autocomplete="on" required>
                  </fieldset>
              </div>
              
              <div class="col-lg-6">
                <fieldset>
                    <label for="Numphone" class="form-label">Your Phone Number<small style="margin-left:10px;">(numbers only)</small></label>
                    <input type="tel" name="numphone" class="Number" placeholder="Ex. 01XXXXXXXX" pattern="[0]{1}[1]{1}[0-9]{8}" onkeypress="return onlyNumberKey(event)" required>
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                    <label for="giftplaces" class="form-label">Choose Your Destination</label>
                    <select style="width: 100%;" name="destination" id="giftplaces" class="form-select" aria-label="Default select example" onclick="tukar()" >
                        <option value="ASEANIA BEACH RESORT"selected>ASEANIA BEACH RESORT</option>
                        <option value="DCOCONUT RESORT">D'COCONUT RESORT</option>
                        <option value="RAWA ISLAND RESORT">RAWA ISLAND RESORT</option>
                        <option value="BLUEWATER RESORT">BLUEWATER RESORT</option>
                        <option value="SARI PACIFICA RESORT">SARI PACIFICA RESORT</option>
                        <option value="CHALET TOK MOK">CHALET TOK MOK</option>
                        <option value="CHALET TOK MOK">MERCHANDISE</option>
                    </select>
                </fieldset>
            </div>
              
              <div class="col-lg-6">
                <fieldset>
                    <label for="checkIn" class="form-label">Check In Date<small style="margin-left:10px;">(7 days after payment)</small></label>
                    <input style="50%" type="date" id="checkIndate" name="checkIndate" class="date" onchange="date(event)" required>
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                    <label for="checkOut" class="form-label">Check Out Date</label>
                    <input style="50%" type="date" readonly id="checkOutdate" name="checkOutdate" class="date" required>
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                    <label for="chooseGuests" class="form-label">Number Of Pax</label>
                    <!--<input type="number" id="Numofguests" name="numofguests" class="date" onclick="calc(this.value)" min="1" max="12" required>-->
                
                    <select style="width: 100%;" name="pax" id="pax" required class="form-select" aria-label="Default select example"  onchange="calcSelect(this.value)">
                          <option value="0">Select</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                          <option value="7">7</option>
                          <option value="8">8</option>
                          <option value="9">9</option>
                          <option value="10">10</option>
                          <option value="11">11</option>
                          <option value="12">12</option>
                    </select>
                    </fieldset>
            </div>
              <div class="col-lg-6">
                <fieldset>
                    <label for="text" id="total" class="total" style="margin-bottom:10px;">Total price (RM)</label>
                    <input readonly type="text" name="total" class="totalPrice" id="totalPrice" placeholder="RM" >
                </fieldset>
            </div>
                
            <label for="text" id="total" class="total">Payment method</label>
                    <select style="width: 100%;" name="method" id="method" class="form-select" aria-label="Default select example"  onchange="show()">
                          <!--<option value="Choose">Choose your preferred payment method</option>-->
                          <option value="Online Payment" selected>Online Payment</option>
                    </select>
            
              <div class="col-lg-12">    
                <label for="text"  style="color:black;" id="disclaimer">DISCLAIMER</label><br>
                <label for="text" id="lblsubmit" class="submit">*By clicking the submit button below, you will agree to our terms and conditions and <a href="https://etourmersing.com/privacypolicy-page.html" style="color:blue; text-decoration-line:underline;">Privacy Policy</a>.</label>                    
                  <fieldset>
                      <br>
                      <input type="submit" value = "Pay Now - Using ToyyibPay" style="background-color:#22b3c1;" id="btnOnline" name="btnOnline" class="button-85" onclick="invalid()">
                  </fieldset>
                  
              </div>
              </form>
            </div>
          
        </div>
      </div>
    </div>
  </div>
  
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>Copyright © <a href="#">ETour Mersing</a> Company. All rights reserved. </a></p>
        </div>
      </div>
    </div>
  </footer>

  <!--<script>-->
  <!--  function myFunction (x){-->
  <!--    if (x.matches){-->
  <!--      document.getElementById("pax").style.display="inline-block";-->
  <!--      document.getElementById('Numofguests').style.display="none";-->
  <!--    }-->
  <!--    else{-->
  <!--      document.getElementById("pax").style.display="none";-->
  <!--      document.getElementById('Numofguests').style.display="inline-block";-->
  <!--    }-->
  <!--  }-->

  <!--  var x = window.matchMedia("(max-width: 700px)")-->
    <!--myFunction(x) // Call listener function at run time-->
    <!--x.addListener(myFunction) // Attach listener function on state changes-->
  <!--</script>-->
  
  <script>
        function onlyNumberKey(evt) {
              
            // Only ASCII character in that range allowed
            var ASCIICode = (evt.which) ? evt.which : evt.keyCode
            if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
                return false;
            return true;
        }
    </script>

  <script>
    var date = new Date();
        // var dateToday = date.getDate();
        var month = date.getMonth()+1;
        var year = date.getFullYear();
        var targetDate=String(date.getDate()+7).padStart(2,'0');

        var pattern = year + "-" + month + "-" + targetDate;
        if(targetDate>31){
        String(targetDate=targetDate-31+1).padStart(2,'0');
        month=month+1;
        var pattern = year + "-" + month + "-" + "0" +targetDate;
      }
      else if(targetDate==32){
        String(targetDate=targetDate-1).padStart(2,'0');
        month=month+1;
        var pattern = year + "-" + month + "-"  + "0" +targetDate;
      }
      else if((targetDate==32) && (month==11)){
        String(targetDate=targetDate+1).padStart(2,'0');
        month=month+1;
        var pattern = year + "-" + month + "-"  + "0" +targetDate;
      }
      else if((targetDate==31)&&(month==4 || month==6 || month==9 || month==11)){
        String(targetDate=targetDate-30).padStart(2,'0');
        month=month+1;
        var pattern = year + "-" + month + "-"  + "0" +targetDate;
      }
      else{
        var pattern = year + "-" + month + "-" +targetDate;
      }

        console.log(pattern);

        // document.getElementById("checkIndate").min = pattern;
        document.getElementById('checkIndate').setAttribute("min", pattern);
        
  function tukar(){
    document.getElementById("pax").value = "0";
    document.getElementById("totalPrice").value = 0;
  }
  function invalid(){
      total = document.getElementById("totalPrice").value;
      if(total==0){
      alert("You inserted a wrong input, please make sure you book a right package.");
      }
  }
  </script>
  
  <script>
    function date(e){
      var date = new Date (document.getElementById("checkIndate").value);
      var year = date.getFullYear();
      var month = date.getMonth()+1;
      var targetDate=String(date.getDate()+2).padStart(2,'0');
      if(targetDate>31){
        String(targetDate=targetDate-31).padStart(2,'0');
        month=month+1;
        var datePattern = year + "-" + month + "-" + "0" +targetDate;
      }
      else if(targetDate==32){
        String(targetDate=targetDate-1).padStart(2,'0');
        month=month+1;
        var datePattern = year + "-" + month + "-"  + "0" +targetDate;
      }
      else if((targetDate==31)&&(month==4 || month==6 || month==9 || month==11)){
        String(targetDate=targetDate-30).padStart(2,'0');
        month=month+1;
        var datePattern = year + "-" + month + "-"  + "0" +targetDate;
      }
      else{
        var datePattern = year + "-" + month + "-" +targetDate;
      }
      document.getElementById("checkOutdate").value = datePattern;
    }
  </script>

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/wow.js"></script>
  <script src="assets/js/tabs.js"></script>
  <script src="assets/js/popup.js"></script>
  <script src="assets/js/custom.js"></script>
  <!--<script src="assets/js/script.js"></script>-->
  <script src="assets/js/scriptSelect.js"></script>
  </body>

</html>

