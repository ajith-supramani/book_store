<?php
	include "header.php";
	include "sidebar.php";
	// include "dbcontroller1.php";
	// $db_handle = new DBController();

	
?>

<div class="content-wrapper">
	<div class="container-fluid">

		<div class="row">
			<div class="col-md-12">
		
<?php
	if(isset($_GET['id'])){
		
		$sql1 = "SELECT  menu_id,menu_label,menu_url,menu_parent_id,menu_status FROM menus WHERE menu_id = '" . $_GET['id'] . "'";
		$result = $db_handle->runQuery($sql1);
		$row = mysqli_fetch_assoc($result);
	}
	if(isset($_POST["edit_save"])){
		
		
		$menu_id 		= 	$_POST['menu_id'];
		$menu_label 		= 	$_POST['menu_label'];
		$menu_url           =   $_POST['menu_url'];
		$parent_menu           =   $_POST['parent_menu'];
		$menu_status           =   $_POST['menu_status'];
		date_default_timezone_set("Asia/Kolkata");
		$menu_modified_on  = 	date("Y-m-d h:i:s");
		$sql = "UPDATE menus SET menu_label = '$menu_label' , menu_url = '$menu_url' , menu_parent_id = $parent_menu, menu_status = $menu_status , menu_modified_on = '$menu_modified_on' WHERE menu_id = $menu_id";
		if ($db_handle->runQuery($sql)) {
			echo "Record Updated successfully!!!";
			header('Location: http://localhost/bookstore/menu_index.php');
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($this->conn);
		}
		//mysqli_close($this->conn);
	}
	?>
<div class="row">
<div class="col-md-12">
<h2 class="page-title">Edit Menu</h2>

<div class="row">
<div class="col-md-6">
<div class="panel panel-default">
	<div class="panel-heading">Edit Menu Detail Here..</div>
	<div class="panel-body">
		<form method="post" action="edit_menu.php" class="form-horizontal">
		
			<div class="form-group">
				<label class="col-sm-4 control-label">Menu Label Name</label>
				<div class="col-sm-6">
					<input type="hidden" name="menu_id" value="<?php if(isset($row['menu_label'])){ echo $row['menu_id'];} else {echo "";}?>" class="form-control">
					<input type="text" name="menu_label" value="<?php if(isset($row['menu_label'])){echo $row['menu_label']; } else {echo "";} ?>" class="form-control">
				</div>
			</div>
			<div class="hr-dashed"></div>
			
			<div class="form-group">
				<label class="col-sm-4 control-label">Menu URL</label>
				<div class="col-sm-6">
					<input type="text" name="menu_url" class="form-control" value="<?php echo $row['menu_url'];?>">
				</div>
			</div>
			<div class="hr-dashed"></div>
			
			<div class="form-group">
				<label class="col-sm-4 control-label">Choose the Name of Parent menu</label>
				<div class="col-sm-6">
					<select class="form-control" id="parent_menu1" name="parent_menu">
						<option value="0">None</option>
						<?php 
						$m_id = $row['menu_id'];
						$cou = "SELECT  * FROM menus WHERE menu_id != $m_id";
						$result1 = $db_handle->runQuery($cou);
						if ($db_handle->numRows($cou) > 0) {
							while($row1 = mysqli_fetch_assoc($result1)) {
							
						?>
					
						<option value="<?php echo $row1["menu_id"]; ?>" <?php if($row['menu_parent_id'] == $row1['menu_id'] ){echo("selected");}?>><?php echo $row1["menu_label"]; ?></option>
					
					
						<?php   
							}
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
						<option value="1" <?php if($row['menu_status'] == '1'){echo("selected");}?>>Enable</option>
						<option value="0"  <?php if($row['menu_status'] == '0'){echo("selected");}?>>Disable</option>
				  </select>
				</div>
			</div>
			<div class="hr-dashed"></div>
			
			<div class="form-group">
				<div class="col-sm-8 col-sm-offset-2">
					<a href="menu_index.php" class="btn btn-success">Return to Menu Detail Page</a>&nbsp;&nbsp;
					<button class="btn btn-default" type="submit">Cancel</button>&nbsp;
					<input type="submit" class="btn btn-primary" name="edit_save" value="Save" />
				</div>
			</div>
			
		</form>

	</div>
</div>
</div>
<?php
include "footer.php";
?>