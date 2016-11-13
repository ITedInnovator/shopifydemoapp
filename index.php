<?php
$page_title = "Welcome to the shopify demo app login page.";
$scripts = "<link rel='stylesheet' type='text/css' href='../css/styles.css'></>";
require 'header.php';
if(isset($_SESSION['userid'])){
	redirect_user('product_form.php');
}
else{
	$register = "<a href='register.php' id='register-link'>Sign Up</a>";
}
?>
<h1>Log In</h1>
<form class="form" action="regloginhandle.php" method="post">
<h2>Enter Email</h2>
<input type="email" name="email" class="form-input"></>
<h2>Enter Password</h2>
<input type="password" name="password" class="form-input"></>
<input type="submit" name="submit" value="login" id="form-login"></> 
<input type="hidden" name="login"></>
</form>
<?php print $register; ?>
</body>