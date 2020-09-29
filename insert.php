<?php

include 'koneksidatabase.php';
$sql = "INSERT INTO data_mahasiswa(Nama_Mahasiswa, Jenis_Kelamin, Alamat, No_Telepon, Umur)
VALUES ('Fitri', 'Perempuan', 'Mojokerto','086577847564', 19)";

if(mysqli_query($conn, $sql)){
	echo "Data Baru Berhasil di Tambahkan";
}else 
	echo "Error : ". $sql . "<br>". mysqli_error($conn);

mysqli_close($conn);

?>