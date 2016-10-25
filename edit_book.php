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
		
		$sql1 = "SELECT  * FROM books WHERE book_id = '" . $_GET['id'] . "'";
		$result = $db_handle->runQuery($sql1);
		$row = mysqli_fetch_assoc($result);
	}
	if(isset($_POST["edit_save"])){
		$book_id			    =	$_POST['book_id'];
		$book_name			    =	$_POST['book_name'];
		$user_id				=	$_POST['user_id'];
		$isbn_no 		        = 	$_POST['isbn_no'];
		$book_catagory 		    = 	$_POST['book_catagory'];
		$book_language 		    = 	$_POST['book_language'];
		$book_price 		    = 	$_POST['book_price'];
		$book_publisher_name 	= 	$_POST['book_publisher_name'];
		$book_published_date 	= 	$_POST['book_published_date'];
		$book_logo 		    	= 	$_POST['book_logo'];
		$book_desc 		    	= 	$_POST['book_desc'];
		$no_of_pages 		    = 	$_POST['no_of_pages'];
		$no_of_copies 		    = 	$_POST['no_of_copies'];
		$book_status 		    = 	$_POST['book_status'];
		date_default_timezone_set("Asia/Kolkata");
		$book_modified_on    	= 	date("Y-m-d h:i:s");
		
		$sql = "UPDATE books SET book_title = '$book_name' ,user_id = '$user_id' ,book_isbn = '$isbn_no',book_catagory = '$book_catagory',book_language = '$book_language',book_mrp = '$book_price',book_publisher_name = '$book_publisher_name',book_published_date = '$book_published_date',book_logo = '$book_logo',book_content_description = '$book_desc',number_of_pages = '$no_of_pages',number_of_copies = '$no_of_copies',book_status = '$book_status', book_modified_on = '$book_modified_on' WHERE book_id = '" .$book_id. "'";

		if ($db_handle->runQuery($sql)) {
			header('Location: http://localhost/bookstore/book_index.php');
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($this->conn);
		}
		//mysqli_close($this->conn);
		}
	?>
<div class="row">
<div class="col-md-12">
<h2 class="page-title">Edit Book Details</h2>

<div class="row">
<div class="col-md-6">
	<div class="panel panel-default">
		<div class="panel-heading">Edit Book Details Here..</div>
		<div class="panel-body">
		
			<form method="post" action="edit_book.php" class="form-horizontal">
				<div class="form-group">
					<label class="col-sm-4 control-label">Book Name</label>
					<div class="col-sm-6">
						<input type="hidden" name="book_id" value="<?php if(isset($row['book_title'])){ echo $row['book_id'];} else {echo "";}?>" class="form-control">
						<input type="text" name="book_name" value="<?php if(isset($row['book_title'])){echo $row['book_title']; } else {echo "";} ?>" class="form-control">
					</div>
				</div>
				<div class="hr-dashed"></div>
				<div class="form-group">
					<label class="col-sm-4 control-label">Authorised User Name</label>
					<div class="col-sm-6">
						<select name="user_id" class="form-control">
						<option>Select Authorised User </option>
						<?php 
							$sql1 = "SELECT user_id,name FROM users ";
							$result = $db_handle->runQuery($sql1);
							if ($db_handle->numRows($sql1) > 0) {
								while($row1 = mysqli_fetch_assoc($result)) {
								
						?>
						
						<option value="<?php echo $row1["user_id"]; ?>" <?php if($row1['user_id'] == $row['user_id']){echo("selected");}?>><?php echo $row1["name"]; ?></option>
						
						
						<?php   }
							} else {
								echo "0 results";
							}

							//mysqli_close($this->conn);
						?>
						</select>
					</div>
				</div>
				<div class="hr-dashed"></div>
				<div class="form-group">
					<label class="col-sm-4 control-label">Book ISBN Number</label>
					<div class="col-sm-6">
						<input type="text" name="isbn_no" value="<?php if(isset($row['book_isbn'])){echo $row['book_isbn']; } else {echo "";} ?>" class="form-control">
					</div>
				</div>
				<div class="hr-dashed"></div>
				<div class="form-group">
					<label class="col-sm-4 control-label">Book Category</label>
					<div class="col-sm-6">
						<input type="text"  name="book_catagory"  value="<?php if(isset($row['book_catagory'])){echo $row['book_catagory']; } else {echo "";} ?>" class="form-control">
					</div>
				</div>
				<div class="hr-dashed"></div>
				<div class="form-group">
					<label class="col-sm-4 control-label">Book Language</label>
					<div class="col-sm-6">
						<input type="text" name="book_language" value="<?php if(isset($row['book_language'])){echo $row['book_language']; } else {echo "";} ?>" class="form-control">
					</div>
				</div>
				<div class="hr-dashed"></div>
				<div class="form-group">
					<label class="col-sm-4 control-label">Book Price</label>
					<div class="col-sm-6">
						<input type="text" name="book_price" value="<?php if(isset($row['book_mrp'])){echo $row['book_mrp']; } else {echo "";} ?>" class="form-control">
					</div>
				</div>
				<div class="hr-dashed"></div>
				<div class="form-group">
					<label class="col-sm-4 control-label">Book Publisher Name</label>
					<div class="col-sm-6">
						<input type="text" name="book_publisher_name" value="<?php if(isset($row['book_publisher_name'])){echo $row['book_publisher_name']; } else {echo "";} ?>" class="form-control">
					</div>
				</div>
				<div class="hr-dashed"></div>
				<div class="form-group">
					<label class="col-sm-4 control-label">Book Published Date</label>
					<div class="col-sm-6">
						<input type="date" name="book_published_date" value="<?php if(isset($row['book_published_date'])){echo $row['book_published_date']; } else {echo "";} ?>" class="form-control">
					</div>
				</div>
				<div class="hr-dashed"></div>
				<div class="form-group">
					<label class="col-sm-4 control-label">Book Logo</label>
					<div class="col-sm-6">
						<input type="file" name="book_logo" value="<?php if(isset($row['book_logo'])){echo $row['book_logo']; } else {echo "";} ?>" class="form-control">
					</div>
				</div>
				<div class="hr-dashed"></div>
				<div class="form-group">
					<label class="col-sm-4 control-label">Book Content Description</label>
					<div class="col-sm-6">
						 <textarea name="book_desc" rows="5" cols="40"  class="form-control"><?php if(isset($row['book_content_description'])){echo $row['book_content_description']; } else {echo "";} ?></textarea>
					</div>
				</div>
				<div class="hr-dashed"></div>
				<div class="form-group">
					<label class="col-sm-4 control-label">Number of Pages</label>
					<div class="col-sm-6">
						<input type="text" name="no_of_pages" value="<?php if(isset($row['number_of_pages'])){echo $row['number_of_pages']; } else {echo "";} ?>"class="form-control">
					</div>
				</div>
				<div class="hr-dashed"></div>
				<div class="form-group">
					<label class="col-sm-4 control-label">Number of Copies</label>
					<div class="col-sm-6">
						<input type="text" name="no_of_copies" value="<?php if(isset($row['number_of_copies'])){echo $row['number_of_copies']; } else {echo "";} ?>" class="form-control">
					</div>
				</div>
				<div class="hr-dashed"></div>
				<div class="form-group">
					<label class="col-sm-4 control-label">Book Status</label>
					<div class="col-sm-6">
						<select name="book_status" class="form-control">
						<option>Select Status</option>
						<option value="1" <?php if($row['book_status'] == '1'){echo("selected");}?>>Enable</option>
						<option value="0" <?php if($row['book_status'] == '0'){echo("selected");}?>>Disable</option>
					</select>
					</div>
				</div>
			
				<div class="hr-dashed"></div>
				
				<div class="form-group">
					<div class="col-sm-8 col-sm-offset-2">
						<a href="book_index.php" class="btn btn-success">Return to User Detail Page</a>&nbsp;&nbsp;
						<button class="btn btn-default" type="submit">Cancel</button>&nbsp;
						<input type="submit" class="btn btn-primary" name="edit_save" value="Save" />
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