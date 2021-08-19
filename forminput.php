<!DOCTYPE html>
<html>
<head>
	<title>Belajar SQL</title>
	
</head>
<body>
	<form action="input.php" method="POST">
		<table>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td><input type="text" name="nim"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><textarea name="alamat"></textarea></td>
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