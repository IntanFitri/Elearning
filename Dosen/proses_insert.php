<?php

include "koneksidatabase.php";

$nama = $_POST['name'];
$jns = $_POST['jns'];
$alamat = $_POST['alamat'];
$nomor = $_POST['nomor'];
$umur = $_POST['umur'];

if(isset($_FILES['gambar']['name'])){
	$foto = $_FILES['gambar']['name'];
	$temp_foto = $_FILES['gambar']['tmp_name'];
	$fotobaru = date ('dmYHis-').$foto;
	$path = "Foto/".$fotobaru;

	if (move_uploaded_file($temp_foto, $path)){
		$sql = "INSERT INTO data_mahasiswa(Nama_Mahasiswa, Jenis_Kelamin, Alamat, No_Telepon, Umur, Gambar) 
		VALUES ('$nama', '$jns', '$alamat', '$nomor', $umur, '$path');";

		$query =mysqli_query($conn,$sql);

		if($query){
			header('Location:tampil.php');
		}else{
			echo "<script>alert('Data Gagal Ditambahkan');dokument.location.href='tampil.php'</script>";
		}
	}else{
		echo "<script>alert('Foto Gagal Diupload');dokument.location.href='tampil.php'</script>";
	}
}else{
	$sql = "INSERT INTO data_mahasiswa(Nama_Mahasiswa, Jenis_Kelamin, Alamat, No_Telepon, Umur) 
		VALUES ('$nama', '$jns', '$alamat', '$nomor', $umur);";

	$query =mysqli_query($conn,$sql);

	if($query){
		header('Location:tampil.php');
	}else{
		echo "<script>alert('Data Gagal Ditambahkan');dokument.location.href='tampil.php'</script>";
	}

}


?>