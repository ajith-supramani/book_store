<?php
include "header.php";
include "sidebar.php";
// //include "db_connect.php";
// include "dbcontroller1.php";
// $db_handle = new DBController();
?>
<div class="content-wrapper">
<div class="container-fluid">
<?php

	if(isset($_POST["save"])){
		$label_name			    =	$_POST['label_name'];
		$menu_url 		        = 	$_POST['menu_url'];
		$parent_menu 		    = 	$_POST['parent_menu'];
		$menu_status 		    = 	$_POST['menu_status'];
		date_default_timezone_set("Asia/Kolkata");
		$menu_created_on  	    = 	date("Y-m-d h:i:s");

		$sql = "INSERT INTO menus ( menu_parent_id, menu_label , menu_url , menu_status , menu_created_on) VALUES ( $parent_menu ,'$label_name' , '$menu_url', $menu_status ,'$menu_created_on')";

		if ($db_handle->runQuery($sql)) {
			echo "New record created successfully";
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($this->conn);
		}
	//mysqli_close($conn);
	}


?>

<div class="row">
<div class="col-md-12">
<h2 class="page-title">Add Menu</h2>

<div class="row">
<div class="col-md-6">
	<div class="panel panel-default">
		<div class="panel-heading">Add Menu Detail Here..</div>
		<div class="panel-body">
			<form method="post" action="add_menu.php" class="form-horizontal">
				<div class="form-group">
					<label class="col-sm-4 control-label">Menu Label Name</label>
					<div class="col-sm-6">
						<input type="text" name="label_name" class="form-control">
					</div>
				</div>
				
				<div class="hr-dashed"></div>
				
				<div class="form-group">
					<label class="col-sm-4 control-label">Menu URL</label>
					<div class="col-sm-6">
						<input type="text" name="menu_url" class="form-control">
					</div>
				</div>
				
				<div class="hr-dashed"></div>
				
				<div class="form-group">
					<label class="col-sm-4 control-label">Choose the Name of Parent menu</label>
					<div class="col-sm-6">
					  <select class="form-control" id="parent_menu1" name="parent_menu">
							<option value="0">None</option>
							<?php 
							$cou = "SELECT  * FROM menus";
							$result1 = $db_handle->runQuery($cou);
							if ($db_handle->numRows($result1) > 0) {
								while($row = mysqli_fetch_assoc($result1)) {
								
						?>
						
						<option value="<?php echo $row["menu_id"]; ?>"><?php echo $row["menu_label"]; ?></option>
						
						
						<?php   }
							} else {
								echo "0 results";
							}
						?>
					  </select>
					</div>
				</div>
				
				<div class="hr-dashed"></div>
				
				<div class="form-group">
					<label class="col-sm-4 control-label">Menu Status</label>
					<div class="col-sm-6">
					  <select class="form-control" name="menu_status">
							<option value="1">Enable</option>
							<option value="0">Disable</option>
					  </select>
					</div>
				</div>
				
				<div class="hr-dashed"></div>
				
				<div class="form-group">
					<div class="col-sm-8 col-sm-offset-2">
						<a href="menu_index.php" class="btn btn-success">Return to Menu Detail Page</a>&nbsp;&nbsp;
						<button class="btn btn-default" type="submit">Cancel</button>&nbsp;
						<input type="submit" class="btn btn-primary" name="save" value="Save" />
					</div>
				</div>
				
			</form>
		</div>
	</div>
</div>
<?php
include "footer.php";
?>