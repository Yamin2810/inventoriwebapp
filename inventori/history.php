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
	<ul class="nav navbar-nav navbar-right">
		<li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>	
	</ul>
</div>

<div class="container"> 
	<h3 align="center">Daftar Barang Yang Pernah Dipinjam</h3>

<div class="container">

		<table class="table">
			<thead>
				<tr>
					<th>no</th>
					<th>Kode Barang</th>
					<th> Nama Barang </th>
					<th>Jenis Barang</th>
					<th>Date</th>
					
				</tr>
			</thead>
			<tbody>
			
			<?php 
				$query = 'select alat.kode_barang, alat.nama_barang,alat.jenis_barang,date from alat INNER JOIN history where alat.kode_barang= history.kode_barang';
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
					<td> <?php echo $data['date'] ?></td>
					
				</tr>

			<?php $no++; 	}

			 ?>
				
			</tbody>


		</table>

</div>
</div>


</body>
</html>