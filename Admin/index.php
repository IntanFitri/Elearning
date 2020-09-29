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
      <li class="active"><a href="?page=Tampil_Mahasiswa">Data Mahasiswa</a></li>
      <ul class="nav navbar-nav navbar-right">

      <li class=""><a href="?page=tampil_dosen">Data Dosen</a></li>
      <ul class="nav navbar-nav navbar-right">

      <li class=""><a href="?page=tampil_tugas">Daftar Tugas</a></li>
      <ul class="nav navbar-nav navbar-right">

      <li class=""><a href="?page=daftar_pengumpulan_tugas">Daftar Pengumpul Tugas</a></li>
      <ul class="nav navbar-nav navbar-right">

      <li><a href="?page=profile"> Selamat Datang, <?php echo $_SESSION['username']; ?></a></li>
      <li><a href="../logout.php"><span class="glyphicon glyphicon-log-in"></span> Log Out</a></li>
    </ul>
     
    </ul>
    <ul class="nav navbar-nav navbar-right">
      
    </ul>
  </div>
</nav>

	<br>
	<?php

	if (isset($_GET['page'])){
		switch ($_GET['page']) {
			case 'Tampil_Mahasiswa':
				include 'tampil.php';
				break;
			case 'insertmhs':
				include 'form_insert.php';
				break;
			case 'editmhs':
				include 'form_edit.php';
				break;
			case 'profile':
				include 'profil.php';
				break;
			case 'delete':
				include'delete.php';
				break;
			case 'tampil_dosen':
				include 'tampil.dosen.php';
				break;
			case 'editdosen':
				include 'form_edit_dosen.php';
				break;
			case 'insertdosen':
				include'form_insert_dosen.php';
				break;
			case 'tampil_tugas':
				include 'tampil_tugas.php';
				break;
			case 'delete_tugas_dosen':
				include 'delete_tugas_dosen.php';
				break;	
			case 'inserttugas':
				include 'form_tugas.php';
				break;
			case 'form_edit_tugas':
				include'form_edit_tugas.php';
				break;
			case 'delete_tugas':
				include 'delete_tugas.php';
				break;
			case 'updatetugas':
				include 'update_tugas.php';
				break;
			case 'daftar_tugas':
				include 'update_tugas.php';
				break;
			case 'daftar_pengumpulan_tugas':
				include 'pengumpul_tugas.php';
				break;
			
			default:
				# code...
				break;
		}

	}

	?>
</body>
</html>