<?php
	// include "header.php";
	// include "sidebar.php";
	include "dbcontroller1.php";
	$db_handle = new DBController();

	if(isset($_GET['id'])){
		$sql = "DELETE FROM users WHERE user_id = '" . $_GET['id'] . "'";
		$result = $db_handle->runQuery($sql);
		if(! $result ) {
               die('Could not delete data: ' . mysqli_error($this->conn));
        }
		$q1 = " ALTER TABLE users DROP user_id ";
		$q2 = " ALTER TABLE users AUTO_INCREMENT = 1 ";
		$q3 = " ALTER TABLE users ADD user_id int UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST";
		$db_handle->runQuery($q1);
		$db_handle->runQuery($q2);
		$db_handle->runQuery($q3);
		
		header('Location: http://localhost/bookstore/users.php');
    }
?>	