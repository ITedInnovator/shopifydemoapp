<?php
session_start();
require_once '../src/init.php';
$page_title = 'product_form';
$scripts =  "<script src='../js/dropzone.js'></script>
  <script src='//cdn.tinymce.com/4/tinymce.min.js'></script>
  <script>tinymce.init({ selector:'textarea' });</script>";
require 'header.php';

print "<form action='handle.php' class='dropzone' method='post' enctype='multipart/form-data'>
<input type='text' name='title'>Title</>
<input type='text' name='vendor' maxlength=200>Vendor</>
<input type='text' name='prodtype' maxlength=200>Product Type</>
<input type='file' name='file' enctype='multipart/form-data'>Product Image</>
<textarea name='body'>Easy! You should check out MoxieManager!</textarea>
<input type='submit' name='submit' value='Add Product'></>
</body>
</html>";