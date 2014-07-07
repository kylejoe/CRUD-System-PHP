<?php 

if (isset($_COOKIE['testsite'])) 
{
	header('Location: enter.php');
}
else
{
	//if user doesn't have a cookie
	echo "
	<html>
	<head>
		<title>Crud</title>
	</head>
	<body>

		<h1><center>Welcome to CRUD control Center</center></h1>

		<center>Please Login...</center>

		<center>
			<form method='post' action='login.php'>

				<table border='1' width='25%'>
					<tr><td>Name: </td><td><input type='text' name='name' maxlength='15'/></td></tr><br>
					<tr><td>Password: </td><td><input type='password' name='password' maxlength='15'/></td></tr><br>
					<tr><td>Remember Me? </td><td><input type='checkbox' name='remember' /></td></tr><br>

				</table>

				<p><input type='submit' value='Login'></p><br>

			</form>
			<a href='form.php'>Register?</a>
		</center>

	</body>
	</html>
	";
}

?>