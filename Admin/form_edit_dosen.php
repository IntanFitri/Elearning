
	<?php
		include '../koneksidatabase.php';

		$id=$_GET['id'];
		
		$sql = mysqli_query($conn, "SELECT * FROM data_dosen WHERE id_dosen = $id");

		$row=mysqli_fetch_assoc($sql);
	?>

<div class="container" align="center">
	<form action="proses_edit_dosen.php" method="POST" enctype="multipart/form-data">

		<img src="<?php echo $row['Gambar'];  ?>" width = 100 alt ='gambar'>
		<input type="hidden" name="id" value="<?php echo $id//$data['id_mhs']; ?>">
		<p>NIP : </p>
		<input type="text" name="NIP" value="<?php echo $row['NIP'] ?>">
		<p>Nama : </p>
		<input type="text" name="name" value="<?php echo $row['Nama_Dosen'] ?>">
		<p>Jenis Kelamin : </p>
		<input type="text" name="jns" value="<?php echo $row['Jenis_Kelamin'] ?>">
		<p>Alamat : </p>
		<input type="text" name="alamat" value="<?php echo $row['Alamat'] ?>">
		<p>Nomor : </p>
		<input type="text" name="nomor" maxlength="13" value="<?php echo $row['Nomor'] ?>">
		<br><br>


		<input type="file" name="gambar" id="gambar"> 
		<br>
		<br>
		<!-- <button type="submit" name="submit" value="ED"></button> -->
		<br>
		<br>
		<input type="submit" name="submit" value="Edit">
		<a href="?page=tampil_dosen"><button>Kembali</button></a>

	</form>
</div>
