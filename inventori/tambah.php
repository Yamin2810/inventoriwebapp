<?php 
include 'database.php';
//nampung inputan judul

$kode_barang = $_POST['kode_barang'];

$nama_barang = $_POST['nama_barang'];

$jenis_barang = $_POST['jenis_barang'];



$query ="insert into alat values ('','$kode_barang', '$nama_barang', '$jenis_barang')";
$result = mysqli_query($connection, $query);

if ($result) {
	header("location: halaman_admin.php");
} else {
	printf(mysqli_error($connection));
	echo "Gagal Insert Data";
}

 ?>