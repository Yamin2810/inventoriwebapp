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

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Inventori</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="halaman_pengguna.php">Home</a></li>
      <!-- <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Page 1-1</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li>
        </ul>
      </li> -->
          </ul>
    <ul class="nav navbar-nav navbar-right">
            <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>
</nav>

<div class="container"> 
		<div class="col-md-4">
			<!-- <a class="btn btn-success" href="halaman_pengguna.php">
				Home
			</a> -->
			
        </div>
        <!-- <div class="col-md-4">
			<a class="btn btn-success" href="hapus.php">
				Kembalikan Barang Semua
			</a>
			
		</div> -->
	<h3 align="center">Daftar Barang Yang Belum Dikembalikan</h3>

<div class="container">

		<table class="table">
			<thead>
				<tr>
					<th>no</th>
					<th>Kode Barang</th>
					<th> Nama Barang </th>
                    <th>Jenis Barang</th>
                    <th>Tanggal</th>
					<th>aksi</th>
				</tr>
			</thead>
			<tbody>
			
			<?php 
				$query = 'select alat.kode_barang, alat.nama_barang,alat.jenis_barang,date from alat INNER JOIN pinjam where alat.kode_barang= pinjam.kode_barang';
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
					<td> <a class="btn btn-primary" href="form_edit.php?id=<?php echo $data['id'] ?>" > Edit</a>
						 <a onclick="return confirm ('apakah yakin ?');" class="btn btn-danger" 
						 href="system/delete.php?id= <?php echo $data['id'] ?>"> Delete</a> 
					</td>
				</tr>

			<?php }

			 ?>
				
			</tbody>


		</table>

</div>
<div class="col-md-4">
			<a class="btn btn-success" href="kembalikan.php">
				Kembalikan Barang Semua
			</a>
			
		</div>
</div>


</body>
</html>