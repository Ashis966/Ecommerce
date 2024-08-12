<?php 
	date_default_timezone_set('Asia/Kolkata');
	$server = 'localhost';
	$user = 'root';
	$password = '';
	$database = 'ecommerce';
	global $db;
	$db = new mysqli($server,$user,$password,$database,3308);
	if (!empty($db->connect_errno)) {
	  echo "Failed to connect to MySQL: " . $db->connect_error;
	  exit();
	}
?>