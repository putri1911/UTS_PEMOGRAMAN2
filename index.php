<?php include "session.php" ?>
<!doctype html>
	<html>
	<head>
		<title> </title>
</head>
<body>
	<h2> Dashboard Penjualan</h2>
	 <br>
	 <br>
	 <br>
	 <a href="tampil_profil.php"> profil barang</a>
	 <br>
	 <br>
	<strong><?php echo $_SESSION['username']; ?></strong>
	<h3><?php echo @$_GET['pesan']?></h3>
</body>
</html>