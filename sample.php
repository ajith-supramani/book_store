<?php 
	// include "db_connect.php";
	include "dbcontroller1.php";
	$db_handle = new DBController();
	$sql = "SELECT * FROM menus ";
	$result =  $db_handle->runQuery($sql);
	$row = mysqli_fetch_all($result,MYSQLI_ASSOC);
	?>
	<html>
		<body>
		<?php
		echo "<ul>";
		foreach($row as $menu){
			if($menu['menu_parent_id'] == 0){
				echo "<li><a herf='#'>".$menu['menu_label']."</a>";
				$menu_id = $menu['menu_id'];
				sub($row,$menu_id);
				echo "</li>";
			}
		}
		echo "</ul>";

		function sub($row,$menu_id){
			echo "<ul>";
			foreach($row as $menu){
				if($menu['menu_parent_id'] == $menu_id){
					echo "<li><a herf='#'>".$menu['menu_label']."</a>";
					sub($row,$menu['menu_id']);
					echo "</li>";
				}
			}
			echo "</ul>";
		}
		
		?>
		</body>
	</html>