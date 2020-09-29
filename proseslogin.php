<?php
// 
session_start();
$User = $_POST['username'];
$Pass = $_POST['password'];

include 'koneksidatabase.php';

$query=mysqli_query($conn, "SELECT * FROM tb_aut_user WHERE User_id = '$User' AND User_password=md5('$Pass')");

$data=mysqli_fetch_array($query);


$USERNAME = $data['User_id'];
$PASSWORD = $data['User_password'];

if(mysqli_num_rows($query)==1){
	$_SESSION['user_login'] = true;
	 header("Location: tampil.php");
}else {
	echo "Username Atau Password Yang Anda Masukkan Salah";
}
?>