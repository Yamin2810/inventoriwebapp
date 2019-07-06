<!DOCTYPE html>
<html>
<head>
	<title>Inventory</title>

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

<h2 align="center"> FORM pinjam barang</h2>
<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<form action="pinjam.php" method="post">
				<div class="form-group"></div>
				<label>Username</label>
				<input type="text" name="username" class="form-control" required="true">				
				<div class="form-group"></div>
				<label>jenis barang</label>
				<form>
			<select name="barang">
	<option>--- Pilih Barang ---</option>
	<?php
	include('database.php');
	$sql = mysqli_query($connection, "SELECT * FROM alat");
	if(mysqli_num_rows($sql) != 0){
		while($row = mysqli_fetch_assoc($sql)){
			echo "<option value = ".$row['kode_barang'].">".$row['nama_barang']."</option>";
		}
	}
		?>
		
</select>
				<br>
				<button type="submit" class="btn btn-primary"> submit</button>
				<a class="btn btn-primary" href="halaman_pengguna.php" > Lihat </a>
			</form>		
		</div>
	</div>

</div>


</body>
</html>