<?php

	include 'dbconnect.php';

?>


<!DOCTYPE html>
<html>
<head>
	<title>Register</title>

<link rel="stylesheet" type="text/css" href="../css/style.css">


  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

	<script type="text/javascript" src="../js/script.js"></script>
</head>

<body class="register_class bg-light">


<div class="container-sm p-0 bg-white" id="register_container">
	<form action="user_registration.php" method="POST">

	  <div class="p-3 mb-2 bg-warning text-dark">Register</div>
	  <div class="px-3 form-group">
	    <label for="user_fullname">Fullname</label>
	    <input type="user_fullname" name="user_fullname" class="form-control" id="username" placeholder="Enter Fullname">
	    <label for="username" class="mt-2">Username</label>
	    <input type="username" name="username" class="form-control" id="user_name" placeholder="Enter Username">
	  </div>
	  <div class="px-3 form-group">
	    <label for="user_password">Password</label>
	    <input type="password" name="password" class="form-control" id="user_password" placeholder="Password">

	    <label for="con_password" class="mt-2">Confirm Password</label>
	    <input type="password" name="con_password" class="form-control" id="con_password" placeholder="Confirm Password">
	  </div>
	  <button class="btn btn-success ml-3" name="Register">Register</button>
	  <p class="font-italic mt-2 ml-3">Do you have an account ? <a id="signin_text" href="login.php">Sign in</a></p>
<?php
	$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

	if(strpos($fullUrl, "Empty=") == true){
		echo "<p class=\"bg-danger text-light text-center py-2 mt-2 border border-dark\">You did not fill all fields!<p>";
	}else if(strpos($fullUrl, "NotMatch=") == true){
		echo "<p class=\"bg-danger text-light text-center py-2 mt-2 border border-dark\">Two password did not match!<p>";
	}else if(strpos($fullUrl, "AlreadyExist=") == true){
		echo "<p class=\"bg-danger text-light text-center py-2 mt-2 border border-dark\">Username already exist!<p>";
	}else if(strpos($fullUrl, "Registered=") == true){
		echo "<p class=\"text-dark text-center py-2 mt-2 border border-dark\" id=\"account_created\" >You have created an acccount. Try logging in!<p>";
	}
?>
	</div>
	</form>
</div>

</body>
</html>
