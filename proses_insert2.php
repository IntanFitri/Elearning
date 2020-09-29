<?php

include "koneksidatabase.php";

$nama = $_POST['name'];
$jns = $_POST['jns'];
$alamat = $_POST['alamat'];
$nomor = $_POST['nomor'];
$umur = $_POST['umur'];

$sql = "INSERT INTO data_mahasiswa(Nama_Mahasiswa, Jenis_Kelamin, Alamat, No_Telepon, Umur) 
		VALUES ('$nama', '$jns', '$alamat', '$nomor', $umur);";

$query =mysqli_query($conn,$sql);

if($query){
	header('Location:tampil2.php');
}else{
	echo "<script>alert('Data Gagal Ditambahkan');dokument.location.href='tampil.php'</script>";
}

?>