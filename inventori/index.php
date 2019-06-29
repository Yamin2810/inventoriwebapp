<?php
   session_start();
   if(isset($_SESSION['username'])) {
   header('location:index.php'); }
   require_once("database.php");
?>
<html>
<head>
<title>Form Login</title>
<!-- bootstrap-->
	<link rel="stylesheet" type="text/css" href="assets/addons/bootstrap-3.3.7/css/bootstrap.min.css">
<!-- css-->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
<div class="nav" id="navigasi">
	<div class="row">
		<div class="col-md-8" ></div>
		
	</div>
</div>
<div align='center'>
<div class="container">
	<div class="row">
		<div class="col-xs-12">
  <form action="proseslogin.php" method="post">
  <h1>Masuk</h1>
  <table>
  <tbody>
  <tr><td> <label>Username</label></td></tr>

  <tr><td> <input name="username" class="form-control" type="text"></td></tr>
  <tr><td> <label>Password</label></td></tr>
  <tr><td> <input name="password" class="form-control" type="password"></td></tr>
  
  <tr><td colspan="2" align="right"><input value="Login" type="submit" class="btn btn-primary"> <input value="Batal" type="reset" class="btn btn-primary"></td></tr>
  <tr><td colspan="2" align="center">Belum Punya akun ? <a href="daftar.php"><b>Daftar</b></a></td></tr>
  </tbody>
  </table>
  </form>
</div>