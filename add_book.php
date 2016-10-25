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
	$book_name			    =	$_POST['book_name'];
	 if( !isset($_SESSION['seller_user_id'] )){ 
		 $user_id				=	$_POST['user_id'];
	 } else {
		 $user_id				=	$_SESSION['seller_user_id'];
	 }
	$isbn_no 		        = 	$_POST['isbn_no'];
	$book_catagory 		    = 	$_POST['book_catagory'];
	$book_language 		    = 	$_POST['book_language'];
	$book_price 		    = 	$_POST['book_price'];
	$book_publisher_name 	= 	$_POST['book_publisher_name'];
	$book_published_date 	= 	$_POST['book_published_date'];
	$book_desc 		    	= 	$_POST['book_desc'];
	$no_of_pages 		    = 	$_POST['no_of_pages'];
	$no_of_copies 		    = 	$_POST['no_of_copies'];
	$book_status 		    = 	$_POST['book_status'];
	date_default_timezone_set("Asia/Kolkata");
	$book_posted_on  		= 	date("Y-m-d h:i:s");

		$fileName = $_FILES["book_logo"]["name"];
		$fileSize = $_FILES["book_logo"]["size"]/1024;
		$fileType = $_FILES["book_logo"]["type"];
		$fileTmpName = $_FILES["book_logo"]["tmp_name"]; 	
		$uploadPath="logo/".base64_encode("l2w".base64_encode($fileName));			
		if(move_uploaded_file($fileTmpName,$uploadPath)){
			$FILEMESSAGE = "File Successfully Upload<BR>"."File Name :".$fileName."<BR>"."File Size :".$fileSize." kb"."<BR>"."File Type :".$fileType."<BR>"; 
			echo $FILEMESSAGE;
		}else{
			echo "Upload failure ";
		}	

	//echo "INSERT INTO user_role (user_role_name, user_role_status, user_role_created_on) VALUES ('$user_role_name', $user_role_status, '$user_role_created_on')";

	$sql = "INSERT INTO books ( user_id , book_isbn , book_title , book_catagory , book_language, book_mrp ,  book_publisher_name, book_published_date,book_posted_on  ,book_logo,book_content_description,number_of_pages,number_of_copies,book_status) VALUES ( $user_id ,$isbn_no , '$book_name', '$book_catagory' ,'$book_language',$book_price, '$book_publisher_name' , '$book_published_date','$book_posted_on', '$fileName' , '$book_desc', $no_of_pages, $no_of_copies , $book_status )";

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
<h2 class="page-title">Add Book Details</h2>

<div class="row">
<div class="col-md-6">
<div class="panel panel-default">
	<div class="panel-heading">Add Book Details Here..</div>
	<div class="panel-body">
	
		<form method="post" action="add_book.php" class="form-horizontal" enctype="multipart/form-data">
		<div class="form-group">
				<label class="col-sm-4 control-label">Book Name</label>
				<div class="col-sm-6">
					<input type="text" name="book_name" class="form-control">
				</div>
			</div>
			<div class="hr-dashed"></div>
			<?php if( !isset($_SESSION['seller_user_id'] )){ ?>
				<div class="form-group">
					<label class="col-sm-4 control-label">Authorised User Name</label>
					<div class="col-sm-6">
						<select name="user_id" class="form-control">
						<option>Select Authorised User </option>
						<?php 
							$sql1 = "SELECT user_id,name FROM users ";
							$result = $db_handle->runQuery($sql1);
							if ($db_handle->numRows($sql) > 0) {
								while($row = mysqli_fetch_assoc($result)) {
								
						?>
						
						<option value="<?php echo $row["user_id"]; ?>"><?php echo $row["name"]; ?></option>
						
						
						<?php   }
							} else {
								echo "0 results";
							}

							//mysqli_close($conn);
						?>
					</select>
					</div>
				</div>
			
			<?php } ?>
			
			<div class="hr-dashed"></div>
			<div class="form-group">
				<label class="col-sm-4 control-label">Book ISBN Number</label>
				<div class="col-sm-6">
					<input type="text" name="isbn_no" class="form-control">
				</div>
			</div>
			<div class="hr-dashed"></div>
			<div class="form-group">
				<label class="col-sm-4 control-label">Book Category</label>
				<div class="col-sm-6">
					<input type="text" name="book_catagory" class="form-control">
				</div>
			</div>
			<div class="hr-dashed"></div>
			<div class="form-group">
				<label class="col-sm-4 control-label">Book Language</label>
				<div class="col-sm-6">
					<input type="text" name="book_language" class="form-control">
				</div>
			</div>
			<div class="hr-dashed"></div>
			<div class="form-group">
				<label class="col-sm-4 control-label">Book Price</label>
				<div class="col-sm-6">
					<input type="text" name="book_price" class="form-control">
				</div>
			</div>
			<div class="hr-dashed"></div>
			<div class="form-group">
				<label class="col-sm-4 control-label">Book Publisher Name</label>
				<div class="col-sm-6">
					<input type="text" name="book_publisher_name" class="form-control">
				</div>
			</div>
			<div class="hr-dashed"></div>
			<div class="form-group">
				<label class="col-sm-4 control-label">Book Published Date</label>
				<div class="col-sm-6">
					<input type="date" name="book_published_date" class="form-control">
				</div>
			</div>
			<div class="hr-dashed"></div>
			<div class="form-group">
				<label class="col-sm-4 control-label">Book Logo</label>
				<div class="col-sm-6">
					<input type="file" name="book_logo" class="form-control">
				</div>
			</div>
			<div class="hr-dashed"></div>
			<div class="form-group">
				<label class="col-sm-4 control-label">Book Content Description</label>
				<div class="col-sm-6">
					 <textarea name="book_desc" rows="5" cols="40" class="form-control"></textarea>
				</div>
			</div>
			<div class="hr-dashed"></div>
			<div class="form-group">
				<label class="col-sm-4 control-label">Number of Pages</label>
				<div class="col-sm-6">
					<input type="text" name="no_of_pages" class="form-control">
				</div>
			</div>
			<div class="hr-dashed"></div>
			<div class="form-group">
				<label class="col-sm-4 control-label">Number of Copies</label>
				<div class="col-sm-6">
					<input type="text" name="no_of_copies" class="form-control">
				</div>
			</div>
			<div class="hr-dashed"></div>
			<div class="form-group">
				<label class="col-sm-4 control-label">Book Status</label>
				<div class="col-sm-6">
					<select name="book_status" class="form-control">
					<option>Select Status</option>
					<option value="1">Enable</option>
					<option value="0">Disable</option>
				</select>
				</div>
			</div>
		
			<div class="hr-dashed"></div>
			
			<div class="form-group">
				<div class="col-sm-8 col-sm-offset-2">
					<a href="book_index.php" class="btn btn-success">Return to User Detail Page</a>&nbsp;&nbsp;
					<button class="btn btn-default" type="submit">Cancel</button>&nbsp;
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