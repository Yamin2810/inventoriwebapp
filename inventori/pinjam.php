<?php 
include 'database.php';
//nampung inputan judul

$barang= $_POST['barang'];

$username= $_POST['username'];




$query ="insert into pinjam values ('','$username', '$barang',NOW())";
$query ="insert into history values ('','$username', '$barang',NOW())";
$result = mysqli_query($connection, $query);
//if ($result) {
	if($connection->multi_query($query)== TRUE){
	echo "New records created successfully";
	header("location: halaman_pengguna.php");
} else {
	printf(mysqli_error($connection));
	echo "Gagal Insert Data";
}

 ?>