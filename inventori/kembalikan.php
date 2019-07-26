<?php 
include 'database.php';
// sql to delete a record
$sql = "delete from pinjam ";

if ($connection->query($sql) === TRUE) {
    header("location:halaman_pengguna.php");
} else {
    echo "Error deleting record: " . $connection->error;
}