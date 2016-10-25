<?php


function login_cred($email,$pass,$user_role_id){
		include "db_connect.php"; 
		
		$sql = "SELECT user_id,name FROM users WHERE email = '$email' AND password = '$pass' AND user_role_id = $user_role_id";
		$result = mysqli_query($conn, $sql);
		$data = mysqli_num_rows($result);
		$uid = mysqli_fetch_assoc($result);
		
		if($data == 1){	
			$_SESSION['admin_email'] = $email;
			$_SESSION['admin_Password'] = $pass;
			$_SESSION['admin_user_id'] = $uid["user_id"];
			$_SESSION['admin_user_role_id'] = $user_role_id;
			$_SESSION['admin_name'] = $uid["name"];
			// return "Welcome".$_SESSION['admin_name'];
			header("Location:http://localhost/bookstore/dashboard.php");
		} else {	
			echo "Credential Error";
		}	
	}
	?>