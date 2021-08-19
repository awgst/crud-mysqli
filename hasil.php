<!DOCTYPE html>
<html>
<head>
	<title>Hasil</title>
</head>
<body>
	<table border="1" cellpadding="5" cellspacing="0">
		<tr style="background-color: yellow;">
			<td>Nama</td>
			<td>NIM</td>
			<td>Alamat</td>
			<td>Jenis Kelamin</td>
			<td>Agama</td>
			<td>Aksi</td>
		</tr>
		<?php
			include "koneksi.php";
			$sql="SELECT * FROM data";
			$result=mysqli_query($conn,$sql);
			while ($data=mysqli_fetch_array($result)) { 
		?>
				<tr>
					<td><?php echo $data['nama'];?></td>
					<td><?php echo $data['nim'];?></td>
					<td><?php echo $data['alamat'];?></td>
					<td><?php echo $data['jenkel'];?></td>
					<td><?php echo $data['agama'];?></td>
					<td><a href="formedit.php?nim=<?php echo $data['nim'] ?>" style="padding-right: 5px;">Edit</a>|<a href="hapus.php?nim=<?php echo $data['nim'] ?>" style="padding-left: 5px;">Hapus</a></td>
				</tr>
		<?php } ?>
		
	</table>
</body>
</html>