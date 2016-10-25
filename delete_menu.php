<?php
	include "header.php";

	include "dbcontroller1.php";
	$db_handle = new DBController();

	if(isset($_GET['id'])){
		$a = $_GET['id'];
		$sql = "SELECT menu_id FROM menus  WHERE menu_id = $a ";
		$result1 = $db_handle->runQuery($sql);
		while($row = mysqli_fetch_assoc($result1)){
			 
			$a = $row["menu_id"];
			$sql1 = "DELETE FROM menus WHERE menu_id = $a";
			echo $a;
			$db_handle->runQuery($sql1);
			
			$sql2  = "SELECT menu_id FROM menus  WHERE menu_parent_id = $a ";
			$result2 = $db_handle->runQuery($sql2);
			while($row = mysqli_fetch_assoc($result2)){
				$a = $row["menu_id"];
				$sql3 = "DELETE FROM menus WHERE menu_id = $a";
				$db_handle->runQuery($sql3);
				 
				$sql4  = "SELECT menu_id FROM menus  WHERE menu_parent_id = $a ";
				$result3 = $db_handle->runQuery($sql4);
				while($row = mysqli_fetch_assoc($result3)){
					$a = $row["menu_id"];
					$sql5 = "DELETE FROM menus WHERE menu_id = $a";
					$db_handle->runQuery($sql5);
					$sql5  = "SELECT menu_id FROM menus  WHERE menu_parent_id = $a ";
					$result4 = $db_handle->runQuery($sql5);
				 
					while($row = mysqli_fetch_assoc($result4)){
						$a = $row["menu_id"];
						$sql6 = "DELETE FROM menus WHERE menu_id = $a";
						$db_handle->runQuery($sql6);
					}
				}
			}
		}
	
		header('Location: http://localhost/bookstore/menu_index.php');
    }
?>	