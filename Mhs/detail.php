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


	<?php
		include '../koneksidatabase.php';

		$id=$_GET['id'];
		
		$sql = mysqli_query($conn, "SELECT * FROM data_mahasiswa WHERE id_mhs = $id");

		$row=mysqli_fetch_assoc($sql);
		$gambar = substr($row['Gambar'],3);
		//echo $gambar;
	?>
<div class="container" align="center">
	<form action="proses_edit.php" method="POST" style="border-style: solid;">
		<img src="<?php echo "../".$gambar  ?>" width = 100>
		<?php //echo $gambar;?>
		<input type="hidden" name="id" value="<?php echo $id//$data['id_mhs']; ?>">
		<p>Nama : </p>
		<input type="text" name="name" value="<?php echo $row['Nama_Mahasiswa'] ?>" disable >
		<p>Jenis Kelamin : </p>
		<input type="text" name="jns" value="<?php echo $row['Jenis_kelamin'] ?>" disable>
		<p>Alamat : </p>
		<input type="text" name="alamat" value="<?php echo $row['Alamat'] ?>">
		<p>Nomor : </p>
		<input type="text" name="nomor" maxlength="13" value="<?php echo $row['No_Telepon'] ?>" disable >
		<p>Umur : </p>
		<input type="text" name="umur" value="<?php echo $row['Umur'] ?>" disable>

		<br>
		<br>
		<a href="?page=Tampil_Mahasiswa"><button type ="button" class "btn_kembali">KEMBALI <span class ="fa fa-close"></span> </button></a>

	</form>
</div>


</body>
</html>