<?php 

include '../koneksidatabase.php';

$id= $_POST['id'];

$NIP = $_POST['NIP'];
$Nama = $_POST['name'];
$JenisKelamin = $_POST['jns'];
$Alamat = $_POST['alamat'];
$Nomor = $_POST['nomor'];

if($_FILES['gambar']['error']==0){
	$foto = $_FILES['gambar']['name'];
	$temp_foto = $_FILES['gambar']['tmp_name'];
	$fotobaru = date ('dmYHis-').$foto;
	$path = "../Foto/".$fotobaru;

	if (move_uploaded_file($temp_foto, $path)){
		$query_cek_foto =mysqli_query($conn, "SELECT * FROM data_dosen WHERE id_dosen = $id");
		$data = mysqli_fetch_array($query_cek_foto);
		if(is_file( "../Foto/". $data['Gambar'])){
			unlink("../Foto/". $data['Gambar']);
		}
		$sql = "UPDATE `data_mahasiswa` SET `NIP`= '$NIP', `Nama_Dosen` = '$Nama', `Jenis_Kelamin` = '$JenisKelamin', `Alamat` = '$Alamat', `Nomor` = '$Nomor', Gambar='$path' WHERE `data_dosen`.`id_dosen` = $id;";  

		$query = mysqli_query($conn, $sql);

		if ($query){
			// echo "<script>alert('Data Berhasil di Update);document.location.href='tampil.php'</script>";
			header('Location:index.php?page=Tampil_Mahasiswa');
		}else {
			//echo "<script>alert('Data Gagal di Update');document.location.href='tampil.php</script>";
			echo "GAGAL : " . mysqli_error ($conn);
		}
	}else{
		echo "<script>alert('Foto Gagal Diupload');dokument.location.href='index.php?page=Tampil_Mahasiswa'</script>";
	}
}else{

$sql = "UPDATE `data_mahasiswa` SET `NIP`= '$NIP', `Nama_Dosen` = '$Nama', `Jenis_Kelamin` = '$JenisKelamin', `Alamat` = '$Alamat', `Nomor` = '$Nomor', Gambar='$path' WHERE `data_dosen`.`id_dosen` = $id;";  

$query = mysqli_query($conn, $sql);

if ($query){
	// echo "<script>alert('Data Berhasil di Update);document.location.href='tampil.php'</script>";
	header('Location:index.php?page=Tampil_Mahasiswa');
}else {
	//echo "<script>alert('Data Gagal di Update');document.location.href='tampil.php</script>";
	echo "GAGAL : " . mysqli_error ($conn);
}
}
//mysqli_close($conn)
?>