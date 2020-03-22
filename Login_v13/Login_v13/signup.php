<!DOCTYPE html>
<html lang="en">

<head>
	<title>SignUp</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
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

<body style="background-color: #999999;">

	<div class="limiter">
		<div class="container-login100">
			<div class="login100-more" style="background-image: url('images/bg-01.jpg');"></div>

			<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
				<form class="login100-form validate-form" action="../../includes/signup.php" method="POST">
					<span class="login100-form-title p-b-59">
						Sign Up
					</span>

					<div class="wrap-input100 validate-input" data-validate="Name is required">
						<span class="label-input100">First Name</span>
						<?php
						if (isset($_GET['fname'])) {
							$fname = $_GET['fname'];
							echo '<input class="input100" type="text" name="fname" placeholder="Name..." value = "' . $fname . '">';
						} else {
							echo '<input class="input100" type="text" name="fname" placeholder="Name...">';
						}
						?>

						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Name is required">
						<span class="label-input100">Last Name</span>
						<?php
						if (isset($_GET['lname'])) {
							$lname = $_GET['lname'];
							echo '<input class="input100" type="text" name="lname" placeholder="Name..." value = "' . $lname . '">';
						} else {
							echo '<input class="input100" type="text" name="lname" placeholder="Name...">';
						}
						?>

						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
						<span class="label-input100">Email</span>
						<?php
						if (isset($_GET['email'])) {
							$email = $_GET['email'];
							echo '<input class="input100" type="text" name="email" placeholder="Email addess..." value = "' . $email . '">';
						} else {
							echo '<input class="input100" type="text" name="email" placeholder="Email addess...">';
						}
						?>

						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Username is required">
						<span class="label-input100">Username</span>
						<?php
						if (isset($_GET['username'])) {
							$username = $_GET['username'];
							echo '<input class="input100" type="text" name="username" placeholder="Username..." value = "' . $username . '">';
						} else {
							echo '<input class="input100" type="text" name="username" placeholder="Username...">';
						}
						?>

						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="pwd" placeholder="*************">
						<span class="focus-input100"></span>
					</div>

					

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="submit" name="submit">
								Sign Up
							</button>
						</div>

						<a href="../../Login_v5/Login_v5/signin.php" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
							Sign in
							<i class="fa fa-long-arrow-right m-l-5"></i>
						</a>

						<?php
						if (!isset($_GET['signup'])) {
							exit();
						} else {
							$check = $_GET['signup'];

							if ($check == "empty") {
								echo '<p class="ml-2 mt-4 text-danger">you didnt fill all the fields!</p>';
							}
							if ($check == "invalid_email") {
								echo '<p class="ml-2 mt-4 text-danger">Invailed email!</p>';
							}
							if ($check == "error") {
								echo '<p class="ml-2 mt-4 text-danger">SQL Ingection trial, please try again :)</p>';
							}
							if ($check == "sucssess") {
								echo '<p class="ml-2 mt-4 text-danger">you have registered successfuly!</p>';
							}
							if ($check == "taken_username") {
								echo '<p class="ml-2 mt-4 text-danger">Sorry this username has been taken!</p>';
							}
						}

						?>
					</div>
				</form>
			</div>
		</div>
	</div>

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