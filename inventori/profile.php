<?php
    include  'database.php';
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title> Profile </title>
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
      <li class="active"><a href="halaman_admin.php">Home</a></li>
      <!-- <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Page 1-1</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li>
        </ul>
      </li> -->
      <li><a href="pinjam_barang.php">Pinjam barang</a></li>
      <li><a href="history.php">History</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="profile.php"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>
</nav>


<!-- profil -->
<div class="container container-fluid" id="body">
    <div class="col-md-3">
        <img id="ava" src="assets/image/user.jpg" class="img img-thumbnail">
    </div>
    <div class="col-md-3">
        <div class="biodata">
        <ul>
                <li> <h5> Nim : <?php echo $_SESSION['username']?> </h5> </li>
                <!-- <li> <h5> Prodi : <?php echo $_SESSION['prodi']?> </h5> </li> -->
    </div>
    </div>

</div>
</body>
</html>