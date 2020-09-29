<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form method="POST" action="proseslogin.php" >
	<table border="0" cellspacing "0" cellpadding="5" >
	<tr>
		<td colspan="2">
			<h2>FORM LOGIN</h2>
		</td>
	</tr>
	<tr>
		<td>
			<p>Username : </p>
		</td> 
		<td>
			<input type="text" name="username" required>
		</td>
	</tr>
	<tr>
		<td>
			<p>Password : </p>
		</td> 
		<td>
			<input type="password" name="password" required>
		</td>
	</tr>
		<td colspan="2" align="center">
				<button type="submit" name ="login">LOGIN</button>
				<button type="reset" name ="reset">RESET</button>
			
		</td>
</body>
</html>