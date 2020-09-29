<?php

include '../koneksidatabase.php';
$id_upload = $_GET['id'];

$sql = "DELETE FROM upload_tugas WHERE id_upload = '$id_upload'";

if(mysqli_query($conn, $sql)){
	//echo "Data Terhapus";
	header('Location:index.php?page=daftar_pengumpulan_tugas');
}else {
	echo "Gagal, Error" . mysqli_error($conn);
}

mysqli_close($conn);

?>
