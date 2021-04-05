<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>
</head>

<body>
	<center><h1>Tambah Data Mahasiswa</h1></center>



	<form action="<?php echo base_url(). 'index.php/Mahasiswa/tambah_aksi'; ?>" method="post">
		<!-- ndah nama fungsinya tambah ajaya, 
				btw ini mahasiswa nama file controllernya kan? !-->

		<center><br>
		<table border="2">
			
			<!-- <tr>
				<th>ID: </th>
				<td><input type="text" name="id"></td>
			</tr> -->

			<tr>
				<th>Nama: </th>
				<td><input type="text" name="nama"></td>
			</tr>

			<tr>
				<th>Jenis Kelamin: </th>
				<td><input type="text" name="jk"></td>
			</tr>

			<tr>
				<th>Agama: </th>
				<td><input type="text" name="agama"></td>
			</tr>

			<tr>
				<th>Alamat: </th>
				<td><input type="text" name="alamat"></td>
			</tr>

			<tr>
				<th>Nomor Telepon: </th>
				<td><input type="text" name="tlp"></td>
			</tr>
		</table></center>
		<br>
	<center><input type="submit" value="Save"></center>
	</form>

</body>
</html>