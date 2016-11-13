<?php
$page_title = "register";
$scripts = "<link rel='stylesheet' type='text/css' href='../css/styles.css'></>";
require "header.php";
print 
"<h1>Register an Account</h1><form action='regloginhandle.php' method='post' class='form'>
<h2>Enter email</h2><input type='email' name='emailreg' class='form-input'></>
<h2>Select a password</h2><input type='password' name='passwordreg' class='form-input'></>
<input type='submit' value='submit'></>
<input type='hidden' name='register'></>
</form>
</body>";

