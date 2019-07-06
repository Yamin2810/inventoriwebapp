<?php
	include  'database.php';
 ?>
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

<!-- <div class="nav" id="navigasi">
	<div class="row">
		<div class="col-md-8" ></div>
		
	</div>
</div> -->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Inventori</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="halaman_admin.php">Home</a></li>
      <!-- <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Page 1-1</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li>
        </ul>
      </li>
      <li><a href="#">Page 2</a></li> -->
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>
</nav>

<div class="container"> 
		
	<h3 align="center">Daftar Barang Yang Ada</h3>

<div class="container">

		<table class="table">
			<thead>
				<tr>
					<th>no</th>
					<th>Kode Barang</th>
					<th> Nama Barang </th>
					<th>Jenis Barang</th>
					
				</tr>
			</thead>
			<tbody>
			
			<?php 
				$query = 'select * from alat';
				$result = mysqli_query($connection, $query);
				if (!$result) {
					printf("Error: %s\n", mysqli_error($connection));
					exit();
				}
				
				while ($data = mysqli_fetch_array($result))
			 	{ ?>
			 	<tr>
				<td> <?php echo $data['no'];  ?>	</td>
					<td> <?php echo $data['kode_barang'] ?>	</td>
					<td> <?php echo $data['nama_barang'] ?>	</td>
					<td> <?php echo $data['jenis_barang'] ?></td>
					
				</tr>

			<?php }

			 ?>
				
			</tbody>


		</table>

</div>
<div  class="col-md-4">
			<a class="btn btn-success" href="tambah_barang.php">
				Tambah Data
			</a>
		</div>
		<div class="col-md-4">
			<a class="btn btn-success" href="hapus_barang.php">
				Hapus Data
			</a>
			
		</div>
		<!-- <div class="col-md-4">
			<a class="btn btn-success" href="logout.php">
				Logout
			</a>
			
		</div> -->
</div>


</body>
</html>