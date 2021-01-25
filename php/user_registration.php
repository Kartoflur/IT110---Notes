<?php

 require_once('dbconnect.php');

 if(isset($_POST['Register'])){

 	if(empty($_POST['username']) || empty($_POST['password']) || empty($_POST['con_password'])){

 		header("location:register.php?Empty= Please fill in the blank field");

 	}else{

 		$tempo_username = $_POST['username'];

 		$stmt = $con->prepare("SELECT username FROM user WHERE username = ?");
        $stmt->bind_param('s', $tempo_username);
        $stmt->execute();
        $stmt->bind_result($tempo_username);
        $stmt->store_result();

 		if($stmt->num_rows == 1){
            while($stmt->fetch()){
                if($tempo_username == $_POST['username']){

 					header("location:register.php?AlreadyExist= Username already exist");
            		exit();
            	}
            }
        }

            if($_POST['password'] != $_POST['con_password']){

 				header("location:register.php?NotMatch= Two password do not match");

 			}else{



     			$fullname =  mysqli_real_escape_string($con,$_POST['user_fullname']);
    		 	$username =  mysqli_real_escape_string($con,$_POST['username']);
    		 	$password =  mysqli_real_escape_string($con,$_POST['password']);
    		 	$confirm_pass =  mysqli_real_escape_string($con,$_POST['con_password']);

    	 		$password = password_hash($password, PASSWORD_BCRYPT);  //why not use PASSWORD_DEFAULT?
    	 		$sql = "INSERT INTO user (fullname,username,password) VALUES('$fullname','$username','$password')" ;
    	 		mysqli_query($con,$sql);

					header("location:register.php?Registered= Account created");

 			}

 	}

 }else{
 	$stmt->close();
 }



?>
