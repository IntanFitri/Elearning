
	<?php
		include '../koneksidatabase.php';

		$id=$_GET['id'];
		
		$sql = mysqli_query($conn, "SELECT * FROM tambah_data WHERE id_tugas = $id");

		$row=mysqli_fetch_assoc($sql);
	?>

<div class="container" align="center">
	<form action="proses_edit_tugas.php" method="POST" enctype="multipart/form-data">

		<img src="<?php echo $row['Gambar'];  ?>" width = 100>
		<input type="hidden" name="id" value="<?php echo $id//$data['id_mhs']; ?>">
		<p>NIP : </p>
		<input type="text" name="nrp" value="<?php echo $row['NIP'] ?>">
		<p>Tugas : </p>
		<input type="text" name="jns" value="<?php echo $row['Tugas'] ?>">
		<p>Mata Kuliah : </p>
		<input type="text" name="alamat" value="<?php echo $row['Mata_Kuliah'] ?>">
		<p>File Tugas : </p>
		<input type="text" name="nomor" maxlength="13" value="<?php echo $row['File_Tugas'] ?>">
		<br>
		<br>


		<input type="file" name="gambar" id="gambar"> 
		<br>
		<br>
		<!-- <button type="submit" name="submit" value="ED"></button> -->
		<br>
		<br>
		<input type="submit" name="submit" value="Edit">
		<br>
		<br>
		<a href="?page=tambah_tugas"><button>Kembali</button></a>

	</form>
</div>
