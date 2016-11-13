<?php
// Include the header with a dynamic header said by each page
print"
<!DOCTYPE html> 
<head>
<title>$page_title</title>
$scripts
</head>
<body>";

//include redirection function and redirect to the login page if a session is not set.
$session_required = array('login' => true,'product_form' => true,'handleproduct' => true,);
 
include 'redirect.php';
if(isset($session_required[$page_title])){
	if(!isset($_SESSION['user_id'])){
		redirect_user();
	}
	else{
	print "<a href='logout.php'>Log Out</a>";
	print "Hello " . $_SESSION['user_id'];
	}
}