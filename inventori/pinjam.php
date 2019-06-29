<?php 
include 'database.php';
//nampung inputan judul

$barang= $_POST['barang'];

$username= $_POST['username'];




$query ="insert into pinjam values ('','$username', '$barang')";
$result = mysqli_query($connection, $query);

if ($result) {
	header("location: halaman_pengguna.php");
} else {
	printf(mysqli_error($connection));
	echo "Gagal Insert Data";
}

 ?>