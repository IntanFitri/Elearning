	<br>
	<a href ="?page=insertdosen">Tambah Data</a>
	
	 <table border="1" width = '100%' class="table table-bordered">
	 	<thead class="thead-dark">
	 		<tr>
	 		<th scope="col">No</th>
	 		<th scope="col">NIP</th>
	 		<th scope="col">Nama</th>
	 		<th scope="col">Jenis Kelamin</th>
	 		<th scope="col">Alamat</th>
	 		<th scope="col">Nomor</th>
	 		<th colspan="2" align="center">OPSI </th>
	 	</tr>
	 	</thead>
	 	

	 	<?php 
	 		include '../koneksidatabase.php';

	 		$nomor=1;

	 		$sql = mysqli_query($conn, "SELECT * FROM data_dosen ORDER BY NIP asc;");

	 		while ($row=mysqli_fetch_assoc($sql)){
	 	?>
	 	<tr>
	 		<td><?php echo $nomor;?></td>
	 		<td><?php echo $row['NIP'];?></td>
	 		<td><?php echo $row['Nama_Dosen'];?></td>
	 		<td><?php echo $row['Jenis_Kelamin'];?></td>
	 		<td><?php echo $row['Alamat'];?></td>
	 		<td><?php echo $row['Nomor'];?></td>
	 		<td><a href="?page=editdosen&id=<?php echo $row['id_dosen']?>">EDIT</a></td>
	 		<td><a href="delete_dosen.php?id=<?php echo $row['id_dosen']?>">HAPUS</a></td>
	 	</tr>
	 		<?php $nomor++;} ?>
	 		
	 
	 </table>
	 	