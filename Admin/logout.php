<?php

	session_start();
	session_destroy();
	//header('Location : Formlogin.php');
	echo "<script>document.location.href='Formlogin2.php'</script>"
?>