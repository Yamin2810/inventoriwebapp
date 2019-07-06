<?php 
include 'database.php';
//nampung inputan judul

$barang= $_POST['barang'];

$username= $_POST['username'];




$query = "insert into pinjam values ('','$username', '$barang',NOW());";
$query .= "insert into history values ('','$username', '$barang',NOW());";
//if ($result) {
	/* execute multi query */
	if ($connection->multi_query($query)) {
		do {
			/* store first result set */
			if ($result = $connection->store_result()) {
				while ($row = $result->fetch_row()) {
					printf("%s\n", $row[0]);
				}
				$result->free();
			}
			/* print divider */
			if ($connection->more_results()) {
				header("location:halaman_pengguna.php");
			}
		} while ($connection->next_result());
	}

	// if($connection->multi_query($query) === TRUE){
	// header("location: halaman_pengguna.php");
	// }else {
	// 	echo "Error: " . $query . "<br>" . $connection->error;
	// }

 ?>