<?php
	session_start();
	if($_SESSION['user_login'] !=1){
		echo"<script>document.location.href='FormLogin2.php'</script>";
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
     
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="tampil.php">Data Mahasiswa</a></li>
      <ul class="nav navbar-nav navbar-right">
     

      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Log Out</a></li>
    </ul>
     
    </ul>
    <ul class="nav navbar-nav navbar-right">
      
    </ul>
  </div>
</nav>

	<br>
	<a href ="form_insert.php">Tambah Data</a>
	
	 <table border="1" width = '100%' class="table-bordered">
	 	<tr>
	 		<th>No</th>
	 		<th>Nama</th>
	 		<th>Jenis Kelamin</th>
	 		<th>Alamat</th>
	 		<th>Nomor</th>
	 		<th>Umur</th>
	 		<th colspan="2" align="center">OPSI </th>
	 	</tr>

	 	<?php 
	 		include 'koneksidatabase.php';

	 		$nomor=1;

	 		$sql = mysqli_query($conn, "SELECT * FROM data_mahasiswa");

	 		while ($row=mysqli_fetch_assoc($sql)){
	 	?>
	 	<tr>
	 		<td><?php echo $nomor;?></td>
	 		<td><?php echo $row['Nama_Mahasiswa'];?></td>
	 		<td><?php echo $row['Jenis_kelamin'];?></td>
	 		<td><?php echo $row['Alamat'];?></td>
	 		<td><?php echo $row['No_Telepon'];?></td>
	 		<td><?php echo $row['Umur'];?></td>
	 		<td><a href="form_edit.php?id=<?php echo $row['id_mhs']?>">EDIT</a></td>
	 		<td><a href="form_hapus.php?id=<?php echo $row['id_mhs']?>">HAPUS</a></td>
	 	</tr>
	 		<?php $nomor++;} ?>
	 		
	 
	 </table>
	 	


</body>
</html>

