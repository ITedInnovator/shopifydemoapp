<?php
//require 'header.php';
require 'redirect.php';
if(isset($_SESSION['userid'])){
	redirect_user('product_form.php');
}
else{
	$register = "<a href=register.php>Sign Up</a>";
}
?>
<!DOCTYPE html>
<head>
<title>Welcome to the shopify demo app login page.</title>
</head>
<body>
<form class="form" action="regloginhandle.php" method="post">
<input type="email" name="email">enter email</>
<input type="password" name="password">Enter Password</>
<input type="submit" name="submit" value="login" id="login"></> 
<input type="hidden" name="login"></>
</form>
<?php print $register; ?>
</body>