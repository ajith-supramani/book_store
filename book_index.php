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

			<h2 class="page-title">Books List</h2>

			<a href="add_book.php" class="btn btn-info">Add Books</a><br/><br/>
			
			<!-- Zero Configuration Table -->
			<div class="panel panel-default">
				<div class="panel-heading">All Books List</div>
				<div class="panel-body">
					<table id="zctb" class="display table-striped table-bordered table-hover no-footer" width="100%" cellspacing="0" role="grid" aria-describedby="zctb_info" style="width: 100%;">
						<thead>
							<tr>
								<th>Book ID</th>
								<th>Seller Name</th>
								<th>Book ISBN</th>
								<th>Book Name</th>
								<th>Book Category</th>
								<th>Book Language</th>
								<th>Book Price</th>
								<th>Book Publisher</th>
								<th>Published Date</th>
								<th>Book logo</th>
								<th>Description</th>
								<th>Pages</th>
								<th>Copies</th>
								<th>Status</th>
								<th>Actions</th>
								
							</tr>
						</thead>
						<tbody>
				<?php
		
				
					if( !isset($_SESSION['seller_user_id'] )){
					$sql = "SELECT a.*,b.name FROM books as a INNER JOIN users as b ON a.user_id =  b.user_id ";
					} else {
						$seller_id = $_SESSION['seller_user_id'];
						$sql = "SELECT a.*,b.name FROM books as a INNER JOIN users as b ON a.user_id =  b.user_id WHERE a.user_id='".$seller_id."'";
					}	
					$result = $db_handle->runQuery($sql);
				

					if ($db_handle->numRows($sql) > 0) {
						// output data of each row
						while($row = mysqli_fetch_assoc($result)) {
						
							?>		<tr>	
						<td><?php echo $row["book_id"]; ?></td>
						<td><?php echo $row["name"]; ?></td>
						<td><?php echo $row["book_isbn"]; ?></td>
						<td><?php echo $row["book_title"]; ?></td>
						
						<td><?php echo $row["book_catagory"]; ?></td>
						<td><?php echo $row["book_language"]; ?></td>
						<td><?php echo $row["book_mrp"]; ?></td>
						<td><?php echo $row["book_publisher_name"]; ?></td>
						<td><?php echo $row["book_published_date"]; ?></td>
						<td><?php echo $row["book_logo"]; ?></td>
						<td><?php echo $row["book_content_description"]; ?></td>
						<td><?php echo $row["number_of_pages"]; ?></td>
						<td><?php echo $row["number_of_copies"]; ?></td>
						<td><?php echo ($row['book_status'] == 1) ? 'Enabled' : 'Disabled';?></td>
	
						<td><a href="edit_book.php?id=<?php echo $row["book_id"]; ?>">Edit</a> | <a href="delete_book.php?id=<?php echo $row["book_id"]; ?>" onclick="return confirm('Are you sure?');" >Delete</a></td>
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