<br>
	
	<table border="1" width = '100%' class="table table-bordered">
	 	<thead class="thead-dark">
	 		<tr>
	 		<th scope="col">Nomor</th>
	 		<th scope="col">Nama Mahasiswa</th>
	 		<th scope="col">Tugas</th>
	 		<th scope="col">Mata Kuliah</th>
	 		<th scope="col">File</th>
	 		<th scope="col">Nilai</th>
	 		<th colspan="1" align="center">OPSI </th>
	 	
	 	</tr>
	 	</tr>
	 	</thead>
	 	

	 	<?php 
	 		include '../koneksidatabase.php';

	 		$nomor=1;
	 		$id_tugas = 

	 	$sql = mysqli_query($conn, "SELECT * FROM upload_tugas,data_mahasiswa WHERE data_mahasiswa.NRP=upload_tugas.NRP;");
	 		while ($row=mysqli_fetch_assoc($sql)){
	 	?>
	 	<tr>
	 		<td><?php echo $nomor;?></td>
	 		<td><?php echo $row['Nama_Mahasiswa'];?></td>
	 		<td><?php echo $row['Tugas'];?></td>
	 		<td><?php echo $row['Mata_Kuliah'];?></td>
	 		<td><?php echo $row['File_Tugas'];?></td>
	 		<td><?php echo $row['Nilai'];?></td>
	 		<td><a href="delete_tugas.php?id=<?php echo $row['id_upload']?>">Delete</a></td>
	 	
	 		
	 	</tr>
	 		<?php $nomor++;} ?>
	 		
	 
	 </table>
	 	