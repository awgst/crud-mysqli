<!DOCTYPE html>
<html>
<head>
	<title>Belajar SQL</title>
	<?php
			include "koneksi.php";
			$nim=$_GET['nim'];
			$sql="SELECT * FROM data WHERE nim='$nim'";
			$result=mysqli_query($conn,$sql);
			$data=mysqli_fetch_array($result);
	?>
</head>
<body>
	<form action="#" method="POST">
		<table>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama" value="<?php echo $data['nama']; ?>"></td>
			</tr>
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td><input type="text" name="nim"value="<?php echo $data['nim']; ?>"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><textarea name="alamat"><?php echo $data['alamat']; ?></textarea></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td><input type="radio" name="jk" value="Laki-laki">Laki-laki<br><input type="radio" name="jk" value="Perempuan">Perempuan</td>
			</tr>
			<tr>
				<td>Agama</td>
				<td>:</td>
				<td>
					<select name="agama">
					<option>Islam</option>
					<option>Kristen</option>
					<option>Katholik</option>
					<option>Hindu</option>
					<option>Budha</option>
					</select>
			</td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" value="Submit"></td>
			</tr>
		</table>
	</form>
</body>
</html>
