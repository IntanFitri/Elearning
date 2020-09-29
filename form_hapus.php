<?php

include 'koneksidatabase.php';

$id=$_GET['id'];

$query=mysqli_query($conn, "DELETE FROM data_mahasiswa WHERE id_mhs='$id'");

if ($query){
	// echo "<script>alert('Data Berhasil di Hapus);document.location.href='tampil.php'</script>";
	header('Location:tampil.php');
}else {
	//echo "<script>alert('Data Gagal di Hapus');document.location.href='tampil.php</script>";
	echo "GAGAL : " . mysqli_error ($conn);
}
//mysqli_close($conn)
?>