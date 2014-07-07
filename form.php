<html>
<head>
	<title>Form</title>
</head>
<body>

	<h2>Register Form</h2>

	<form ENCTYPE="multipart/form-data" method="post" action="insert.php">

		<table border="0" width="60%">
			<tr><td width="10%">Name: </td><td><input type="text" name="name" maxlength="15"/></td></tr><br>
			<tr><td width="10%">Email: </td><td><input type="text" name="email" maxlength="30"/></td></tr><br>
			<tr><td width="10%">Password: </td><td><input type="password" name="password" maxlength="15"/></td></tr><br>
			<tr><td width="10%">Confirm Password: </td><td><input type="password" name="cpassword" maxlength="15"/></td></tr><br>
			<input type="hidden" name="MAX_FILE_SIZE" value="20000">
		</table>

		Choose your picture:<input type="file" name="upload"><br><br>
		<input type="submit" value="Register"><br>

	</form>


</body>
</html>