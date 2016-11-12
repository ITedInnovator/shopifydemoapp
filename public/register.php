<?php
$page_title = "register";
require "header.php";
print 
"<form action='regloginhandle.php' method='post'>
<input type='email' name='emailreg'>Enter email</>
<input type='password' name='passwordreg'>Select a password</>
<input type='submit' value='submit'></>
<input type='hidden' name='register'></>
</form>
</body>";

