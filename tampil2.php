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
      <li class="active"><a href="tampil2.php">Data Mahasiswa</a></li>
     
    </ul>
    <ul class="nav navbar-nav navbar-right">
      
    </ul>
  </div>
</nav>

	
	 <table border="1" width = '100%' class="table table-bordered">
	 	<thead class="thead-dark">
	 		<tr>
	 		<th scope="col">No</th>
	 		<th scope="col">NRP</th>
	 		<th scope="col">Nama</th>
	 		<th scope="col">Jenis Kelamin</th>
	 		<th scope="col">Alamat</th>
	 		<th scope="col">Nomor</th>
	 		<th scope="col">Umur</th>
	 		<th colspan="2" align="center">OPSI </th>
	 	</tr>
	 	</thead>
	 	

	 	<?php 
	 		include 'koneksidatabase.php';

	 		$nomor=1;

	 		$sql = mysqli_query($conn, "SELECT * FROM data_mahasiswa");

	 		while ($row=mysqli_fetch_assoc($sql)){
	 	?>
	 	<tr>
	 		<th><?php echo $nomor;?></th>
	 		<td><?php echo $row['NRP'];?></td>
	 		<th><?php echo $row['Nama_Mahasiswa'];?></th>
	 		<th><?php echo $row['Jenis_kelamin'];?></th>
	 		<th><?php echo $row['Alamat'];?></th>
	 		<th><?php echo $row['No_Telepon'];?></th>
	 		<th><?php echo $row['Umur'];?></th>
	 		<th><a href="detail.php?id=<?php echo $row['id_mhs']?>">Detail</a></th>
	 	</tr>
	 		<?php $nomor++;} ?>



	 </table>

	 	<a href="Formlogin2.php"><button type ="button" class "btn_kembali">KEMBALI <span class ="fa fa-close"></span> </button></a>
</body>
</html>
