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
      <li class="active"><a href="tampil2.php">Edit Data Mahasiswa</a></li>
     
    </ul>
    <ul class="nav navbar-nav navbar-right">
      
    </ul>
  </div>
</nav>

	<?php
		include 'koneksidatabase.php';

		$id=$_GET['id'];
		
		$sql = mysqli_query($conn, "SELECT * FROM data_mahasiswa WHERE id_mhs = $id");

		$row=mysqli_fetch_assoc($sql);
	?>

<div class="container" align="center">
	<form action="proses_edit.php" method="POST" >

		<img src="<?php echo $row['Gambar'];  ?>" width = 60>
		<input type="hidden" name="id" value="<?php echo $id//$data['id_mhs']; ?>">
		<p>Nama : </p>
		<input type="text" name="name" value="<?php echo $row['Nama_Mahasiswa'] ?>">
		<p>Jenis Kelamin : </p>
		<input type="text" name="jns" value="<?php echo $row['Jenis_kelamin'] ?>">
		<p>Alamat : </p>
		<input type="text" name="alamat" value="<?php echo $row['Alamat'] ?>">
		<p>Nomor : </p>
		<input type="text" name="nomor" maxlength="13" value="<?php echo $row['No_Telepon'] ?>">
		<p>Umur : </p>
		<input type="text" name="umur" value="<?php echo $row['Umur'] ?>">

		<br>
		<br>
		<input type="submit" name="submit" value="Kembali">

	</form>
</div>

</body>
</html>