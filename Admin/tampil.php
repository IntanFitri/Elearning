	<br>
	<a href ="?page=insertmhs">Tambah Data</a>
	
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
	 		<td><a href="delete.php?id=<?php echo $row['id_mhs']?>">HAPUS</a></td>
	 	</tr>
	 		<?php $nomor++;} ?>
	 		
	 
	 </table>
	 	