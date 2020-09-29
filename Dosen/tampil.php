

	<br>
	
	 <table border="1" width = '100%' class="table-bordered">
	 	<tr>
	 		<th>No</th>
	 		<th>NIP</th>
	 		<th>Nama</th>
	 		<th>Mata Kuliah</th>
	 		<th>Jenis Kelamin</th>
	 		<th>Alamat</th>
	 		<th>Nomor</th>
	 		<th colspan="2" align="center">OPSI </th>
	 	</tr>

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
	 		<td><?php echo $row['Mata_Kuliah'];?></td>
	 		<td><?php echo $row['Jenis_Kelamin'];?></td>
	 		<td><?php echo $row['Alamat'];?></td>
	 		<td><?php echo $row['Nomor'];?></td>
	 		<td><a href="?page=detail&id=<?php echo $row['id_dosen']?>">Detail</a></td>
	 		
	 	</tr>
	 		<?php $nomor++;} ?>
	 		
	 
	 </table>
	 	


</body>
</html>

