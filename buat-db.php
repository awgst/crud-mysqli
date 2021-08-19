<?php
	$koneksi = new mysqli('localhost', 'root', '') or die("Error");
	
	$sql = "CREATE DATABASE formpw";
	if($koneksi->query($sql) === TRUE){
		echo "Database berhasil dibuat";
	}
	else{
		echo "Error";
	}
?>