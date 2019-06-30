<?php
   session_start();
   if(isset($_SESSION['username'])) {
   header('location:index.php'); }
?>
<html>
<head>
<title>Form Pendaftaran</title>
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
  <form action="prosesdaftar.php" method="post">
  <table>
  <tbody>
  <tr><td colspan="2" align="center"><h1>Daftar Baru</h1></td></tr>
  <tr><td>Username</td><td> : <input name="username"class="form-control" type="text"></td></tr>
  <tr><td>Password</td><td> : <input name="password" class="form-control" type="password"></td></tr>
  <tr><td colspan="2" align="right"><input value="Daftar" type="submit" class="btn btn-primary"> <input value="Batal" type="reset" class="btn btn-primary"></td></tr>
  <tr><td colspan="2" align="center">Sudah Punya akun ? <a href="index.php"><b>Login</b></a></td></tr>
  </tbody>
  </table>
  </form>
</div>
