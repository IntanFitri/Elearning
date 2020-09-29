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
      <li class="active"><a href="?page=Tampil_Mahasiswa">Tugas Mahasiswa</a></li>
     
      
    </ul>
  </div>
</nav>
	<br>
	<br>
	<br>
	<br>
	<div class="container" align="center">
		<?php 
			session_start();
			$username = $_SESSION['username'];
			//echo "$username";
		?>
	<form action="upload_tugas.php" method="POST" style="border-style: solid;" enctype="multipart/form-data">
		<input type="file" name="file" id="gambar"> 
		<p>NRP Mahasiswa : </p>
		<input type="text" name="NRP" value="<?php echo $username;?>" readonly>
		<p>Tugas : </p>
		<input type="text" name="tugas">
		<p>Mata Kuliah : </p>
		<input type="text" name="matkul" maxlength="50">

		<br>
		<br>
		<input type="submit" name="submit" value="Tambah Tugas">

	</form>
</div>


