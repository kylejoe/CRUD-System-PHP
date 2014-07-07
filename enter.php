<?php 

session_start();

if (isset($_SESSION['name'])  || isset($_COOKIE['testsite'])) 
{
	//if user has a session or a cokkie they are registered
	//header or location can be used instead of include
	include('session.php');

}
else
{
	echo "Access denied!";
}




?>