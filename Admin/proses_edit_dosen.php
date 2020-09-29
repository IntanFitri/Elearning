<?php

include "../koneksidatabase.php";

$id = $_POST['id'];
$NIP = $_POST['NIP'];
$nama = $_POST['name'];
$jns = $_POST['jns'];
$alamat = $_POST['alamat'];
$nomor = $_POST['nomor'];


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

		$sql = "UPDATE  data_dosen SET NIP='$NIP',Nama_Dosen = '$nama' , Jenis_Kelamin = '$jns', Alamat = '$alamat', Nomor ='$nomor', Gambar='$path'
			WHERE id_dosen='$id';";

		$query =mysqli_query($conn, $sql);

		if($query){
			header('Location:index.php?page=tampil_dosen');
		}else{
			echo "<script>alert('Data Gagal Ditambahkan');dokument.location.href='index.php?page=tampil_dosen'</script>";
		}
	}else{
		echo "<script>alert('Foto Gagal Diupload');dokument.location.href='index.php?page=tampil_dosen'</script>";
	}
}else{
	$sql = "UPDATE  data_dosen SET NIP='$NIP',Nama_Dosen = '$nama' , Jenis_Kelamin = '$jns', Alamat = '$alamat', Nomor ='$nomor'
		WHERE id_dosen='$id';";

	$query =mysqli_query($conn,$sql);

	if($query){
		header('Location:index.php?page=tampil_dosen');
	}else{
		echo "<script>alert('Data Gagal Ditambahkan');dokument.location.href='index.php?page=tampil_dosen'</script>";
		echo "Gagal : ".$sql.mysqli_error($conn);
	}

}


?>