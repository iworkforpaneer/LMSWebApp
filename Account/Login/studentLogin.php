<?php
session_start();
if(isset($_POST['submit'])) {
	//Importing database connection file
	require_once('connect.php');

	//Extracting & filtering variables values
	$email = strip_tags(stripcslashes($_POST['email']));
	$password = strip_tags(stripcslashes($_POST['password']));

	//Authenticating user credentials with the database
	$sql = "SELECT * FROM `studentlogindata` WHERE `email` = '$email' AND `password` = '$password'";
	$result = mysqli_query($conn, $sql);
	if(mysqli_num_rows($result) == 1) {
		$_SESSION['email'] = $email;
		$_SESSION['password'] = $password;

		
		extract(mysqli_fetch_assoc($result));

		/* FETCH ALL BOOKS ISSUED AGAINST THE STUDENT ID WHERE THE DUE DATE HAS BEEN PASSED */

		$sql = "SELECT * FROM `studentorders` WHERE `email` = '$email' AND DATE(`expirydate`) < DATE('".date("Y-m-d")."')";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result)) {
			$fine = 0;
			while ($row = mysqli_fetch_assoc($result)) {
				$fine += floor((time() - strtotime($row['expirydate']))/(3600 * 24)) * 50;
			}
			$sql = "SELECT * FROM `finetable` WHERE `email` = '$email'";
			if (mysqli_num_rows(mysqli_query($conn, $sql))) {
				$sql = "UPDATE `finetable` SET `fine` = '$fine' WHERE `email` = '$email'";
			} else {
				$sql = "INSERT INTO `finetable`(`ftid`, `studentname`, `studentenrollno`, `email`, `fine`, `time`) VALUES (NULL,'$studentname', '$studentenrollno', '$email', '$fine', '".date("Y-m-d H:i:s")."')";
			}
			mysqli_query($conn, $sql);
			if (mysqli_errno($conn)) {
				die("AN ERROR OCCURED!");
			}
		}

		/* CALCULATE FINE AND UPDATE IT IN THE DATABASE */


		echo "<script>
        alert('Logged In Successfully!');
        window.location.href='../Panel/StudentPanel/index.php';
        </script>";
	}
	else {
		echo "<script>alert('Wrong Credentials!')</script>";
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>LMSWebApp | Student Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-50 p-b-90">
				<form class="login100-form validate-form flex-sb flex-w" method="POST">
					<span class="login100-form-title p-b-51">
						Student Login
					</span>

					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Email is required">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
					</div>
					
					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
					</div>
					
					<!-- <div class="flex-sb-m w-full p-t-3 p-b-24">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>

						<div>
							<a href="#" class="txt1">
								Forgot?
							</a>
						</div>
					</div> -->

					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn" name="submit">
							Login
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>