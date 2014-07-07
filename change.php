<?php 

session_start();
//makes request from edit page

if (isset($_POST['submit']))
{

	$mypic = $_FILES['newupload']['name'];
	$temp = $_FILES['newupload']['tmp_name'];
	$type = $_FILES['newupload']['type'];
	

	$id = $_REQUEST['id'];
	$newname = $_REQUEST['newname'];
	$newemail = $_REQUEST['newemail'];
	$newpassword = $_REQUEST['newpassword'];

	if ($newname && $newemail && $newpassword) 
	{
		if (preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$newemail))
		{

			if (($type == "image/jpeg") || ($type == "image/jpg") || ($type == "image/bmp"))
			{
				
				if (strlen($newpassword) > 4) 
				{	
					mysql_connect("localhost", "root", "") or die("Problems with connection");
					mysql_select_db("testsite");
					//change values that are connected with that ID
					mysql_query("UPDATE users SET name = '$newname', email = '$newemail' WHERE id = '$id' ");
					$md5 = md5($newpassword);
					mysql_query("UPDATE users SET password='$md5' WHERE id='$id'");

				if (($type == "image/jpeg") || ($type == "image/jpg") || ($type == "image/bmp"))
				{

				
				//if the present name and the name being updated dont match

					$dir = "profiles/".$_SESSION['name']."/images";
					$files = 0;
					$handle = opendir($dir);

					while(($file = readdir($handle)) != FALSE)
					{
						if ($file != "." && $file != ".." && $file != "Thumbs.db") 
						{
							// built in function to delete files or directories
							unlink($dir."/".$file);
							$files++;
						}
					}

					closedir($handle);
					sleep(1);
					rename("profiles/".$_SESSION['name']."", "profiles/$newname");
					move_uploaded_file($temp, "profiles/$newname/images/$mypic");
					echo "Your values have been updated successfully!";
					header("Refresh:2; url=logout.php");
					


			}
			else
			{
				echo "Please load a valid jpeg, jpg, or bmp file!<br>";
			}

		}
		else
		{
			echo "The password needs to be larger than 4 characters!";
		}

		}
		else
		{
			echo "Please type a valid email!";
		}

	}
	else
	{
		echo "Please complete the form!";
	}

}

}

else{

	echo "Not Allowed!";

}

?>