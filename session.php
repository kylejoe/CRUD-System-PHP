<?php 

// time counts the seconds since the first of january 1970

// F = month, d = day, Y = year, g: = hour, i a = minutes

// $date = date('F d, Y, g:i:s a');
// echo "Today is " . $date;




if (!isset($_SESSION['name']) && isset($_COOKIE['testsite'])) 
{
	//the value of the cookie is the posted name
	$_SESSION['name'] = $_COOKIE['testsite'];

	
}
	$dir = "profiles/". $_SESSION['name']."/images/";
	$open = opendir($dir);

	//If that directory exists
	while (($file = readdir($open)) != FALSE) 
	{
		if ($file != "."&&$file!=".."&&$file!="Thumbs.db")
		{
			echo "<img border='1' width='100' height='100' src='$dir/$file'><br>";
		}
	}


	echo "<b>".$_SESSION['name']. "</b>'s session<br/><a href='logout.php'>Logout</a>";

	include('links.php');



?>