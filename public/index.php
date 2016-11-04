<?php
require_once '../src/init.php';

$app = new App();
$app->parseUrl();
/*$url = $_GET['url'];

print $url;*/
?>
<!DOCTYPE html>
<html>
<head>
  <script src="../js/dropzone.js"></script>
  <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
</head>
<body>
  

<form action="handle.php" class="dropzone" method="post" enctype="multipart/form-data">
<input type="text" name="title">Title</>
<input type="textarea"  size="250">Body</>
<input type="text" name="vendor" maxlength=200>Vendor</>
<input type="text" name="prodtype" maxlength=200>Product Type</>
<input type="file" name="image" enctype="multipart/form-data">Product Image</>
<textarea>Easy! You should check out MoxieManager!</textarea>
<input type="submit" name="submit" value="Add Product"></>
</body>
</html>