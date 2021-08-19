<?php
	include "koneksi.php";
	$nimnnya=$_GET['nim'];
	$sql="UPDATE data SET nama='$nama', nim='$nimnnya', alamat='$alamat', jenkel='$jk', agama='$agama' WHERE nim='$nim'";
	$result=mysqli_query($conn, $sql);
	if($result){
		header("Refresh:0; hasil.php");
	}
	else{
		echo "Gagal Edit";
	}
?>