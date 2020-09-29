<?php

include "../koneksidatabase.php";

$sql = mysqli_query($conn, "SELECT * FROM upload_tugas,data_mahasiswa WHERE data_mahasiswa.NRP=upload_tugas.NRP;");

$NRP = $_POST['NRP'];
$Tugas = $_POST['tugas'];
$matkul = $_POST['matkul'];


if($_FILES['file']['error']==0){
	$foto = $_FILES['file']['name'];
	$temp_foto = $_FILES['file']['tmp_name'];
	$filebaru = date ('dmYHis-').$foto;
	$path = "../File/".$filebaru;

	if (move_uploaded_file($temp_foto, $path)){
		$sql = "INSERT INTO upload_tugas(NRP,Tugas, Mata_Kuliah, File_Tugas) 
		VALUES ( '$NRP','$Tugas', '$matkul', '$filebaru');";

		$query =mysqli_query($conn,$sql);

		if($query){
			header('Location:index.php?page=tampil_tugas');
		}else{
			echo "<script>alert('Data Gagal Ditambahkan');dokument.location.href='index.php?page=tampil_tugas'</script>";
			echo "Error : ".$query.mysqli_error($conn);
		}
	}else{
		echo "<script>alert('Foto Gagal Diupload');dokument.location.href='index.php?page=tampil_tugas'</script>";
	}
}else{
	$sql =  "INSERT INTO upload_tugas(NRP,Tugas, Mata_Kuliah, File_Tugas) 
		VALUES ( '$NRP','$Tugas', '$matkul', '$filebaru');";



	$query =mysqli_query($conn,$sql);

	if($query){
		header('Location:index.php?page=tampil_tugas');
	}else{
		echo "<script>alert('Data Gagal Ditambahkan');dokument.location.href='index.php?page=tampil_tugas'</script>";
	}

}


?>