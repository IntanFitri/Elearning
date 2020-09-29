<form action="" method="POST">
	<label>Nilai</label> <input type="Number" name="nilai">
	<button type="Submit" name="Simpan">Simpan</button>
</form>

<?php
	include '../koneksidatabase.php';
	$id_upload = $_GET['id'];
	if (isset($_POST['Simpan'])){
		$nilai=$_POST['nilai'];
	$sql = "UPDATE `upload_tugas` SET `Nilai`= '$nilai' WHERE `id_upload` = $id_upload;";  

		$query = mysqli_query($conn, $sql);

		if ($query){
			// echo "<script>alert('Data Berhasil di Update);document.location.href='pengumpul_tugas.php'</script>";
			header('Location:index.php?page=data_mahasiswa');
		}else {
			//echo "<script>alert('Data Gagal di Update');document.location.href='pengumpul_tugas.php</script>";
			echo "GAGAL : " . mysqli_error ($conn);
		}
	}
?>