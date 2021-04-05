<!DOCTYPE html>
<html>
<head>
	<title>Ubah Data Mahasiswa</title>
</head>

<body>
	<center><h1>Ubah Data Mahasiswa</h1></center>
	<?php foreach($mahasiswatabel as $a){ ?>
		<form action="<?php echo base_url(). 'index.php/mahasiswa/update'; ?>" method="post">
			<!-- ndah nama fungsinya update ajaya, 
				btw ini mahasiswa nama file controllernya kan? !-->

			<center>
			<table border="2">
				<tr>
					<th>ID: </th>
					<td><input type="text" name="id" value="<?php echo $a->id ?>"></td>
				</tr>

				<tr>
					<th>Nama: </th>
					<td><input type="text" name="nama" value="<?php echo $a->nama ?>"></td>
				</tr>

				<!-- <tr>
					 <th>Jenis Kelamin: </th>
					<td><input type="text" name="Jenis_Kelamin" value="<?php echo $a->Jenis_Kelamin?>"></td>
				</tr> !
 -->
				<th>Jenis Kelamin: </th>
				<th><input type="radio" name="jk" value="Laki-laki">Laki-Laki</th>
				<th><input type="radio" name="jk" value="Perempuan">Perempuan</th>


				<tr>
					<th>Agama: </th>
					<td><input type="text" name="agama" value="<?php echo $a->agama?>"></td>
				</tr>

				<tr>
					<th>Alamat: </th>
					<td><input type="text" name="alamat" value="<?php echo $a->alamat?>"></td>
				</tr>
				<tr>
					<th>Nomor Telepon: </th>
					<td><input type="text" name="tlp" value="<?php echo $a->tlp?>"></td>
				</tr>
			</table>
			</center>

			<br>
			<center>
			<input type="submit" name="Save">
			</center>
		</form>
	<?php } ?>

</body>
</html>