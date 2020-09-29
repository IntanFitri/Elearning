<!DOCTYPE html>
<html>
<head>
	<title></title>
		<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
     
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="tampil2.php">Update Data Mahasiswa</a></li>
     
    </ul>
    <ul class="nav navbar-nav navbar-right">
      
    </ul>
  </div>
</nav>
</head>
<body>
	<form action="proses_insert.php" method="POST" enctype="multipart/form-data">
		<input type="file" name="gambar" id="gambar"> 
		<p>NRP : </p>
		<input type="text" name="nrp">
		<p>Nama : </p>
		<input type="text" name="name">
		<p>Jenis Kelamin : </p>
		<input type="text" name="jns">
		<p>Alamat : </p>
		<input type="text" name="alamat">
		<p>Nomor : </p>
		<input type="text" name="nomor" maxlength="13">
		<p>Umur : </p>
		<input type="text" name="umur">

		<br>
		<br>
		<input type="submit" name="submit" value="Tambah Data">

	</form>




</body>
</html>