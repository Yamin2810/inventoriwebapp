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
	<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
               <img src="PNJ.png" class="brand_logo" alt="Logo">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
				<form action="prosesdaftar.php" method="post">
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="username" class="form-control input_user">
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="password" class="form-control input_pass">
						</div>
						<div class="form-group">
							
						</div>
					
				</div>
				<div class="d-flex justify-content-center mt-3 login_container">
					<button type="submit" name="button" class="btn login_btn">Sign Up</button>
        </div>
        <div class="mt-4">
					<div class="d-flex justify-content-center links">
						have an account? <a href="index.php" class="ml-2">Login</a>
					</div>
        
				
					
   </form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
