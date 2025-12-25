<?php
session_start();

include("assets/php/Login.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
	
	<title>Admin Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/LogInSignupCss/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/LogInSignupCss/Loginutil.css">
	<link rel="stylesheet" type="text/css" href="assets/css/LogInSignupCss/Loginmain.css">
	<link rel="shortcut icon" type="image/jpg" href="images/logo.png"/>
	
	<script>
		function preventBack(){window.history.forward()};
			setTimeout("preventBack()",0);
		window.onunload=function(){null;}
	</script>
	  
<!--===============================================================================================-->
<style>
    .error{
       
        text-align: center;
        border-radius: 50px;
        font-family: 'Poppins';
		font-weight: 700;
		color: red;
    }
    
    .home{
		width: 100px;
		height: 30px;
		margin-top: 30px;
		font-family: Poppins; 
		font-weight: 600;
		transition:0.3s;
		border-radius: 50px;
		color:#22b3c1;
	}

	.home:hover{
		background-color: #57b846;
		width: 120px;
		color:white;
	}
</style>
</head>

<body>
	
	
    
	<div class="limiter">
		<div class="container-login100" >
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<a href="index.php"><img src="images/logo.png" alt="IMG" style="margin-top: -2cm;" ></a>
					
				</div>

				<form action="assets/php/Login.php" class="login100-form validate-form" method="post" style="margin-top: -2cm;">
				    

					<span class="login100-form-title" style="font-family: Poppins; font-weight: 600;">
						Admin Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="username" placeholder="Username" style="font-family: Poppins; font-weight: 600; "required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password" style="font-family: Poppins; font-weight: 600;" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					<?php if (isset($_GET['error'])) { ?>
                                <p class="error"><?php echo $_GET['error']; ?></p>
                            <?php } ?>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="login" style="font-family: Poppins; font-weight: 600;">
							Login
						</button> <br>
						<a href="index.php"><button class="home" type="button" >Back to <i class='fa fa-home'> </button></i></a>
					</div>

					
				</form>
			</div>
		</div>
	</div>

	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>