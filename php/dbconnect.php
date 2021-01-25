<?php
	$dsn = "mysql:host=localhost;dbname=notes_db";					//remember to edit this part out because we use different database names
	$user = "root";
	$password = "";

	$con = mysqli_connect('localhost','root','','notes_db');

	$pdo = new PDO($dsn, $user, $password);

	if(!$pdo){
		echo "Failed to connect to our mySQL database";
		exit();
	}else if(!$con){
		die('Please check your connection'.mysqli_error());
	}
?>
