<?php 

include '../koneksidatabase.php';

$id= $_POST['id'];

$NRP = $_POST['nrp'];
$Nama = $_POST['name'];
$JenisKelamin = $_POST['jns'];
$Alamat = $_POST['alamat'];
$Nomor = $_POST['nomor'];
$Umur = $_POST['umur'];
$Username = $_POST['username'];
$Pwd = $Pwd['pwd'];

if($_FILES['gambar']['error']==0){
	$foto = $_FILES['gambar']['name'];
	$temp_foto = $_FILES['gambar']['tmp_name'];
	$fotobaru = date ('dmYHis-').$foto;
	$path = "../Foto/".$fotobaru;

	if (move_uploaded_file($temp_foto, $path)){
		$query_cek_foto =mysqli_query($conn, "SELECT * FROM data_mahasiswa WHERE id_mhs = $id");
		$data = mysqli_fetch_array($query_cek_foto);
		if(is_file( "../Foto/". $data['Gambar'])){
			unlink("../Foto/". $data['Gambar']);
		}
		$sql = "UPDATE `data_mahasiswa` SET `NRP`= '$NRP', `Nama_Mahasiswa` = '$Nama', `Jenis_kelamin` = '$JenisKelamin', `Alamat` = '$Alamat', `No_Telepon` = '$Nomor', `Umur` = '$Umur' , Gambar='$path' , 'Username'= '$Username', 'Password'= '$Pwd' WHERE`data_mahasiswa`.`id_mhs` = $id;";  


		$query1 = mysqli_query($conn, $sql);

		$sql2 = "UPDATE `tb_aut_user` SET `NRP`= '$NRP', `Nama_Mahasiswa` = '$Nama', `Jenis_kelamin` = '$JenisKelamin', `Alamat` = '$Alamat', `No_Telepon` = '$Nomor', `Umur` = '$Umur' , Gambar='$path', 'Username'= '$Username', 'Password'= '$Pwd' WHERE `data_mahasiswa`.`id_mhs` = $id;";  
		$query2 = mysqli_query($conn, $sql);

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

$sql = "UPDATE `data_mahasiswa` SET `Nama_Mahasiswa` = '$Nama', `Jenis_kelamin` = '$JenisKelamin', `Alamat` = '$Alamat', `No_Telepon` = '$Nomor', `Umur` = '$Umur' WHERE `data_mahasiswa`.`id_mhs` = $id;";  

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