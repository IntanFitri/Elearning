<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "data_mhs";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn){
		die ("koneksi gagal : ". mysqli_connect_error());
	}

?>
