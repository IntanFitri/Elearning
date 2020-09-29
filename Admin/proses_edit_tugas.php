<?php 

include '../koneksidatabase.php';

$id= $_POST['id'];

$NIP = $_POST['NIP'];
$Matkul= $_POST['Matkul'];
$Tugas = $_POST['tugas'];
$File = $_POST['file'];

if($_FILES['gambar']['error']==0){
	$foto = $_FILES['gambar']['name'];
	$temp_foto = $_FILES['gambar']['tmp_name'];
	$fotobaru = date ('dmYHis-').$foto;
	$path = "../Foto/".$fotobaru;

	if (move_uploaded_file($temp_foto, $path)){
		$query_cek_foto =mysqli_query($conn, "SELECT * FROM tambah_tugas WHERE id_tugas = $id");
		$data = mysqli_fetch_array($query_cek_foto);
		if(is_file( "../Foto/". $data['Gambar'])){
			unlink("../Foto/". $data['Gambar']);
		}
		$sql = "UPDATE `tambah_tugas` SET `NIP`= '$NIP', `Tugas` = '$Tugas', `Mata_Kuliah` = '$Matkul', `File_tugas` = '$File',  
		WHERE `tambah_tugas`.`id_tugas` = $id;";  

		$query = mysqli_query($conn, $sql);

		if ($query){
			// echo "<script>alert('Data Berhasil di Update);document.location.href='tampil.php'</script>";
			header('Location:index.php?page=tampil_tugas');
		}else {
			//echo "<script>alert('Data Gagal di Update');document.location.href='tampil.php</script>";
			echo "GAGAL : " . mysqli_error ($conn);
		}
	}else{
		echo "<script>alert('Foto Gagal Diupload');dokument.location.href='index.php?page=tambah_tugas'</script>";
	}
}else{

$sql = "UPDATE `tambah_tugas` SET `NIP`= '$NIP', `Tugas` = '$Tugas', `Mata_Kuliah` = '$Matkul', `File_tugas` = '$File',  
		WHERE `tambah_tugas`.`id_tugas` = $id;"; 

$query = mysqli_query($conn, $sql);

if ($query){
	// echo "<script>alert('Data Berhasil di Update);document.location.href='tampil.php'</script>";
	header('Location:index.php?page=tampil_tugas');
}else {
	//echo "<script>alert('Data Gagal di Update');document.location.href='tampil.php</script>";
	echo "GAGAL : " . mysqli_error ($conn);
}
}
//mysqli_close($conn)
?>