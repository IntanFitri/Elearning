
  <?php
		include '../koneksidatabase.php';

		//$id=$_GET['id'];
		
		$username =  $_SESSION['username'];
		$sql = mysqli_query($conn, "SELECT * FROM data_dosen WHERE  username = '$username'");

		$row=mysqli_fetch_assoc($sql);
	?>

<div class="container" align="center">
	<form action="#" method="POST" style="border-style: solid;">

		<img src="<?php echo $row['Gambar'];  ?>" width = 100 alt ='gambar'>
		<input type="hidden" name="id" value="<?php echo $id ?>">
		<p>NIP : </p>
		<input type="text" name="NIP" value="<?php echo $row['NIP'] ?>">
		<p>Nama : </p>
		<input type="text" name="name" value="<?php echo $row['Nama_Dosen'] ?>">
		<p>Mata Kuliah : </p>
		<input type="text" name="name" value="<?php echo $row['Mata_Kuliah'] ?>" disable >
		<p>Jenis Kelamin : </p>
		<input type="text" name="jns" value="<?php echo $row['Jenis_Kelamin'] ?>">
		<p>Alamat : </p>
		<input type="text" name="alamat" value="<?php echo $row['Alamat'] ?>">
		<p>Nomor : </p>
		<input type="text" name="nomor" maxlength="13" value="<?php echo $row['Nomor'] ?>">
		<br><br>


		<br>
		<br>
		<!-- <a href="?page=Tampil_Mahasiswa"><button>Kembali</button></a> -->
	
		<a href="?page=Tampil_Dosen"><button type ="button" class "btn_kembali">KEMBALI <span class ="fa fa-close"></span> </button></a>

</div>
