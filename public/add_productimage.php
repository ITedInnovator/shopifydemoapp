<?php
session_start();

	require __DIR__.'/vendor/autoload.php';
	use phpish\shopify;

	require __DIR__.'../../conf.php';
	//require __DIR__.'/handle.php';

	$shopify = shopify\client(SHOPIFY_SHOP, SHOPIFY_APP_API_KEY, SHOPIFY_APP_PASSWORD, true);

	try
	{
$loadimage = $shopify('POST /admin/products/#{id}/images.json', array(), array
(
"image" => array(
"variant_ids" = array(),
"attachment" = $base64 
"filename" = $name

)

