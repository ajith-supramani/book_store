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

						<h2 class="page-title">Book Purchased Process Detail</h2>
						
						<!-- Zero Configuration Table -->
						<div class="panel panel-default">
							<div class="panel-heading">All Process List</div>
							<div class="panel-body">
								<table id="zctb" class="display table-striped table-bordered table-hover no-footer" width="100%" cellspacing="0" role="grid" aria-describedby="zctb_info" style="width: 100%;">
									<thead>
										<tr>
											<th>Order Detail</th>
											<th>Shipment Detail</th>
											<th>Buyer Review</th>
											<th>Seller Review</th>
										</tr>
									</thead>
									<tbody >
									<?php
					
							
							
							$sql = "SELECT p.*,s.*,o.*,t.*,a.book_title,a.book_mrp,b.name,b.email,b.mobno,c.name as buyer_name,c.email as buyer_email,c.mobno as buyer_mobno FROM transaction as t INNER JOIN books as a ON a.book_id = t.book_id INNER JOIN users as b ON a.user_id =  b.user_id INNER JOIN users as c ON c.user_id = t.user_id INNER JOIN book_order AS o ON o.trans_id = t.trans_id INNER JOIN shipment as s ON s.order_id = o.order_id INNER JOIN  process_record as p ON p.shipment_id = s.shipment_id";
							
							$result = $db_handle->runQuery( $sql);
							
							if ($db_handle->numRows($sql) > 0) {
									// output data of each row
									while($row = mysqli_fetch_assoc($result)) {
									?>
									<td>
											<strong>Book Title : </strong><?php echo $row["book_title"]."</br>"; ?>
											<strong>Number of Copies to Buy : </strong><?php echo $row["no_of_copies_buy"]."</br>"; ?>
											<strong>Total Price : </strong><?php echo  $row["no_of_copies_buy"]*$row["book_mrp"]."</br>"; ?>
									</td>
									<td>
											<strong>Date of Order : </strong><?php echo $row["date_of_buy"]."</br>"; ?>
											<strong>Estimated Delivery Time: </strong><?php echo $row["estimated_delivery_time"]."</br>"; ?>
											<strong>Packing Time : </strong><?php echo $row["packing_time"]."</br>"; ?>
											<strong>Dispatching Time : </strong><?php echo $row["dispatching_time"]."</br>"; ?>
											<strong>Shipment On_hand Time : </strong><?php echo $row["on_hand_time"]."</br>"; ?>
											<strong>City Reach Time : </strong><?php echo $row["city_reach_time"]."</br>"; ?>
											<strong>Delivered Time : </strong><?php echo $row["on_delivery_time"]."</br>"; ?>
									</td>
									<td>
										<?php echo $row["buyer_review"]."</br>"; ?>
									
									</td>
									<td><?php echo $row["seller_review"]."</br>"; ?></td>
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