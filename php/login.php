<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
<link rel="stylesheet" type="text/css" href="../css/style.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

	<script type="text/javascript" src="../js/script.js"></script>

</head>
<body class="login_class bg-light">


<div class="container-sm p-0 bg-white" id="login_container">
	<form action="user_logged_in.php" method="POST">

	  <div class="p-3 mb-2 bg-success text-light">Sign in</div>
	  <div class="px-3 form-group">
	    <label for="user_name">Username</label>
	    <input type="username" name="username" class="form-control" id="user_name" placeholder="Enter Username">
	  </div>
	  <div class="px-3 form-group">
	    <label for="user_password">Password</label>
	    <input type="password" name="password" class="form-control" id="user_password" placeholder="Password">
	    <small class="form-text text-muted">We'll never share your Password with anyone else.</small>
	  </div>
	  <button type="submit"class="btn btn-success pull-right mr-3" name="SignIn" id="Signin_btn">Sign in</button>
	  <p class="font-italic pull-left ml-3 mt-2">Don't have an account? <a href="register.php">Register here!</a></p>
	  <br>
	  <br>
	</form>
<?php
	$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

	if(strpos($fullUrl, "Empty=") == true){
		echo "<p class=\"bg-danger text-light text-center py-2 mt-2 border border-dark\">You did not fill all fields!<p>";
	}else if(strpos($fullUrl, "InvalidUsername=") == true){
		echo "<p class=\"bg-danger text-light text-center py-2 mt-2 border border-dark\">Username not found!<p>";
	}else if(strpos($fullUrl, "InvalidPassword=") == true){
		echo "<p class=\"bg-danger text-light text-center py-2 mt-2 border border-dark\">Incorrect Password<p>";
	}
?>
</div>

</body>
</html>
