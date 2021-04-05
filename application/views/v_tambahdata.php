<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>DATA MAHASISWA</title>
	<!-- <script src=”https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js”></script> -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<script type="css/style2.css"></script>
	<script type="assets/css/bootstrap.min.css"></script>
	<script src="assets/js/jquery.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>

</head>

<body>
	<style type="text/css">
		body{
  /*background-color: #F5F5DC;*/
}
table, td, th {  
  border: 0px solid #ddd;
  text-align: left;
}

table {
  border-collapse: collapse;
  /*width: 100%;*/
}

th, td {
  padding: 5px;
}
tr:hover {background-color: #f5f5f5;}

#header-nav {
  background-color: #F5F5DC;
  border-radius: 0;
  border: 0;
}

.navbar-brand {
  padding-top: 25px;
}

.navbar-brand2 {
 
  margin-top: 0;
  margin-bottom: 0;
  line-height: .75;
}

#nav-list {
  margin-top: 10px;
}

.navbar-brand h1 { /* Restaurant name */
  /*font-family: '', serif;*/
  color: #CD5C5C;
  font-size: 1.5em;
  text-transform: uppercase;
  font-weight: bold;
  text-shadow: 1px 1px 1px #222;
  margin-top: 0;
  margin-bottom: 0;
  line-height: .75;
}
.navbar-brand a:hover, .navbar-brand a:focus {
  text-decoration: none;
}
.navbar-brand p { /* Kosher cert */
  color: #000;
  text-transform: uppercase;
  font-size: .7em;
  margin-top: 15px;
}
.navbar-brand p span { /* Star-K */
  vertical-align: middle;
}

.navbar-header button.navbar-toggle, .navbar-header .icon-bar {
  border: 1px solid #61122f;
}
.navbar-header button.navbar-toggle {
  clear: both;
  margin-top: -30px;
}

@media (max-width: 479px) {
  /* Header */
  

  table {
    position: relative;
    float: left;
    width: 100%;
  }
}

</style>
	<header>
		
		<nav id="header-nav" class="navbar navbar-default">
			<div class="container">
				<div class="navbar-header">
					<!-- <a href="index.html" class="pull-left visible-md visible-lg"> -->
						<!-- <div id="logo-img" alt="Logo image"></div> -->
					<!-- </a> -->

					<div class="navbar-brand">
						<center><h1>Sistem Informasi Akademik</h1></center>

						<p>
							<!-- <img src="images/kosher.png" alt="Kosher certification">
							<span>Kosher Certified</span> -->

							
								
							
            </p>
          </div>
      </div>
  </div>
</nav>

	</header>
	<br>


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
				<th><input type="radio" name="jk" value="Laki-laki"> Laki-Laki    <input type="radio" name="jk" value="Perempuan"> Perempuan</th>
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
	<center><button type="submit" class="btn btn-primary" >Save</button></center>
	</form>

</body>
</html>