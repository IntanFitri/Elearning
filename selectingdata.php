<?php
include 'koneksidatabase.php';

$sql = "SELECT * FROM data_mahasiswa";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result)> 0) {
	while($row = mysqli_fetch_assoc($result)){
		echo "id_mhs= " . $row["id_mhs"] . "<br>";
		echo "Nama= " . $row["Nama_Mahasiswa"] . "<br>";
		echo "Jenis Kelamin = " . $row["Jenis_kelamin"] . "<br>";
		echo "Alamat= " . $row["Alamat"] . "<br>";
		echo "Nomor = " . $row["No_Telepon"] . "<br>";
		echo "Umur= " . $row["Umur"] . "<br>";
	}
}else {
	echo "0 result";
} 
mysqli_close($conn);
?>