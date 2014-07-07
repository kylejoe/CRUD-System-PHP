<?php 

mysql_connect("localhost","root","") or die("Problem with connection");


mysql_select_db("testsite");


$result = mysql_query("DELETE FROM users where id = '".$_REQUEST['id']. "'");

echo "The user has been deleted successfully!";


mysql_close();

include('links.php');







?>