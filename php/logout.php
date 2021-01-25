<?php

	session_start();
	if(isset($_POST['Signout'])){
		session_destroy();
		header("location:login.php");
	}

?>
