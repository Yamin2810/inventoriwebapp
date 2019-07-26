<?php 
include 'database.php';
// sql to delete a record
$sql = "delete from alat ";

if ($connection->query($sql) === TRUE) {
    header("location:halaman_admin.php");
} else {
    echo "Error deleting record: " . $connection->error;
}