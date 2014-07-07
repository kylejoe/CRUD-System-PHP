<html>
<head>
	<title>Edit Page</title>
</head>
<body>

	<h3>Edit User: <?php echo base64_decode($_REQUEST['names']); ?></h3>
		<form ENCTYPE="multipart/form-data" method="post" action="change.php">
			<table border="1" width="60%">
				<tr><td width="30%">Name: </td><td><input type="text" name="newname" value="<?php echo base64_decode($_REQUEST['names']);?>"></td></tr>
				<tr><td width="30%">Email: </td><td><input type="text" name="newemail" value="<?php echo base64_decode($_REQUEST['emails']);?>"></td></tr>
				<tr><td width="30%">New Password: </td><td><input type="text" name="newpassword" value=""></td></tr>
			</table>

			Change Picture: <input type='file' name='newupload'/><br>

			<input type="submit" name='submit' value="Save & Update" />
			<input type='hidden' name="id" value="<?php echo base64_decode($_REQUEST['ids']); ?>"> 
		</form>


</body>
</html>

<?php include("links.php"); ?>