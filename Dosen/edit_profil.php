<?php 

include '../koneksidatabase.php';

$id= $_POST['id'];

$id = $_POST['id'];
$NIP = $_POST['NIP'];
$nama = $_POST['name'];
$jns = $_POST['jns'];
$alamat = $_POST['alamat'];
$nomor = $_POST['nomor'];
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
		$sql = "UPDATE  data_dosen SET NIP='$NIP',Nama_Dosen = '$nama' , Jenis_Kelamin = '$jns', Alamat = '$alamat', Nomor ='$nomor', Gambar='$path'
			WHERE id_dosen='$id';";

		$query1 = mysqli_query($conn, $sql);

		$sql2 =  "UPDATE  data_dosen SET NIP='$NIP',Nama_Dosen = '$nama' , Jenis_Kelamin = '$jns', Alamat = '$alamat', Nomor ='$nomor', Gambar='$path'
			WHERE id_dosen='$id';";
		$query2 = mysqli_query($conn, $sql);

		if ($query){
			// echo "<script>alert('Data Berhasil di Update);document.location.href='tampil.php'</script>";
			header('Location:index.php?page=Tampil_Dosen');
		}else {
			//echo "<script>alert('Data Gagal di Update');document.location.href='tampil.php</script>";
			echo "GAGAL : " . mysqli_error ($conn);
		}
	}else{
		echo "<script>alert('Foto Gagal Diupload');dokument.location.href='index.php?page=Tampil_Dosen'</script>";
	}
}else{

	$sql = "UPDATE  data_dosen SET NIP='$NIP',Nama_Dosen = '$nama' , Jenis_Kelamin = '$jns', Alamat = '$alamat', Nomor ='$nomor', Gambar='$path'
			WHERE id_dosen='$id';";


	$query = mysqli_query($conn, $sql);

	if ($query){
		// echo "<script>alert('Data Berhasil di Update);document.location.href='tampil.php'</script>";
		header('Location:index.php?page=Tampil_Dosen');
	}else {
		//echo "<script>alert('Data Gagal di Update');document.location.href='tampil.php</script>";
		echo "GAGAL : " . mysqli_error ($conn);
	}
}
//mysqli_close($conn)
?>