<!DOCTYPE html>
<html>
<head>
	<title>Data Siswa</title>
</head>

<body>
	<center><h1>Data Mahasiswa</h1></center>

	<table style="margin:30px auto;" border="2">
		<tr>
			<th>ID</th>
			<th>Nama</th>
			<th>Jenis Kelamin</th>
			<th>Agama</th>
			<th>Alamat</th>
			<th>Telepon</th>
			<th colspan="2">Action</th>
		</tr>

		<?php
		$ID = 1; 
		foreach ($mahasiswatabel as $a) {	
		?>

		<tr>
			<td><?php echo $ID++ ?></td>
			<td><?php echo $a->nama ?></td>
			<td><?php echo $a->jk ?></td>
			<td><?php echo $a->agama ?></td>
			<td><?php echo $a->alamat ?></td>
			<td><?php echo $a->tlp ?></td>
			<td>
				<?php echo anchor('edit_file/'.$a->ID,'Edit'); ?>
			</td>
			<td>
				<?php echo anchor('hapus_file/'.$a->ID,'Hapus'); ?>
			</td>
		</tr>

	<?php } ?>
	</table>

</body>
</html>