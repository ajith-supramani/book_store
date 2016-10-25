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

			<h2 class="page-title">Menu List</h2>

			<a href="add_menu.php" class="btn btn-info">Add Menu</a><br/><br/>
			
			<!-- Zero Configuration Table -->
			<div class="panel panel-default">
				<div class="panel-heading">All Menu List</div>
				<div class="panel-body">
					<table id="zctb" class="display table-striped table-bordered table-hover no-footer" width="100%" cellspacing="0" role="grid" aria-describedby="zctb_info" style="width: 100%;">
						<thead>
							<tr>
								<th>Menu ID</th>
								<th>Menu parent_id</th>
								<th>Menu label</th>
								<th>Menu url</th>
								<th>Menu order</th>
								<th>Menu status</th>
								<th>Menu created on</th>
								<th>Menu modified on</th>
								<th>Actions</th>
								
							</tr>
						</thead>
						<tbody>
					<?php	
					$sql = "SELECT * FROM menus  ";
					$result = $db_handle->runQuery($sql);
					if ($db_handle->numRows($sql) > 0) {
						// output data of each row
						while($row = mysqli_fetch_assoc($result)) {
							
								?>		<tr>	
							<td><?php echo $row["menu_id"]; ?></td>
							<td><?php echo $row["menu_parent_id"]; ?></td>
							<td><?php echo $row["menu_label"]; ?></td>
							<td><?php echo $row["menu_url"]; ?></td>
							
							<td><?php echo $row["menu_order"]; ?></td>
							<td><?php echo ($row['menu_status'] == 1) ? 'Enabled' : 'Disabled';?></td>
							<td><?php echo $row["menu_created_on"]; ?></td>
							<td><?php echo $row["menu_modified_on"]; ?></td>
							<td><a href="edit_menu.php?id=<?php echo $row["menu_id"]; ?>">Edit</a>|<a href="delete_menu.php?id=<?php echo $row["menu_id"]; ?>" onclick="return confirm('Are you sure?');" >Delete</a></td>
							</tr>
								
					<?php	
						}
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