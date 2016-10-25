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
					
						<h2 class="page-title">Users Role</h2>

						<a href="add_user_role.php" class="btn btn-info">Add User Roles</a><br/><br/>
						
						<!-- Zero Configuration Table -->
						<div class="panel panel-default">
							<div class="panel-heading">User Role Lists</div>
							<div class="panel-body">
								<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
									<thead>
										<tr>
											<th>Id</th>
											<th>User Role</th>
											<th>Status</th>
											<th>Created On</th>
											<th>Modified On</th>
											<th>Actions</th>
										</tr>
									</thead>
									<!--tfoot>
										<tr>
											<th>Id</th>
											<th>User Role</th>
											<th>Status</th>
											<th>Created On</th>
											<th>Modified On</th>
											<th>Actions</th>
										</tr>
									</tfoot-->
									<tbody>
									
							<?php
					
								$sql = "SELECT user_role_id, user_role_name, user_role_status, user_role_created_on, user_role_modified_on FROM user_role";
								$result = $db_handle->runQuery( $sql);

								if ($db_handle->numRows($sql) > 0) {
									// output data of each row
									while($row = mysqli_fetch_assoc($result)) {
									//echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
								?>		<tr>	
										<td><?php echo $row["user_role_id"]; ?></td>
										<td><?php echo $row["user_role_name"]; ?></td>
										<td><?php echo ($row['user_role_status'] == 1) ? 'Enabled' : 'Disabled';?></td>
										<td><?php echo $row["user_role_created_on"]; ?></td>
										<td><?php echo $row["user_role_modified_on"]; ?></td>
										<td><a href="edit_user_role.php?id=<?php echo $row["user_role_id"]; ?>">Edit</a> | <a href="delete_user_role.php?id=<?php echo $row["user_role_id"]; ?>" onclick="return confirm('Are you sure?');" >Delete</a></td>
										</tr>
										
							<?php	}
								} else {
									echo "0 results";
								}

								 //mysqli_close($this->conn);
								?>
											
									</tbody>
								</table>

							</div>
						</div>

					</div>
	</div>
	


<?php
	include "footer.php";
?>