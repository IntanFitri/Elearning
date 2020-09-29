
	<?php
		include '../koneksidatabase.php';

		$id=$_GET['id'];
		
		$sql = mysqli_query($conn, "SELECT * FROM data_mahasiswa WHERE id_mhs = $id");

		$row=mysqli_fetch_assoc($sql);
	?>

<div class="container" align="center">
	<form action="proses_edit.php" method="POST" enctype="multipart/form-data">

		<img src="<?php echo $row['Gambar'];  ?>" width = 100>
		<input type="hidden" name="id" value="<?php echo $id//$data['id_mhs']; ?>">
		<p>Nama : </p>
		<input type="text" name="nrp" value="<?php echo $row['NRP'] ?>">
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
		<br><br>


		<input type="file" name="gambar" id="gambar"> 
		<br>
		<br>
		<!-- <button type="submit" name="submit" value="ED"></button> -->
		<br>
		<br>
		<input type="submit" name="submit" value="Edit">
		<a href="?page=Tampil_Mahasiswa"><button>Kembali</button></a>

	</form>
</div>
