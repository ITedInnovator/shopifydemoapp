<?php
/* This function determines a redirect to a different url as a string of its filename.
The default page is index.php.*/
function redirect_user($page = 'index.php'){
	//server and directory
	$url = dirname($_SERVER['PHP_SELF']);
	//remove ending slashes before appending the page filename
	$url = rtrim($url, "\//");
	$url .= '/' . $page;
	//function to redirect the user.
	header("Location: $url");
	exit();
}

