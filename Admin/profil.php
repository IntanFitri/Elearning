
	<?php
		include '../koneksidatabase.php';

		//$id=$_GET['id'];
		
		$username =  $_SESSION['username'];
		$sql = mysqli_query($conn, "SELECT * FROM data_mahasiswa WHERE  username = '$username'");

		$row=mysqli_fetch_assoc($sql);
		
	?>
	
<div id="section1" class="container-fluid">
  <h1>Selamat Datang di Halaman Admin</h1>
</div>
