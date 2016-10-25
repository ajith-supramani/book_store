<?php
	include "header.php";
	include "sidebar.php";
	// //include "db_connect.php";
	// include "dbcontroller1.php";
	// $db_handle = new DBController();
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script> 
	function myTrans(x,y){
		var st = document.getElementById("sel"+y).value;
		var dataString = 'review_status='+ st +'& review_id='+ x;
		console.log(dataString);
		$.ajax({
			type: "POST",
			url: "buyer_review.php",
			data: dataString,
			success: function(data)
			{
				var res =$(data).find("#post").html();
				alert(res);
			} 
		});
	}
</script>
	
	<div class="content-wrapper">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">

					<h2 class="page-title">Transaction List</h2>

					
					
					<!-- Zero Configuration Table -->
					<div class="panel panel-default">
						<div class="panel-heading">All Transaction List</div>
						<div class="panel-body">
							<table id="zctb" class="display table-striped table-bordered table-hover no-footer" width="100%" cellspacing="0" role="grid" aria-describedby="zctb_info" style="width: 100%;">
								<thead>
									<tr>
										<th>Book Detail</th>
										<th>Buyer Detail</th>
										<th>Seller Detail</th>
										<th>Review Title</th>
										<th>Review Message</th>
										<th>Star Rating</th>
										<th>Review Status</th>	
									</tr>
								</thead>
								<tbody >
						<?php
						$sql = "SELECT a.book_id,a.book_isbn,a.book_title,a.book_catagory,a.book_language,a.book_mrp,a.book_publisher_name,a.book_published_date,a.user_id ,d.*,br.*,c.user_id as buyer_id,c.name as buyer_name,c.email as buyer_email,c.mobno as buyer_mobno FROM  books as a INNER JOIN book_review as br ON a.book_id =  br.book_id INNER JOIN users as c ON c.user_id = br.user_id INNER JOIN users as d ON d.user_id =  a.user_id ";
						
						$result = $db_handle->runQuery( $sql);
						$i=0;

							if ($db_handle->numRows($sql) > 0) {
								// output data of each row
								while($row = mysqli_fetch_assoc($result)) {
								
									?>		
								<tr style="font_size:0.8em">	
									<td>
										<strong>Book ISBN : </strong><?php echo $row["book_isbn"]."</br>"; ?>
										<strong>Book Title : </strong><?php echo $row["book_title"]."</br>"; ?>
										<strong>Book Category : </strong><?php echo $row["book_catagory"]."</br>"; ?>
										<strong>Book Language : </strong><?php echo $row["book_language"]."</br>"; ?>
										<strong>Book Price : </strong><?php echo $row["book_mrp"]."</br>"; ?>
										<strong>Publisher Name: </strong><?php echo $row["book_publisher_name"]."</br>"; ?>
										<strong>Published ON: </strong><?php echo $row["book_published_date"]."</br>"; ?>
									</td>
									<td>
										
										<strong>Buyer Name : </strong><?php echo $row["buyer_name"]."</br>"; ?>
										<strong>Mail ID : </strong><?php echo $row["buyer_email"]."</br>"; ?>
										<strong>Contact Number : </strong><?php echo $row["buyer_mobno"]."</br>"; ?>
										</td>
									<td>
										
										<strong>Seller Name : </strong><?php echo $row["name"]."</br>"; ?>
										<strong>Mail ID : </strong><?php echo $row["email"]."</br>"; ?>
										<strong>Contact Number : </strong><?php echo $row["mobno"]."</br>"; ?>
										
										
									</td>
									<td>
										<strong><?php echo $row["review_title"]."</br>"; ?> </strong>
										
										
									</td>
									<td>
										<?php echo $row["review_message"]."</br>"."</br>"; ?>
										<strong><?php echo $row["review_date"]."</br>"; ?></strong>
									</td>
									<td>
										<?php echo $row["book_rating"]."</br>"; ?>
									</td>
									<td>
										<?php 
											if(isset($_POST["review_status"])){
												$review_status = $_POST['review_status'];
												$review_id = $_POST['review_id'];
												$ord1="UPDATE book_review SET review_status = '".$review_status."' WHERE review_id = '".$review_id."'";
												$db_handle->runQuery($ord1);
										?>
										<div id="post"><?php echo "Review Status Updated Successfully";?></div>
										<?php
											}
											?>
										<select class="" id="sel<?php echo $i; ?>" onchange="myTrans(<?php echo $row['review_id'] ?>,<?php echo $i; ?>) ">
											<option value="0" <?php if($row['review_status'] == 0){ echo("selected");}?>>Not Approved</option>
											<option value="1" <?php if($row['review_status'] == 1){ echo("selected");}?>>Approved</option>
										</select>
									</td>
								</tr>
									
								<?php $i++;
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