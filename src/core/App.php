<?php
class App{
	
protected $controller = 'home';
protected $method = 'index';
protected $params = [];
	public function __construct(){
		echo "<p>Welcome to the Products Page</p>";
	}
	
	public function parseUrl(){
		if(isset ($_GET['url'])){
			print $_GET['url'];
		}
	}
}