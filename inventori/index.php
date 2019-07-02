<?php
   session_start();
   if(isset($_SESSION['username'])) {
   header('location:index.php'); }
   require_once("database.php");
?>
<link href="assets/addons/bootstrap-4.1.1./css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="assets/addons/bootstrap-4.1.1./js/bootstrap.min.js"></script>
<script src="assets/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
    
<head>
	<title>
      Login Page</title>
	<link rel="stylesheet" href="assets/addons/bootstrap/4.1.3/css/bootstrap.min.css">
	<script src="assets/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="assets/css/all.css">
  <link rel="stylesheet" type="text/css" href="assets/css/login.css">
</head>

<body>
	<p> asdasda</p>
	<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
               <img src="PNJ.png" class="brand_logo" alt="Logo">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
				<form action="proseslogin.php" method="post">
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="username" class="form-control input_user" placeholder="username">
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="password" class="form-control input_pass" placeholder="password">
						</div>
						<div class="form-group">
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="customControlInline">
								<label class="custom-control-label" for="customControlInline">Remember me</label>
							</div>
						</div>
					
				</div>
				<div class="d-flex justify-content-center mt-3 login_container">
					<button type="submit" name="button" class="btn login_btn">Login</button>
        </div>
        
				<div class="mt-4">
					<div class="d-flex justify-content-center links">
						Don't have an account? <a href="daftar.php" class="ml-2">Sign Up</a>
					</div>
					<div class="d-flex justify-content-center links">
						<a href="#">Forgot your password?</a>
          </div>
   </form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
