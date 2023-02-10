<?php

include ('db_connect.php');

if (isset($_POST['signup'])) {
  $Fullname = $_POST['Fullname'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $ConfirmPassword = $_POST['ConfirmPassword'];

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$username = validate($_POST['username']);
	$password = validate($_POST['password']);


	$ConfirmPassword = validate($_POST['ConfirmPassword']);
	$Fullname = validate($_POST['Fullname']);

	//$user_data = 'username='. $uname. '&Fullname='. $Fullname;


	if (empty($username)) {
		header("Location: user_register.php?error=User Name is required");
	    exit();
	}else if(empty($password)){
        header("Location: user_register.php?error=Password is required");
	    exit();
	}
	else if(empty($ConfirmPassword)){
        header("Location: user_register.php?error=Confirm Password is required");
	    exit();
	}

	else if(empty($Fullname)){
        header("Location: user_register.php?error=Full name is required");
	    exit();
	}

	else if($password !== $ConfirmPassword){
        header("Location: user_register.php?error=The confirmation password  does not match");
	    exit();
	}

	else{

		// hashing the password
        $password = md5($password);

	    $sql = "SELECT * FROM users WHERE national_id='$username' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: user_register.php?error=This National ID is already registered");
	        exit();
		}else {
           $sql2 = "INSERT INTO users(national_id, password, Fullname) VALUES('$username', '$password', '$Fullname')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
             echo "<script>alert ('successfully registered ')</script>";
           	  echo "<script>window.open('user_login.php')</script>";
	         exit();
           }else {
	           	header("Location: user_register.php?error=unknown error occurred");
		        exit();
           }
		}
	}

}else{
	header("Location: user_register.php");
	exit();
}

 ?>
