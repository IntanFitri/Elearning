	<br>
	<a href ="?page=insertmhs">Tambah Data</a>
	
	 <table border="1" width = '100%' class="table-bordered">
	 	<tr>
	 		<th>No</th>
	 		<th>NRP</th>
	 		<th>Nama</th>
	 		<th>Jenis Kelamin</th>
	 		<th>Alamat</th>
	 		<th>Nomor</th>
	 		<th>Umur</th>
	 		<th colspan="2" align="center">OPSI </th>
	 	</tr>

	 	<?php 
	 		include '../koneksidatabase.php';

	 		$nomor=1;

	 		$sql = mysqli_query($conn, "SELECT * FROM data_mahasiswa");

	 		while ($row=mysqli_fetch_assoc($sql)){
	 	?>
	 	<tr>
	 		<td><?php echo $nomor;?></td>
	 		<td><?php echo $row['NRP'];?></td>
	 		<td><?php echo $row['Nama_Mahasiswa'];?></td>
	 		<td><?php echo $row['Jenis_kelamin'];?></td>
	 		<td><?php echo $row['Alamat'];?></td>
	 		<td><?php echo $row['No_Telepon'];?></td>
	 		<td><?php echo $row['Umur'];?></td>
	 		<td><a href="?page=editmhs&id=<?php echo $row['id_mhs']?>">EDIT</a></td>
	 		<td><a href="form_hapus.php?id=<?php echo $row['id_mhs']?>">HAPUS</a></td>
	 	</tr>
	 		<?php $nomor++;} ?>
	 		
	 
	 </table>
	 	