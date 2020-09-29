<?php

include '../koneksidatabase.php';
$id_mhs = $_GET['id'];
$sql = "DELETE FROM data_mahasiswa WHERE id_mhs = '$id_mhs'";

if(mysqli_query($conn, $sql)){
	//echo "Data Terhapus";
	header('Location:index.php?page=Tampil_Mahasiswa');
}else {
	echo "Gagal, Error" . mysqli_error($conn);
}

mysqli_close($conn);

?>
