<?php
	include "header.php";
	include "sidebar.php";
	// include "db_connect.php";
	// include "dbcontroller1.php";
	// $db_handle = new DBController();
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <script> 
function myFunction(x,y){
	
	var st = document.getElementById(y).value;
	var dataString = 'payment_status_id1='+ st +'& trans_id1='+ x;
	console.log(dataString);
	$.ajax({
	type: "POST",
	url: "transaction.php",
	data: dataString,
	success: function(data)
	{
		var res =$(data).find("#post").html();
		alert(res);
	} 
	});
}
function myTrans(x,y){
	var st = document.getElementById("sel"+y).value;
	var dataString = 'trans_status='+ st +'& trans_id2='+ x;
	console.log(dataString);
	$.ajax({
	type: "POST",
	url: "transaction.php",
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
											<th>Transaction</th>
											<th>Date of Order</th>
											<th>Total Amount</th>
											<th>Status</th>	
										</tr>
									</thead>
									<tbody >
						    <?php
					
							
							
							$sql = "SELECT t.*,a.book_id,a.book_isbn,a.book_title,a.book_catagory,a.book_language,a.book_mrp,a.book_publisher_name,a.book_published_date,a.user_id ,b.*,c.user_id as buyer_id,c.name as buyer_name,c.email as buyer_email,c.mobno as buyer_mobno FROM transaction as t INNER JOIN books as a ON a.book_id = t.book_id INNER JOIN users as b ON a.user_id =  b.user_id INNER JOIN users as c ON c.user_id = t.user_id ";
							
							$result = $db_handle->runQuery($sql);
							$i=0;

								if ($db_handle->numRows($sql) > 0) {
									// output data of each row
									while($row = mysqli_fetch_assoc($result)) {
									
										?>		
									<tr style="font_size:0.8em">	
										<td>
											<strong>Book ID : </strong><?php echo $row["book_id"]."</br>"; ?>
											<strong>Book ISBN : </strong><?php echo $row["book_isbn"]."</br>"; ?>
											<strong>Book Title : </strong><?php echo $row["book_title"]."</br>"; ?>
											<strong>Book Category : </strong><?php echo $row["book_catagory"]."</br>"; ?>
											<strong>Book Language : </strong><?php echo $row["book_language"]."</br>"; ?>
											<strong>Book Price : </strong><?php echo $row["book_mrp"]."</br>"; ?>
											<strong>Publisher Name: </strong><?php echo $row["book_publisher_name"]."</br>"; ?>
											<strong>Published ON: </strong><?php echo $row["book_published_date"]."</br>"; ?>
										</td>
										<td>
											<strong>Buyer ID : </strong><?php echo $row["buyer_id"]."</br>"; ?>
											<strong>Buyer Name : </strong><?php echo $row["buyer_name"]."</br>"; ?>
											<strong>Mail ID : </strong><?php echo $row["buyer_email"]."</br>"; ?>
											<strong>Contact Number : </strong><?php echo $row["buyer_mobno"]."</br>"; ?>
											</td>
										<td>
											<strong>Seller ID : </strong><?php echo $row["user_id"]."</br>"; ?>
											<strong>Seller Name : </strong><?php echo $row["name"]."</br>"; ?>
											<strong>Mail ID : </strong><?php echo $row["email"]."</br>"; ?>
											<strong>Contact Number : </strong><?php echo $row["mobno"]."</br>"; ?>
											
											
										</td>
										<td>
											<strong>Transaction ID : </strong><?php echo $row["trans_id"]."</br>"; ?>
											<strong>Number of Copies to Buy : </strong><?php echo $row["no_of_copies_buy"]."</br>"; ?>
											<?php 
														if(isset($_POST["payment_status_id1"])){
															$payment_status1 = $_POST['payment_status_id1'];
															$trans1 = $_POST['trans_id1'];
															$ord1="UPDATE transaction SET payment_id = '".$payment_status1."' WHERE trans_id = '".$trans1."'";
															
															$db_handle->runQuery($ord1);
												?>
															
															<div id="post"><?php echo "Payment Status Updated Successfully";?></div>
															<?php
														}
												?>
											<select name="payment_status" class="" id="<?php echo $i; ?>" onchange="myFunction(<?php echo $row['trans_id'] ?>,<?php echo $i; ?>) ">
													<option>Select Payment Mode</option>
													<?php 
														$ord = "SELECT  * FROM payment_master ";
														$result1 = $db_handle->runQuery($ord);
														if ($db_handle->numRows($ord) > 0) {
															while($row1 = mysqli_fetch_assoc($result1)) {
															
													?>
													
													<option value="<?php echo $row1["payment_id"]; ?>" <?php if($row['payment_id'] == $row1["payment_id"]){echo("selected");}?>><?php echo $row1["payment_status"]; ?></option>
													
													
													<?php   }
															} else {
																echo "0 results";
															}

														
													?>
												</select>
											
										</td>
										<td>
											<?php echo $row["date_of_buy"]."</br>"; ?>
										</td>
										<td>
											<?php echo $row["no_of_copies_buy"]*$row["book_mrp"]."</br>"; ?>
										</td>
										<td>
											<?php 
												if(isset($_POST["trans_status"])){
												$trans_status = $_POST['trans_status'];
												$trans2 = $_POST['trans_id2'];
												$ord1="UPDATE transaction SET trans_status = '".$trans_status."' WHERE trans_id = '".$trans2."'";
												$db_handle->runQuery($ord1);
											?>
											<div id="post"><?php echo "Transaction Status Updated Successfully";?></div>
											<?php
														}
												?>
											<select class="" id="sel<?php echo $i; ?>" onchange="myTrans(<?php echo $row['trans_id'] ?>,<?php echo $i; ?>) ">
												<option value="1" <?php if($row['trans_status'] == 1){ echo("selected");}?>>Completed</option>
												<option value="0" <?php if($row['trans_status'] == 0){ echo("selected");}?>>Pending</option>
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