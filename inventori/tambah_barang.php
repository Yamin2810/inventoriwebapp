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

<h2 align="center"> FORM tambah barang</h2>
<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<form action="tambah.php" method="post">
				<div class="form-group"></div>
				<label>kode barang</label>
				<input type="text" name="kode_barang" class="form-control" required="true">				
				<div class="form-group"></div>
				<label>nama barang	</label>
				<input type="text" name="nama_barang" class="form-control" required="true">

				<div class="form-group"></div>
				<label>jenis barang</label>
				<input type="text" name="jenis_barang" class="form-control" required="true">
				<br>
				<button type="submit" class="btn btn-primary" href="halaman_admin.php"> Simpan</button>
				<a class="btn btn-primary" href="halaman_admin.php" > Lihat </a>
			</form>		
		</div>
	</div>

</div>


</body>
</html>