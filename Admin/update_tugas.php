<?php

include "../koneksidatabase.php";

$sql = mysqli_query($conn, "SELECT * FROM tambah_tugas,data_dosen WHERE data_dosen.NIP=tambah_tugas.NIP;");

$Nomor = $_POST['Nomor'];
$NIP = $_POST['NIP'];
$Tugas = $_POST['tugas'];
$matkul = $_POST['matkul'];


if($_FILES['file']['error']==0){
	$foto = $_FILES['file']['name'];
	$temp_foto = $_FILES['file']['tmp_name'];
	$filebaru = date ('dmYHis-').$foto;
	$path = "../File/".$filebaru;

	if (move_uploaded_file($temp_foto, $path)){
		$sql = "INSERT INTO tambah_tugas(Nomor,NIP,Tugas, Mata_Kuliah, File_Tugas) 
		VALUES ('$Nomor', '$NIP','$Tugas', '$matkul', '$filebaru');";

		$query =mysqli_query($conn,$sql);

		if($query){
			header('Location:index.php?page=tampil_tugas');
		}else{
			echo "<script>alert('Data Gagal Ditambahkan');dokument.location.href='index.php?page=tampil_tugas'</script>";
		}
	}else{
		echo "<script>alert('Foto Gagal Diupload');dokument.location.href='index.php?page=tampil_tugas'</script>";
	}
}else{
	$sql =  "INSERT INTO tambah_tugas(Nomor,NIP,Tugas, Mata_Kuliah, File_Tugas) 
		VALUES ('$Nomor', '$NIP','$Tugas', '$matkul', '$filebaru' );";


	$query =mysqli_query($conn,$sql);

	if($query){
		header('Location:index.php?page=tampil_tugas');
	}else{
		echo "<script>alert('Data Gagal Ditambahkan');dokument.location.href='index.php?page=tampil_tugas'</script>";
	}

}


?>