<?php
require '../mysqli_connect.php';
if(mysqli_connect_errno($dbc)){
	print "An error connecting to the database occurred";
}
$form = '';
$verifier = '';
$email = '';
$pass = '';
$pass1 = '';
$invalli = "Invalid login details.";
$errors = array();
//validate registration form 
if(isset($_POST['register'])){
if(!isset($_POST['emailreg']) || empty($_POST['emailreg'])){
	$errors[] = "Enter a Username and Password.";
}
else if(!isset($_POST['passwordreg']) || empty($_POST['passwordreg'])){
	$errors[] = "Enter a Username and Password.";
}
else{
	$pass = md5($_POST['passwordreg']);
	$email2 = mysqli_real_escape_string($dbc,$_POST['emailreg']);
	$query = "INSERT INTO Users(email,password) VALUES('$email2','$pass')";
	$r = mysqli_query($dbc,$query);
	if($r){
	if(mysqli_affected_rows($dbc) != 1){
		$errors[] = "Query unsuccessful.";
	}
	else{ 
		print "Registration was successful";
	}
	}
	else{
		$errors[] = "Query unsuccessful 2.";
	}
}
}
else if(isset($_POST['login'])){
	
//validate login data and session
	if(!isset($_POST['email'])){
	$errors[] = $invalli . "email not set";
	}
	else if(empty($_POST['email'])){
	$errors[] = $invalli . "email empty";
	}
	else if(!isset($_POST['password'])){
	$errors[] = $invalli . "password not set";
	}
	
	else if(empty($_POST['password'])){
	$errors[] = $invalli . "password empty";
	}
	else{
	$email = mysqli_real_escape_string($dbc,$_POST['email']);
	$pass1 = mysqli_real_escape_string($dbc,md5($_POST['password']));
	}

if (isset($pass1)){
	$check_pass ="SELECT password FROM Users where email='$email'";
	$retrpass = mysqli_query($dbc,$check_pass);
	foreach(mysqli_fetch_array($retrpass,MYSQLI_NUM) as $key => $val){
		$check = $val;
	}
	if (mysqli_num_rows($retrpass) != 1){
		$errors[] = "Error invalid data.";
	}
	else if($check != $pass1){
		$errors[] = "Invalid login details 2";
	}
	else{
		session_start();
		$_SESSION['user_id'] = $email;
		$_SESSION['first_name'] = $email;
		require "redirect.php";
		redirect_user('product_form.php');
	}
}
else{
	print "Not set details.";
}
}
else{
	print "Incorrect page!";
}
foreach($errors as $key => $val){
	print $key . ":</br>" . $val;	
}

$mysqli = mysqli_error_list($dbc);
