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

<div class="nav" id="navigasi">
	<div class="row">
		<div class="col-md-8" ></div>
		
	</div>
</div>

<div class="container"> 
		<div class="col-md-12">
			<h2> Status Peminjaman </h2>
			<h5 id="status1"> Anda belum mengembalikan barang AAA</h4>
		</div>
		<div  class="col-md-4">
			<a class="btn btn-success" href="pinjam_barang.php">
				Pinjam Barang
			</a>
		</div>
		<div class="col-md-4">
			<a class="btn btn-success" href="kembalikan_barang.php">
				Kembalikan Barang
			</a>
			
		</div>
		<div class="col-md-4">
			<a class="btn btn-success" href="logout.php">
				Logout
			</a>
			
		</div>
	<h3 align="center">Daftar Barang Yang Belum Dikembalikan</h3>

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
				$query = 'select alat.kode_barang, alat.nama_barang,alat.jenis_barang from alat INNER JOIN pinjam where alat.kode_barang= pinjam.kode_barang';
				$result = mysqli_query($connection, $query);
				if (!$result) {
					printf("Error: %s\n", mysqli_error($connection));
					exit();
				}
				$no = 1;
				while ($data = mysqli_fetch_array($result))
			 	{ ?>
			 	<tr>
					<td> <?php echo $no;  ?>	</td>
					<td> <?php echo $data['kode_barang'] ?>	</td>
					<td> <?php echo $data['nama_barang'] ?>	</td>
					<td> <?php echo $data['jenis_barang'] ?></td>
					
				</tr>

			<?php $no++; 	}

			 ?>
				
			</tbody>


		</table>

</div>
</div>


</body>
</html>