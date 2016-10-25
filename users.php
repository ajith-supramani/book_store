<?php
	include "header.php";
	include "sidebar.php";
	//include "db_connect.php";
	// include "dbcontroller1.php";
	// $db_handle = new DBController();
?>
	
<div class="content-wrapper">
	<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">

			<h2 class="page-title">Users List</h2>
			<?php 
			if( !isset($_SESSION['seller_user_id'] )){?>
				<a href="add_user.php" class="btn btn-info">Add Users</a><br/><br/>
			<?php 
			} ?>	
						<!-- Zero Configuration Table -->
						<div class="panel panel-default">
							<div class="panel-heading">All Users List</div>
							<div class="panel-body">
								<table id="zctb" class="display table-striped table-bordered table-hover no-footer" width="100%" cellspacing="0" role="grid" aria-describedby="zctb_info" style="width: 100%;">
									<thead>
										<tr>
											<th>User_ID</th>
											<th>Name</th>
											<th>Email</th>
											<th>User_role</th>
											<th>Mobile no.</th>
											<th>Country</th>
											<th>Password</th>
											<th>User_status</th>
											<th>User created on</th>
											<th>User modified on</th>
											<?php if( !isset($_SESSION['seller_user_id'] )){?>
											<th>Actions</th>
											<?php } ?>
										</tr>
									</thead>
									<tbody>
						    <?php
					
							 if( !isset($_SESSION['seller_user_id'] )){
							
							$sql = "SELECT a.*,b.user_role_name,c.country_name FROM users as a INNER JOIN user_role as b ON a.user_role_id =  b.user_role_id INNER JOIN city_master as ci ON a.city_id = ci.city_id INNER JOIN state_master as s ON ci.state_id = s.state_id INNER JOIN country_master as c ON c.country_id = s.country_id";
							 } else {
								 $sql = "SELECT a.*,b.user_role_name,c.country_name FROM users as a INNER JOIN user_role as b ON a.user_role_id =  b.user_role_id INNER JOIN city_master as ci ON a.city_id = ci.city_id INNER JOIN state_master as s ON ci.state_id = s.state_id INNER JOIN country_master as c ON c.country_id = s.country_id WHERE user_id='".$_SESSION['seller_user_id']."'";
							 }	 
							$result = $db_handle->runQuery($sql);
							$rowcount = $db_handle->numRows($sql);

								if ($rowcount > 0) {
									// output data of each row
									while($row = mysqli_fetch_assoc($result)) {
									
										?>		<tr>	
									<td><?php echo $row["user_id"]; ?></td>
									<td><?php echo $row["name"]; ?></td>
									<td><?php echo $row["email"]; ?></td>
									<td><?php echo $row["user_role_name"]; ?></td>
									
									<td><?php echo $row["mobno"]; ?></td>
									<td><?php echo $row["country_name"]; ?></td>
									<td><?php echo $row["password"]; ?></td>
									
									<td><?php echo ($row['user_status'] == 1) ? 'Enabled' : 'Disabled';?></td>
									<td><?php echo $row["user_created_on"]; ?></td>
									<td><?php echo $row["user_modified_on"]; ?></td>
									
								
									
									
									
									<?php if( !isset($_SESSION['seller_user_id'] )){?>
									<td><a href="edit_user.php?id=<?php echo $row["user_id"]; ?>">Edit</a> | <a href="delete_user.php?id=<?php echo $row["user_id"]; ?>" onclick="return confirm('Are you sure?');" >Delete</a></td>
									<?php } ?>
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