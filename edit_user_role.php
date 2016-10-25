<?php
	include "header.php";
	include "sidebar.php";
	// include "db_connect.php";
	// include "dbcontroller1.php";
	// $db_handle = new DBController();

	
?>

<div class="content-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
		
<?php
	
		
	
	//1. get id from url
	//2. pass id into select query using WHERE condition
	
	if(isset($_GET['id'])){
		
		$sql1 = "SELECT  user_role_name, user_role_status FROM user_role WHERE user_role_id = '" . $_GET['id'] . "'";
		$result = $db_handle->runQuery($sql1);
		$row = mysqli_fetch_assoc($result);
	}
	 
	 
	 //echo $_GET['id'];
	 //echo $row['user_role_name'];exit;
	
	if(isset($_POST["edit_save"])){
		
		
		$user_role_name 		= 	$_POST['user_role_name'];
		$user_role_status 		= 	$_POST['user_role_status'];
		$user_role_id           =   $_POST['user_role_id'];
		date_default_timezone_set("Asia/Kolkata");
		$user_role_modified_on  = 	date("Y-m-d h:i:s");
	
		$sql = "UPDATE user_role SET user_role_name = '$user_role_name' , user_role_status = $user_role_status , user_role_modified_on = '$user_role_modified_on' WHERE user_role_id = '" .$user_role_id. "'";

		if ($db_handle->runQuery($sql)) {
			echo "Record Updated successfully!!!";
			header('Location: http://localhost/bookstore/user_role.php');
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($this->conn);
		}
		//mysqli_close($this->conn);
	}
	
	
	
	?>
					
	<h2 class="page-title">Edit User Roles</h2><br/>
	<br/><br/>

	<div class="row">
		<div class="col-md-6">
			<div class="panel panel-default">
				<div class="panel-heading">Edit Roles Here..</div>
				<div class="panel-body">
					<form method="post" action="edit_user_role.php" class="form-horizontal">
						<?php if(isset($_GET['id'])){

							$sql1 = "SELECT  * FROM user_role WHERE user_role_id = '" . $_GET['id'] . "'";
							$result = $db_handle->runQuery($sql1);
							$row = mysqli_fetch_assoc($result);
							} ?>
						<div  name="user">
							<div class="form-group">
								<label class="col-sm-4 control-label">Role Name</label>
								<div class="col-sm-6">
									<input type="hidden" name="user_role_id" value="<?php if(isset($row['user_role_name'])){ echo $row['user_role_id'];} else {echo "";}?>" class="form-control">
									<input type="text" name="user_role_name" value="<?php if(isset($row['user_role_name'])){echo $row['user_role_name']; } else {echo "";} ?>" class="form-control">
								</div>
							</div>
							<div class="hr-dashed"></div>
						
							<div class="form-group">
							<label class="col-sm-4 control-label">Role Status</label>
							<div class="col-sm-6">
								<select name="user_role_status" class="form-control" >
									<option>Select Status</option>
									<option value="1"  <?php if($row['user_role_status'] == '1'){echo("selected");}?>>Enable</option>
									<option value="0" <?php if($row['user_role_status'] == '0'){echo("selected");}?>>Disable</option>
								</select>
							</div>
							</div>
							<div class="hr-dashed"></div>
						
							<div class="form-group">
								<div class="col-sm-8 col-sm-offset-2">
									<a href="user_role.php" class="btn btn-success">Return to User Role</a>&nbsp;&nbsp;
									<button class="btn btn-default" type="submit">Cancel</button>&nbsp;&nbsp;
									<input type="submit" class="btn btn-primary" name="edit_save" value="Save" />
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
			

<?php
	include "footer.php";
?>