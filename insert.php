<?php 

$mypic = $_FILES['upload']['name'];
$temp = $_FILES['upload']['tmp_name'];
$type = $_FILES['upload']['type'];

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];


//if there is a value in all three fields
if ($name && $email && $password && $cpassword) 
{
	if (preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email))
	{
		if (strlen($password) > 3) 
		{

		if ($password == $cpassword)
		{
					
			//connects to database;
			//if php cant connect to server will give error
			mysql_connect("localhost", "root", "") or die("Could not connect to server");

			//select which database
			mysql_select_db("testsite");

			$username = mysql_query("SELECT name FROM users WHERE name = '$name' ");
			
			//will return 1 or 0
			// 1 equals that there is a user with that name in database
			// 0 user not in database
			$count = mysql_num_rows($username);
			$remail = mysql_query("SELECT email FROM users WHERE email = '$email' ");
			$checkemail = mysql_num_rows($remail);


			if ($checkemail != 0) 
			{
				echo "This email is already registered please type another email";
			}
			else
			{
				if ($count != 0)
				{
					echo "This name is already registered! and please type another name";					
				}
			else
			{
				if(($type=="image/jpeg") || ($type=="image/jpg") || ($type=="image/bmp")) 
				{

					$directory = "./profiles/$name/images/";
					mkdir($directory, 0777, true);

					move_uploaded_file($temp,"profiles/$name/images/$mypic");
					echo "This will be your profile picture!<br><img border='1' width='100' heigth='100' src='profiles/$name/images/$mypic'/>";
				
					//ecryption
					$passwordmd5 = md5($password);
					//run a query
					mysql_query("INSERT INTO users(name, email, password) VALUES('$name', '$email', '$passwordmd5')");
					echo "<br> You have successfully registered!<a href='home.php'>Login now!</a>";
				}
				else
				{
					echo "Your picture is not in the correct format must be jpeg,jpg, or bmp!";
				}
			}
		}

	}
			else
			{
					echo "Your passwords do not match!";
			}
		}
		else
		{
			echo "Your password is too short! You need to type a password between 4 and 15 characters";
		}

		}
		else
		{
			echo "Please type a valid email";
		}
	}
		else
		{
			echo "You have to complete the form";
		}
	

?>
