<?php
// 
session_start();
$User = $_POST['username'];
$Pass = $_POST['password'];

include 'koneksidatabase.php';

$query=mysqli_query($conn, "SELECT * FROM tb_aut_user WHERE User_id = '$User' AND User_password = '$Pass'");

$data=mysqli_fetch_array($query);


$USERNAME = $data['User_id'];
$PASSWORD = $data['User_password'];
$role = $data['role'];

if(mysqli_num_rows($query)==1){
	$_SESSION['role']=$role;
	$_SESSION['username']=$USERNAME; 

	$_SESSION['user_login'] = true;
	if ($role==1) {
		header("Location: Admin");
	}
	elseif ($role==2) {
		header("Location: Dosen");
	}
	elseif ($role==3) {
		header("Location: Mhs");
		
	}
}else {
	echo "Username Atau Password Yang Anda Masukkan Salah";
}
?>