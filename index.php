<?php 

include 'koneksi.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="indexstyle.css">
</head>
<body>
	<div class="awal">
	<h2 class="hehe">Selamat Datang, <?php echo
	$_SESSION['username']; ?> (<?php echo
	$_SESSION['role']; ?>)</h2>
	<p class="pepe">Klik disini untuk <a href="logout.php">Log Out</a></p>
</div>
</body>
</html>