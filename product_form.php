<?php
session_start();
$page_title = 'product_form';
$scripts =  "<script src='../js/dropzone.js'></script>
  <script src='//cdn.tinymce.com/4/tinymce.min.js'></script>
  <script>tinymce.init({ selector:'textarea' });</script>
  <link rel='stylesheet' type='text/css' href='../css/styles.css'></>";
require 'header.php';

print "<h1>Add a New Product</h1><form action='handle.php' class='dropzone' method='post' enctype='multipart/form-data'>
<h2>Title</h2><input type='text' name='title' class='form-input'></>
<h2>Vendor</h2><input type='text' name='vendor' maxlength=200 class='form-input'></>
<h2>Product Type</h2><input type='text' name='prodtype' maxlength=200 class='form-input'></>
<h2>Product Image</h2><input type='file' name='file' enctype='multipart/form-data' class='upload-area'></>
<h2>Description</h2><textarea name='body' class='wysiwyg'>Easy! You should check out MoxieManager!</textarea>
<input type='submit' name='submit' value='Add Product' class='submit-button'></></form>
</body>
</html>";