<?php

 require_once('dbconnect.php');
 session_start();


 if(isset($_POST['SignIn'])){

 	$user_name = $_POST['username'];
	$user_password =$_POST['password'];

 	if(empty($_POST['username']) || empty($_POST['password'])){

 		header("location:login.php?Empty= Please fill in the blank field");

 	}else{

 		$stmt = $con->prepare("SELECT id , password FROM user WHERE username = ?");
        $stmt->bind_param('s', $user_name);
        $stmt->execute();
        $stmt->bind_result($user_id,$hashed_pass);
        $stmt->store_result();

 		if($stmt->num_rows == 1){
            while($stmt->fetch()){
                if(password_verify($_POST['password'],$hashed_pass)){
                        $_SESSION['user_id'] = $user_id;
                        $_SESSION['User'] = $_POST['username'];
                        header("location: ../index.php");
                }
        		else{
                    header("location:login.php?InvalidPassword= Please enter correct password");
                }
            }
        }else{
            header("location:login.php?InvalidUsername= Please enter correct username"); 
        }
 	}
 }else{

 	$stmt->close();

 }

?>
