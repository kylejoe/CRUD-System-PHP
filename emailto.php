
<form method="post" action="">

	<table border="1" width="25%">
		<tr><td width="10">To: </td><td><input type="text" name="to" size="20" value="<?php echo $_REQUEST['emails'];?>"></td></tr>
		<tr><td width="10">Subject: </td><td><input type="text" name="subject" size="20" ></td></tr>		
		<tr><td width="10">Message: </td><td><textarea name="message" cols="30" rows="3"></textarea></td></tr>
	</table>

	<p><input type="submit" name="submit" value="Send Email"></p>

</form>

<?php 
	
	//isset if button is clicked
	if(isset($_REQUEST['submit']))
	{
		$to = $_REQUEST['to'];
		$subject = $_REQUEST['subject'];
		$body = $_REQUEST['message'];
		$from = "admin@gmail.com";
		$headers = "From: $from";

		if($to && $subject && $body) 
		{
			mail($to, $subject, $body, $headers);
			echo "your email has been sent!";
			header("Refresh:3; url=update.php");
		}
		else
		{
			echo "Please fill up all fields!";
		}
	}




?> 