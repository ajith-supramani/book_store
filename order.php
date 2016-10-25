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
			<h2 class="page-title">Order List</h2>	
			<!-- Zero Configuration Table -->
			<div class="panel panel-default">
				<div class="panel-heading">All Order List</div>
					<div class="panel-body">
						<table id="zctb" class="display table-striped table-bordered table-hover no-footer" width="100%" cellspacing="0" role="grid" aria-describedby="zctb_info" style="width: 100%;">
							<thead>
								<tr>
									<th>Order Detail</th>
									<th>Payment Mode</th>
									<th>Transaction Status</th>
									<th>Buyer Order Confirmation</th>
									<th>Seller Approval Status</th>
									<th>Estimated Delivery Time</th>
									<th>Order Status</th>
								</tr>
							</thead>
							<tbody >
		<?php

		
		if( !isset($_SESSION['seller_user_id'] )){
			if( !isset($_GET['ord_id'] )){	
			$sql = "SELECT o.*,t.*,a.book_id,a.book_isbn,a.book_title,a.book_catagory,a.book_language,a.book_mrp,a.book_publisher_name,a.book_published_date,a.user_id ,b.*,c.user_id as buyer_id,c.name as buyer_name,c.email as buyer_email,c.mobno as buyer_mobno FROM transaction as t INNER JOIN books as a ON a.book_id = t.book_id INNER JOIN users as b ON a.user_id =  b.user_id INNER JOIN users as c ON c.user_id = t.user_id INNER JOIN book_order AS o ON o.trans_id = t.trans_id";
			} else {
			$sql = "SELECT o.*,t.*,a.book_id,a.book_isbn,a.book_title,a.book_catagory,a.book_language,a.book_mrp,a.book_publisher_name,a.book_published_date,a.user_id ,b.*,c.user_id as buyer_id,c.name as buyer_name,c.email as buyer_email,c.mobno as buyer_mobno FROM transaction as t INNER JOIN books as a ON a.book_id = t.book_id INNER JOIN users as b ON a.user_id =  b.user_id INNER JOIN users as c ON c.user_id = t.user_id INNER JOIN book_order AS o ON o.trans_id = t.trans_id WHERE o.order_id='".$_GET['ord_id'] ."'";
			}
					
		} else {
			if(!isset($_GET['order_status'])){
				if( !isset($_GET['ord_id'] )){
			$sql = "SELECT o.*,t.*,a.book_id,a.book_isbn,a.book_title,a.book_catagory,a.book_language,a.book_mrp,a.book_publisher_name,a.book_published_date,a.user_id ,b.*,c.user_id as buyer_id,c.name as buyer_name,c.email as buyer_email,c.mobno as buyer_mobno FROM transaction as t INNER JOIN books as a ON a.book_id = t.book_id INNER JOIN users as b ON a.user_id =  b.user_id INNER JOIN users as c ON c.user_id = t.user_id INNER JOIN book_order AS o ON o.trans_id = t.trans_id WHERE  a.user_id = '".$_SESSION['seller_user_id'] ."' ORDER BY o.order_id";
			} else{
				$sql = "SELECT o.*,t.*,a.book_id,a.book_isbn,a.book_title,a.book_catagory,a.book_language,a.book_mrp,a.book_publisher_name,a.book_published_date,a.user_id ,b.*,c.user_id as buyer_id,c.name as buyer_name,c.email as buyer_email,c.mobno as buyer_mobno FROM transaction as t INNER JOIN books as a ON a.book_id = t.book_id INNER JOIN users as b ON a.user_id =  b.user_id INNER JOIN users as c ON c.user_id = t.user_id INNER JOIN book_order AS o ON o.trans_id = t.trans_id WHERE  a.user_id = '".$_SESSION['seller_user_id'] ."' AND o.order_id='".$_GET['ord_id'] ."'";
			}
			} else {
				$sql = "SELECT o.*,t.*,a.book_id,a.book_isbn,a.book_title,a.book_catagory,a.book_language,a.book_mrp,a.book_publisher_name,a.book_published_date,a.user_id ,b.*,c.user_id as buyer_id,c.name as buyer_name,c.email as buyer_email,c.mobno as buyer_mobno FROM transaction as t INNER JOIN books as a ON a.book_id = t.book_id INNER JOIN users as b ON a.user_id =  b.user_id INNER JOIN users as c ON c.user_id = t.user_id INNER JOIN book_order AS o ON o.trans_id = t.trans_id WHERE  a.user_id = '".$_SESSION['seller_user_id'] ."' AND o.order_status='".$_GET['order_status']."'";
			}	
		}
							
		$result = $db_handle->runQuery( $sql);
		$cnt=0;
		$i=0;

				if ($db_handle->numRows($sql) > 0) {
					// output data of each row
					while($row = mysqli_fetch_assoc($result)) {
					
						?>		
					<tr style="font_size:0.8em">	
						<td>
							<strong>Book ISBN : </strong><?php echo $row["book_isbn"]."</br>"; ?>
							<strong>Book Title : </strong><?php echo $row["book_title"]."</br>"; ?>
							<strong>Book Price : </strong><?php echo $row["book_mrp"]."</br>"; ?>
							<strong>Number of Copies to Buy : </strong><?php echo $row["no_of_copies_buy"]."</br>"; ?>
							<strong>Total Price : </strong><?php echo  $row["no_of_copies_buy"]*$row["book_mrp"]."</br>"; ?>
							<strong>Buyer : </strong><?php echo $row["buyer_name"]."</br>"; ?>
							<strong>Seller : </strong><?php echo $row["name"]."</br>"; ?>
							<strong>Date of Order : </strong><?php echo $row["date_of_buy"]."</br>"; ?>
						</td>
						<td>
						
									<?php 
										$ord = "SELECT  * FROM payment_master ";
										$result1 = $db_handle->runQuery($ord);
										if ($db_handle->numRows($ord) > 0) {
											
											while($row1 = mysqli_fetch_assoc($result1)) {
												
												if($row1["payment_id"] == $row["payment_id"]){
													echo $row1["payment_status"];
												}
											}
										} else {
											echo "0 results";
										}

										
									?>
								</select>
						</td>
						<td>
							<?php echo ($row['trans_status'] == 1) ? 'Completed' : 'Pending';?>
						</td>
						<td>
							<?php echo ($row['buyer_order_confirmation'] == 1) ? 'Confirmed' : 'Not Confirmed';?>
						</td>
						<td>
	<?php 
	
	if(isset($_POST["seller_aproval_status"])){
		if($row['order_id'] == $_POST['order2']){
			$seller_status1 = $_POST['seller_aproval_status'];
			$order2 = $_POST['order2'];
			$notify_time = $_POST['notify_time'];
			$ord2="UPDATE book_order SET seller_approval_status = '".$seller_status1."' , order_status = 1 WHERE order_id = '".$order2."'";
			if($db_handle->runQuery($ord2)){
				
				$notify_book = "SELECT a.book_title,t.no_of_copies_buy FROM book_order AS bo INNER JOIN transaction as t ON bo.trans_id = t.trans_id INNER JOIN books as a ON a.book_id = t.book_id WHERE bo.order_id = '".$order2."'";
				
				$notify_book_result = $db_handle->runQuery(notify_book);
				$notify_book_result_row = mysqli_fetch_assoc($notify_book_result);
				$notification_msg = "Your Order for the book ".$notify_book_result_row["book_title"]."( Quantity :".$notify_book_result_row["no_of_copies_buy"]." ) is Approved by seller and you will receive your order as soon";
				
				$notification_con = "INSERT INTO notification (  notification_msg , notification_status , order_id  ,notification_time) VALUES ( '$notification_msg' , 0 , $order2  , '$notify_time' )";
				if($db_handle->runQuery($notification_con)){
				
	?>				<div id="post1">
					<?php echo "Seller Approval Status is updated successfully.";?></div>
				<?php } else { ?>
							<div id="post1"><?php echo $notification_con;?></div>
				<?php }
			} else { ?>
				<div id="post1"><?php echo $ord2;?></div>
				<?php
				
			}
		}
	}	
		?>
								
								
								<select name="seller_approval_status" class="" id="<?php echo "sa".$i; ?>" onchange="sellerStatus(<?php echo $row['order_id'] ?>,<?php echo $i; ?>) ">
									<option>Select Order Status</option>
									
									<option value="0" <?php if($row['seller_approval_status']==0){echo("selected");}?>>Not Yet Approved</option>
									<option value="1" <?php if($row['seller_approval_status']==1){echo("selected");}?>>Approved</option>
									
								</select>
						</td>
						<td style="text-align: center;">
						<?php 
										if(isset($_POST["estimated_date1"])){
											if($_POST['order3'] == $row['order_id']){
											$estimated_date1 = $_POST['estimated_date1'];
											$order3 = $_POST['order3'];
											$ord3="UPDATE book_order SET estimated_delivery_time='".$estimated_date1."' WHERE order_id='".$order3."'";
											$db_handle->runQuery( $ord3);
											}
										}
								?>
						
							 <div id="est_date"><?php echo $row["estimated_delivery_time"]; ?></div>
							<input type="hidden" id="o_id1" value="<?php echo $row["order_id"]; ?>"/>
							
						<a href="javascript://" data-toggle="tooltip" class="btn  btn-xs btn-info" data-placement="right" title="To add estimated delivery time"  >
						<span class="glyphicon glyphicon-plus add" data-toggle="modal" data-target="#myModal<?php echo $i;?>"></span> </a>
						
						<div class="modal fade" id="myModal<?php echo $i;?>" role="dialog">
							<div class="modal-dialog">
							
							  <div class="modal-content">
								<div class="modal-header">
								  <button type="button" class="close" data-dismiss="modal">&times;</button>
								  <h4 class="modal-title">Add Estimated Time </h4>
								</div>
							   <div class="modal-body">
									<div class="form-group">
									  <label for="e_time" class="form-control-label">Estimated Time:</label>
									  <input type="date" class="form-control" id="e_time<?php echo $i;?>" /></br>
									  <input type="hidden" class="form-control" value="<?php echo $row["order_id"]; ?>" id="ord_id1<?php echo $i;?>" ></br>
									</div>
								</div>
								<div class="modal-footer">
								  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								  <button type="button" name="time_sav" class="btn btn-primary" onclick="estimated_time(<?php echo $row['order_id'] ?>,<?php echo $i; ?>)">Save</button>
								
								</div>
							  </div>
							  
							</div>
						</div>
						</td>
						<td>
				<?php 
						if(isset($_POST["order_status_id1"])){
							if($row['order_id'] == $_POST['order1']){
							$order_status1 = $_POST['order_status_id1'];
							$order1 = $_POST['order1'];
							$time = $_POST['time'];
							if($order_status1 == 2){
								$ord1="UPDATE book_order SET order_status = '".$order_status1."',packing_time = '".$time."',dispatching_time = '0000-00-00 00:00:00' WHERE order_id = '".$order1."'";
							} elseif($order_status1 == 3){
								$ord1="UPDATE book_order SET order_status = '".$order_status1."',dispatching_time = '".$time."' WHERE order_id = '".$order1."'";
							} elseif($order_status1 == 4){
								$ord1="UPDATE book_order SET order_status = '".$order_status1."' WHERE order_id = '".$order1."'";
								
								$ord11="UPDATE shipment SET delivery_status = '1',on_delivery_time = '".$time."' WHERE order_id = '".$order1."'";
								$db_handle->runQuery( $ord11);
							} else{
							$ord1="UPDATE book_order SET order_status = '".$order_status1."' WHERE order_id = '".$order1."'";
							}
							$db_handle->runQuery($ord1);
							if($order_status1 == 3){
								$notify_book = "SELECT a.book_title,t.no_of_copies_buy FROM book_order AS bo INNER JOIN transaction as t ON bo.trans_id = t.trans_id INNER JOIN books as a ON a.book_id = t.book_id WHERE bo.order_id = '".$order1."'";

$notify_book_result = $db_handle->runQuery($notify_book);
$notify_book_result_row = mysqli_fetch_assoc($notify_book_result);
$notification_msg = "Your Order for the book ".$notify_book_result_row["book_title"]."( Quantity :".$notify_book_result_row["no_of_copies_buy"]." ) is dispatched by seller and you will receive your order soon";

$notification_con = "INSERT INTO notification (  notification_msg , notification_status , order_id  ,notification_time) VALUES ( '$notification_msg' , 0 , $order1  , '$time' )";
$db_handle->runQuery($notification_con);
							} else if($order_status1 == 4){
								$notify_book = "SELECT a.book_title,t.no_of_copies_buy FROM book_order AS bo INNER JOIN transaction as t ON bo.trans_id = t.trans_id INNER JOIN books as a ON a.book_id = t.book_id WHERE bo.order_id = '".$order1."'";

$notify_book_result = $db_handle->runQuery($notify_book);
$notify_book_result_row = mysqli_fetch_assoc($notify_book_result);
$notification_msg = "Your Order for the book ".$notify_book_result_row["book_title"]."( Quantity :".$notify_book_result_row["no_of_copies_buy"]." ) is deliverd to your desired address and Thank you for selecting books of us";

$notification_con = "INSERT INTO notification (  notification_msg , notification_status , order_id  ,notification_time) VALUES ( '$notification_msg' , 0 , $order1  , '$time' )";
$db_handle->runQuery($notification_con);
							}	
?>				
							
							<div id="post">Order Status Updated</div>
							<?php
							}
						}
				?>
								
								
								<select name="order_status" class="" id="<?php echo $i; ?>" onchange="myFunction(<?php echo $row['order_id'] ?>,<?php echo $i; ?>) ">
									<option>Select Order Status</option>
									<?php 
										$ord = "SELECT  * FROM order_master ";
										$result1 = $db_handle->runQuery($ord);
										if ($db_handle->numRows($ord) > 0) {
											while($row1 = mysqli_fetch_assoc($result1)) {
											
									?>
									
									<option value="<?php echo $row1["order_status_id"]; ?>" <?php if($row['order_status'] == $row1["order_status_id"]){echo("selected");}?>><?php echo $row1["order_status"]; ?></option>
									
									
									<?php   }
											} else {
												echo "0 results";
											}
									

										
									?>
								</select>
								<?php 
										if(isset($_POST["shipment_company"])){
											if($_POST['or'] == $row['order_id']){
											$shipment_company = $_POST['shipment_company'];
											$shipment_contact_no = $_POST['shipment_contact_no'];
											$on_hand_time = $_POST['on_hand_time'];
											$order_id = $_POST['or'];
											$ord4="INSERT INTO shipment (shipping_company_name,shipping_company_cno,on_hand_time,order_id) VALUES ('$shipment_company',$shipment_contact_no,'$on_hand_time',$order_id)";
											if ($db_handle->runQuery( $ord4)) {
												echo "New record created successfully";
												} else {
												echo "Error: " . $sql . "<br>" . mysqli_error($this->conn);
												}
								?>
											
											<div id="post3"><?php echo $ord4;?></div>
											<?php
											}
										}
								?>
						<div class="modal fade" id="shipment_details" role="dialog">
							<div class="modal-dialog">
							
							  <div class="modal-content">
								<div class="modal-header">
								  <button type="button" class="close" data-dismiss="modal">&times;</button>
								  <h4 class="modal-title">Add Shipment Detail </h4>
								</div>
							   <div class="modal-body">
									<div class="form-group">
									  <label for="shipment_company<?php echo $i;?>" class="form-control-label">Shipment Company Name:</label>
									  <input type="text" class="form-control" id="shipment_company<?php echo $i;?>" ></br>
									  <label for="shipment_contact_no<?php echo $i;?>" class="form-control-label">Shipment Contact Number:</label>
									  <input type="text" class="form-control" id="shipment_contact_no<?php echo $i;?>" ></br>
									  
									  <input type="hidden" id="or<?php echo $i;?>" class="form-control" value="<?php echo $row["order_id"]; ?>" ></br>
									</div>
								</div>
								<div class="modal-footer">
								  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								  <button type="button" name="shipment_save" class="btn btn-primary" onclick="shipment_update(<?php echo $row['order_id'] ?>,<?php echo $i; ?>) ">Save</button>
								
								</div>
							  </div>
							  
							</div>
						</div>
						</td>
					</tr>
					<?php $i++;
					}
				} else {
					echo "0 results";
				}
								
								
								?>
							</tbody>
						</table>

					</div>
			</div>

		</div>
	</div>
	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <script> 
// $(document).ready(function(){

// $("button[name='time_sav']").click(function(){ 

// var e_time=$("#e_time").val();
// var o_id=$("#o_id1").val();
// var dataString = "estimated_date1="+e_time+"&order3="+o_id;
// alert(dataString);
// $.ajax({
// type:"post",
// url:"order.php",
// data: dataString,
// success:function(data)
// { 
 // var res =$(data).find("#post2").html();
 // alert(res);
 // $("#myModal").modal('hide');
 // window.location.reload();
// }
// });

// });	
	

// });
function estimated_time(x,y){
	
	var e_time=$("#e_time"+y+"").val();
var ord_id=$("#ord_id1"+y+"").val();
var dataString = "estimated_date1="+e_time+"&order3="+ord_id;
$.ajax({
type:"post",
url:"order.php",
data: dataString,
success:function(data)
{ 
 $("#myModal").modal('hide');
 window.location.reload();
}
});
}
function myFunction(x,y){
	
	var st = document.getElementById(y).value;
	var dt = new Date();
	var twoDigitMonth = ( (dt.getMonth() >9) === 1)? (dt.getMonth()+1) : '0' + (dt.getMonth()+1);
	var currentDate =   dt.getFullYear() + "-" + twoDigitMonth + "-" + dt.getDate() + " " + dt.getHours() + ":" + dt.getMinutes() + ":" + dt.getSeconds() ;
	var dataString = 'order_status_id1='+ st +'& order1='+ x +'& time='+ currentDate;
	
	$.ajax({
	type: "POST",
	url: "order.php",
	data: dataString,
	success: function(data)
	{
		var res =$(data).find("#post").html();
		alert(res);
		if (st == 3) {
        $('#shipment_details').modal('show');
		}
	} 
	});
}
function shipment_update(x,y){
	
	var shipment_company=$("#shipment_company"+y+"").val();
var shipment_contact_no=$("#shipment_contact_no"+y+"").val();
var or=$("#or"+y+"").val();
var dt1 = new Date();
	var twoDigitMonth = ( (dt1.getMonth() >9) === 1)? (dt1.getMonth()+1) : '0' + (dt1.getMonth()+1);
	var on_hand_time =   dt1.getFullYear() + "-" + twoDigitMonth + "-" + dt1.getDate() + " " + dt1.getHours() + ":" + dt1.getMinutes() + ":" + dt1.getSeconds() ;
var dataString = "shipment_company="+shipment_company+"&shipment_contact_no="+shipment_contact_no+"&on_hand_time="+on_hand_time+"&or="+or;

$.ajax({
type:"post",
url:"order.php",
data: dataString,
success:function(data)
{ 
 var res =$(data).find("#post3").html();
 alert(res);
 $("#shipment_details").modal('hide');
 window.location.reload();
}
});
}
function sellerStatus(x,y){
	var ss = "sa"+y;
	var st = document.getElementById(ss).value;
	var dt1 = new Date();
	var twoDigitMonth = ( (dt1.getMonth() >9) === 1)? (dt1.getMonth()+1) : '0' + (dt1.getMonth()+1);
	var notify_time =   dt1.getFullYear() + "-" + twoDigitMonth + "-" + dt1.getDate() + " " + dt1.getHours() + ":" + dt1.getMinutes() + ":" + dt1.getSeconds() ;
	var dataString = 'seller_aproval_status='+ st +'& order2='+ x+'& notify_time='+ notify_time ;
	
	$.ajax({
	type: "POST",
	url: "order.php",
	data: dataString,
	success: function(data)
	{
		var res =$(data).find("#post1").html();
		alert(res);
	} 
	});

}
 </script>

<?php
	include "footer.php";
?>