<?php
session_start();
//Validate the Product form data.
$vendor = $_POST['vendor'];
$title = $_POST['title'];
$product_type = $_POST['prodtype'];
//include the code to make the API request to add a product.
require __DIR__ . '/create_product.php';


$name = $_FILES['file']['name'];
$tmp_name = $_FILES['file']['tmp_name'];
$size = $_FILES['file']['size'];
$type = $_FILES['file']['type'];
$location = 'Uploads/';
$path = $location . $name;
$file_type = pathinfo($path, PATHINFO_EXTENSION);

//define('JPG','jpg');
//define('PNG', 'png');
//define('JPEG', 'jpeg');
$extension = strtolower(substr($name, strpos($name,'.' )+1));
if(isset($name) && !empty($name)){
	if($extension == 'jpg' || $extension == 'png'){
		if($size <= 16777216){		
			if(move_uploaded_file($tmp_name, $location.$name)){
				print "Image uploaded!";
				$data = file_get_contents($path);
				$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
				//include the code to post the image to the API.
				require __DIR__ . '/add_productimage.php';
			}
			else{
				print "Image was not able to be uploaded.<br>" .
				$_FILES['file']['error'];	
			}
			echo "<br>" . $tmp_name;
		}
		else{
			print "File must be less than 2 MB! Sorry for any inconvenience.";
		}
	}
	else{
		print "Invalid file type uploaded. Please ensure your image is in jpg or png format.";
	}
}
else{
	print "Please add a file";
}