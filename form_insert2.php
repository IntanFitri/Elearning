<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form action="proses_insert2.php" method="POST" enctype="multipart/form-data">
		<input type="file" name="gambar"> 
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