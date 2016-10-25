<?php
	include "header.php";
	// include "sidebar.php";
	//include "db_connect.php";
	include "dbcontroller1.php";
	$db_handle = new DBController();
	if(isset($_GET['id'])){
		$sql = "DELETE FROM books WHERE book_id = '" . $_GET['id'] . "'";
		// $sql1 = "SELECT  user_role_name, user_role_status FROM user_role WHERE user_role_id = '" . $_GET['id'] . "'";
		$result = $db_handle->runQuery($sql);
		if(! $result ) {
               die('Could not delete data: ' . mysqli_error($this->conn));
        }
		$q1 = " ALTER TABLE books DROP book_id ";
		$q2 = " ALTER TABLE books AUTO_INCREMENT = 1 ";
		$q3 = " ALTER TABLE books ADD book_id int UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST";
		$db_handle->runQuery($q1);
		$db_handle->runQuery($q2);
		$db_handle->runQuery($q3);
		
		header('Location: http://localhost/bookstore/book_index.php');
    }
?>	