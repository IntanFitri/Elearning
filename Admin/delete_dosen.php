<?php

include '../koneksidatabase.php';

$id_dosen = $_GET['id'];
$sql = "DELETE FROM data_dosen WHERE id_dosen = '$id_dosen'";

if(mysqli_query($conn, $sql)){
	//echo "Data Terhapus";
	header('Location:index.php?page=tampil_dosen');
}else {
	echo "Gagal, Error" . mysqli_error($conn);
}

mysqli_close($conn);

?>
