<?php

include "../koneksidatabase.php";

$NIP = $_POST['NIP'];
$nama = $_POST['name'];
$jns = $_POST['jns'];
$alamat = $_POST['alamat'];
$nomor = $_POST['nomor'];


if(isset($_FILES['gambar']['name'])){
	$foto = $_FILES['gambar']['name'];
	$temp_foto = $_FILES['gambar']['tmp_name'];
	$fotobaru = date ('dmYHis-').$foto;
	$path = "../Foto/".$fotobaru;

	if (move_uploaded_file($temp_foto, $path)){
		$sql = "INSERT INTO data_dosen(NIP,Nama_Dosen, Jenis_Kelamin, Alamat, Nomor, Gambar) 
		VALUES ('$NIP','$nama', '$jns', '$alamat', '$nomor', '$path');";

		$query =mysqli_query($conn,$sql);

		if($query){
			header('Location:index.php?page=tampil_dosen');
		}else{
			echo "<script>alert('Data Gagal Ditambahkan');dokument.location.href='index.php?page=tampil_dosen'</script>";
		}
	}else{
		echo "<script>alert('Foto Gagal Diupload');dokument.location.href='index.php?page=tampil_dosen'</script>";
	}
}else{
	$sql = "INSERT INTO data_dosen(NIP,Nama_Dosen, Jenis_Kelamin, Alamat, Nomor, Gambar) 
		VALUES ('$NIP','$nama', '$jns', '$alamat', '$nomor', '$path');";

	$query =mysqli_query($conn,$sql);

	if($query){
		header('Location:index.php?page=tampil_dosen');
	}else{
		echo "<script>alert('Data Gagal Ditambahkan');dokument.location.href='index.php?page=tampil_dosen'</script>";
	}

}


?>