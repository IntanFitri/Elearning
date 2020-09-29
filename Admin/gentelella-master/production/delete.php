<?php

include '../koneksidatabase.php';

$sql = "DELETE FROM data_mahasiswa WHERE id_mhs = 1";

if(mysqli_query($conn, $sql)){
	//echo "Data Terhapus";
	header('Location:index.php?page=Tampil_Mahasiswa');
}else {
	echo "Gagal, Error" . mysqli_error($conn);
}

mysqli_close($conn);

?>
