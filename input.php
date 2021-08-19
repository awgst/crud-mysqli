<!DOCTYPE html>
<html>
<head>
	<title>Input</title>
</head>
<body>
	<?php
	include "koneksi.php";
	$nama = $_POST['nama'];
	$nim = $_POST['nim'];
	$alamat = $_POST['alamat'];
	$jk = $_POST['jk'];
	$agama = $_POST['agama'];
	$sql="INSERT INTO data (nama,nim,alamat,jenkel,agama) VALUES ('$nama', '$nim', '$alamat', '$jk', '$agama')";
	$result=mysqli_query($conn, $sql);
	header("Refresh:0; hasil.php");
	mysqli_close($conn);
	?>
</body>
</html>
