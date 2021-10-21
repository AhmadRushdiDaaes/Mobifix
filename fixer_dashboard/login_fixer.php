<?php

session_start();

include '../includes/connection.php';

if(isset($_POST['submit'])){
    $email    = $_POST['fixer_email'];
    $password = $_POST['fixer_password'];
     
   $query = "select * from fixer where fixer_email='$email' AND fixer_password='$password'";
   $result = mysqli_query($con, $query);

     $fixerSet = mysqli_fetch_assoc($result);

   
    if($fixerSet['fixer_email']==$email&&$fixerSet['fixer_password']==$password)
    {

        $_SESSION['fixer_id'] = $fixerSet['fixer_id']; 
        $_SESSION['fixer_name'] = $fixerSet['fixer_name']; 
        $_SESSION['fixer_email'] = $fixerSet['fixer_email'];
        header("location:index.php");   
    
    
    }
    else{
        header("location:login_fixer.php");    
        $error ="Email or password inncorect";
}
    }



?>















<!DOCTYPE html>
<html lang="en">
<head>
	<title>Fixers Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	

<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login_design/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login_design/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="login_design/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login_design/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login_design/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="login_design/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login_design/css/util.css">
	<link rel="stylesheet" type="text/css" href="login_design/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
				<form action="" method="post" class="login100-form validate-form flex-sb flex-w">
					<span style="color: rgb(246,147,35);" class="login100-form-title p-b-32">
						Fixer Login
					</span>

					<span style="color: rgb(246,147,35);" class="txt1 p-b-11">
						Email
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Username is required">
						<input class="input100" type="text" name="fixer_email" >
						<span class="focus-input100"></span>
					</div>
					
					<span style="color: rgb(246,147,35);" class="txt1 p-b-11">
						Password
					</span>
					<div class="wrap-input100 validate-input m-b-12" data-validate = "Password is required">
					
						<input class="input100" type="password" name="fixer_password" >
						<span class="focus-input100"></span>

					</div>
					
					

					<div class="container-login100-form-btn">
						<input style="color: rgb(246,147,35);" type="submit" name="submit"  class="btn btn-secondary btn-lg btn-block" value="login">

							
						
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="login_design/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="login_design/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="login_design/vendor/bootstrap/js/popper.js"></script>
	<script src="login_design/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="login_design/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="login_design/vendor/daterangepicker/moment.min.js"></script>
	<script src="login_design/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="login_design/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="login_design/js/main.js"></script>

</body>
</html>