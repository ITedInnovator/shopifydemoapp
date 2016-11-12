<?php
session_start();
$page_title = 'Logged Out';
$scripts = '';
require 'header.php';
print "<h1>You have successfully logged out!</h1>
</body>";
while(isset($_SESSION['user_id'])){
	$_SESSION = array();
	session_destroy();
	setcookie('PHPSESSID', '', time()-3600, '/', '', o, o);
}
redirect_user();
/*if(!isset($_SESSION['user_id'])){
	//require 'redirect.php';
	redirect_user();
}
else{
	
}*/


?>

