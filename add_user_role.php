<?php
	include "header.php";
	include "sidebar.php";
	// //include "db_connect.php";
	// include "dbcontroller1.php";
	// $db_handle = new DBController();
?>

<div class="content-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
		
	<?php
	if(isset($_POST["save"])){
		
		$user_role_name 		= 	$_POST['user_role_name'];
		$user_role_status 		= 	$_POST['user_role_status'];
		date_default_timezone_set("Asia/Kolkata");
		$user_role_created_on  	= 	date("Y-m-d h:i:s");
		
		//echo "INSERT INTO user_role (user_role_name, user_role_status, user_role_created_on) VALUES ('$user_role_name', $user_role_status, '$user_role_created_on')";
			
		$sql = "INSERT INTO user_role (user_role_name, user_role_status, user_role_created_on) VALUES ('$user_role_name', $user_role_status, '$user_role_created_on')";

		if ($db_handle->runQuery($sql)) {
			echo "New record created successfully";
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($this->conn);
		}
	
	}
	
	//mysqli_close($conn);
	
	?>
					
			<h2 class="page-title">Add User Roles</h2>
			<br/><br/>

			<div class="row">
				<div class="col-md-6">
					<div class="panel panel-default">
						<div class="panel-heading">Add Roles Here..</div>
						<div class="panel-body">
							<form method="post" action="add_user_role.php" class="form-horizontal">
								<div class="form-group">
									<label class="col-sm-4 control-label">Role Name</label>
									<div class="col-sm-6">
										<input type="text" name="user_role_name" class="form-control">
									</div>
								</div>
								<div class="hr-dashed"></div>
								
								<div class="form-group">
								<label class="col-sm-4 control-label">Role Status</label>
								<div class="col-sm-6">
									<select name="user_role_status" class="form-control">
										<option>Select Status</option>
										<option value="1">Enable</option>
										<option value="0">Disable</option>
									</select>
								</div>
								</div>
								<div class="hr-dashed"></div>
								
								<div class="form-group">
									<div class="col-sm-8 col-sm-offset-2">
										<a href="user_role.php" class="btn btn-success">Return to User Role</a>&nbsp;&nbsp;
										<button class="btn btn-default" type="submit">Cancel</button>&nbsp;&nbsp;
										<input type="submit" class="btn btn-primary" name="save" value="Save" />
										<!--button class="btn btn-primary" name="save" type="submit">Save changes</button-->
										<!--a href="" class="btn btn-primary" name="save" type="submit">Save changes</a-->
									</div>
								</div>
								
							</form>

						</div>
					</div>
				</div>
				

<?php
	include "footer.php";
?>