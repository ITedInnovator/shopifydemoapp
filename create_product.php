<?php

	require '../vendor/autoload.php';
	use phpish\shopify;

	require '../conf.php';
	//require __DIR__.'/handle.php';

	$shopify = shopify\client(SHOPIFY_SHOP, SHOPIFY_APP_API_KEY, SHOPIFY_APP_PASSWORD, true);

	try
	{
		# Making an API request can throw an exception
		$product = $shopify('POST /admin/products.json', array(), array
		(
			'product' => array
			(
				"title" => $title,
				"body_html" => $body,
				"vendor" => $vendor,
				"product_type" => $product_type,
				"variants" => array
				(
					array
					(
						"option1" => "First",
						"price" => "10.00",
						"sku" => 123,
					),
					array (
						"option1" => "Second",
						"price" => "20.00",
						"sku" => "123"
					)
				)
			)
		));

		print_r($product);
	}
	catch (shopify\ApiException $e)
	{
		# HTTP status code was >= 400 or response contained the key 'errors'
		echo $e;
		print_r($e->getRequest());
		print_r($e->getResponse());
	}
	catch (shopify\CurlException $e)
	{
		# cURL error
		echo $e;
		print_r($e->getRequest());
		print_r($e->getResponse());
	}
