<?php 

mysql_connect("localhost","root","") or die("Problem with connection");
mysql_select_db("testsite");


$per_page = 6;

// will count every id in the table users
//make sure no space after COUNT
$pages_query = mysql_query("SELECT COUNT('id') FROM users");
// the 0 means the first row in the array
// divide by variable to get that number of results per page
// CEIL will round to the nearest whole number always rounding up
// FLOOR will round down
$pages = ceil(mysql_result($pages_query, 0) / $per_page);

$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
$start = ($page - 1) * $per_page;
$query = mysql_query("SELECT name FROM users LIMIT $start, $per_page");


// this will get all the names in an array
while($query_row = mysql_fetch_assoc($query))
{
	echo $query_row['name'] .'<br>';
}

$prev = $page - 1;
$next = $page + 1;


if(!($page <= 1))
{
	echo "<a href='pagination.php?page=$prev'>Prev</a> ";
}
if($pages >= 1)
{
	for($x = 1; $x <= $pages; $x++)
	{
		// ( ) ? : quick if and else statement
		echo ($x == $page) ? '<b><a href="?page='.$x.'">'.$x.'</a></b> ': '<a href="?page='.$x.'">'.$x.'</a> ';
	}
}

if (!($page >= $pages)) 
{
	echo "<a href='pagination.php?page=$next'>Next</a> ";
}

?>