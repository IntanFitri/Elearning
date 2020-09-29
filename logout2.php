<?php

	session_start();
	
	if(isset($_SESSION['user_login'])){
		session_unset();
	}
	session_destroy();
	echo "<script>document.location.href='Formlogin2.php'</script>"
?>ss