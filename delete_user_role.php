<?php
	include "header.php";
	// include "sidebar.php";
	include "dbcontroller1.php";
	$db_handle = new DBController();

	if(isset($_GET['id'])){
		$sql = "DELETE FROM user_role WHERE user_role_id = '" . $_GET['id'] . "'";
		$result = $db_handle->runQuery($sql);
		if(! $result ) {
               die('Could not delete data: ' . mysqli_error($this->conn));
        }
		$q1 = " ALTER TABLE user_role DROP user_role_id ";
		$q2 = " ALTER TABLE user_role AUTO_INCREMENT = 1 ";
		$q3 = " ALTER TABLE user_role ADD user_role_id int UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST";
		$db_handle->runQuery($q1);
		$db_handle->runQuery($q2);
		$db_handle->runQuery($q3);
		
		header('Location: http://localhost/bookstore/user_role.php');
    }
?>	
