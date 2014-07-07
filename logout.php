<?php 

session_start();

//need to unset the cookie because it will be destroyed in session_destroy

$expire = time()-86400;
setcookie('testsite', $_SESSION['name'], $expire);

session_destroy();

echo "Session destroyed!";
header("Refresh:3; url=home.php");


?>