<?php
   require_once("database.php");
   $username = $_POST['username'];
   $pass = $_POST['password'];
   $prodi = $_POST['prodi'];
   $email = $_POST['email'];
   $sql = "SELECT * FROM user WHERE username = '$username'";
   $query = $connection->query($sql);
   if($query->num_rows != 0) {
     echo "<div align='center'>Username Sudah Terdaftar! <a href='daftar.php'>Back</a></div>";
   } else {
     if(!$username || !$pass) {
       echo "<div align='center'>Masih ada data yang kosong! <a href='daftar.php'>Back</a>";
     } else {
       $data = "INSERT INTO user (username, password,prodi,email,level) VALUES ('$username', '$pass','$prodi','$email','pengguna')";
       $simpan = $connection->query($data);
       if($simpan) {
         echo "<div align='center'>Pendaftaran Sukses, Silahkan <a href='index.php'>Login</a></div>";
       } else {
         echo "<div align='center'>Proses Gagal!</div>";
       }
     }
   }
?>