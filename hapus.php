<?php
	include "koneksi.php";
	$nimnya=$_GET['nim'];
	$sql="DELETE FROM DATA WHERE nim=$nimnya";
	$result=mysqli_query($conn, $sql);
	if($result){
		header("Refresh:0; hasil.php");
	}
	else{
		echo "gagal hapus";
	}
?>