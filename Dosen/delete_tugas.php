<?php

include '../koneksidatabase.php';
$id_tugas = $_GET['id'];
$sql = "DELETE FROM tambah_tugas WHERE id_tugas = '$id_tugas'";

if(mysqli_query($conn, $sql)){
	//echo "Data Terhapus";
	header('Location:index.php?page=tampil_tugas');
}else {
	echo "Gagal, Error" . mysqli_error($conn);
}

mysqli_close($conn);

?>
