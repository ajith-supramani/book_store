<?php
	include "header.php";
	include "sidebar.php";
	// include "db_connect.php";
	// include "dbcontroller1.php";
	// $db_handle = new DBController();
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <script> 
// $(document).ready(function(){

// $("select[name='order_status']").change(function(){
// var selectBox = document.getElementById("order_status");
// var selected = selectBox.options[selectBox.selectedIndex].value;
// var order = $("#order_id").val();
// alert(order);
// var dataString = 'order_status_id1='+ selected +'& order1='+ order;
// alert(dataString);
// $.ajax({
// type: "POST",
// url: "order.php",
// data: dataString,
// success: function(data)
// {
	// var res =$(data).find("#post").html();
	// alert(res);
// } 
// });
// });	
// });
	function cityReach(x,y){
		
		var st = document.getElementById(y).value;
		if(st == 1){
			var dt = new Date();
			var twoDigitMonth = ( (dt.getMonth() >9) === 1)? (dt.getMonth()+1) : '0' + (dt.getMonth()+1);
			var currentDate =   dt.getFullYear() + "-" + twoDigitMonth + "-" + dt.getDate() + " " + dt.getHours() + ":" + dt.getMinutes() + ":" + dt.getSeconds() ;
			var dataString = 'city_reach_status='+ st +'& shipment_id='+ x+'& city_reach_time='+ currentDate;
		}else{
			var currentDate =   0000 + "-" + 00 + "-" + 00 + " " + 00 + ":" + 00 + ":" + 00 ;
			var dataString = 'city_reach_status='+ st +'& shipment_id='+ x+'& city_reach_time='+ currentDate;
		}
		//alert(dataString);
		$.ajax({
		type: "POST",
		url: "shipment.php",
		data: dataString,
		success: function(data)
		{
			var res =$(data).find("#post").html();
			alert(res);
		} 
		});
	}
	function myDelivery(x,y,z){
		
		var st = document.getElementById("del"+y).value;
		if(st == 1){
			var dt = new Date();
			var twoDigitMonth = ( (dt.getMonth() >9) === 1)? (dt.getMonth()+1) : '0' + (dt.getMonth()+1);
			var currentDate =   dt.getFullYear() + "-" + twoDigitMonth + "-" + dt.getDate() + " " + dt.getHours() + ":" + dt.getMinutes() + ":" + dt.getSeconds() ;
			var dataString = 'delivery_status='+ st +'& shipment_id1='+ x +'& delivered_time='+ currentDate +'& order_id='+ z;
		}else{
			var currentDate =   0000 + "-" + 00 + "-" + 00 + " " + 00 + ":" + 00 + ":" + 00 ;
			var dataString = 'delivery_status='+ st +'& shipment_id1='+ x +'& delivered_time='+ currentDate;;
		}
		$.ajax({
		type: "POST",
		url: "shipment.php",
		data: dataString,
		success: function(data)
		{
			var res = $(data).find("#post").html();
			alert(res);
		} 
		});
	}
 </script>
	
	<div class="content-wrapper">
		<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h2 class="page-title">Shipment List</h2>
						
						<!-- Zero Configuration Table -->
						<div class="panel panel-default">
							<div class="panel-heading">All Shipment List</div>
							<div class="panel-body">
								<table id="zctb" class="display table-striped table-bordered table-hover no-footer" width="100%" cellspacing="0" role="grid" aria-describedby="zctb_info" style="width: 100%;">
									<thead>
										<tr>
											<th>Sender Detail</th>
											<th>Receiver Detail</th>
											<th>Shipping Detail</th>
											<th>City Reach Status</th>
											<th>Delivered Status</th>
										</tr>
									</thead>
									<tbody >
						    <?php
					
							
							if( !isset($_SESSION['seller_user_id'] )){
							$sql = "SELECT s.*,o.*,t.*,a.book_mrp,b.name,b.email,b.mobno,c.name as buyer_name,c.email as buyer_email,c.mobno as buyer_mobno FROM transaction as t INNER JOIN books as a ON a.book_id = t.book_id INNER JOIN users as b ON a.user_id =  b.user_id INNER JOIN users as c ON c.user_id = t.user_id INNER JOIN book_order AS o ON o.trans_id = t.trans_id INNER JOIN shipment as s ON s.order_id = o.order_id ";
							} else {
								$sql = "SELECT s.*,o.*,t.*,a.book_mrp,b.name,b.email,b.mobno,c.name as buyer_name,c.email as buyer_email,c.mobno as buyer_mobno FROM transaction as t INNER JOIN books as a ON a.book_id = t.book_id INNER JOIN users as b ON a.user_id =  b.user_id INNER JOIN users as c ON c.user_id = t.user_id INNER JOIN book_order AS o ON o.trans_id = t.trans_id INNER JOIN shipment as s ON s.order_id = o.order_id WHERE  a.user_id = '".$_SESSION['seller_user_id'] ."'";
							}	
							$result = $db_handle->runQuery($sql);
							$cnt=0;
							$i=0;

								if ($db_handle->numRows($sql) > 0) {
									// output data of each row
									while($row = mysqli_fetch_assoc($result)) {
									
										?>		
									<tr style="font_size:0.8em">	
										<td>
											<strong>Sender Name : </strong><?php echo $row["name"]."</br>"; ?>
											<strong>Sender Mail ID : </strong><?php echo $row["email"]."</br>"; ?>
											<strong>Sender Contact Number : </strong><?php echo $row["mobno"]."</br>"; ?>
											<strong>Sender Contact Address : </strong><?php echo $row["mobno"]."</br>"; ?>
											
											
										</td>
										<td>
											<strong>Receiver Name : </strong><?php echo $row["buyer_name"]."</br>"; ?>
											<strong>Receiver Mail ID : </strong><?php echo $row["buyer_email"]."</br>"; ?>
											<strong>Receiver Contact Number : </strong><?php echo $row["buyer_mobno"]."</br>"; ?>
											<strong>Receiver Contact Address : </strong><?php echo $row["buyer_mobno"]."</br>"; ?>
										</td>
										<td>
											<strong>Shipping Company Name : </strong><?php echo $row["shipping_company_name"]."</br>"; ?>
											<strong>Shipping Company Contact Number : </strong><?php echo $row["shipping_company_cno"]."</br>"; 
											if($row["payment_id"] == 1){?>
											<strong>Total Purchase Amount : </strong><?php echo $row["no_of_copies_buy"]*$row["book_mrp"]."</br>"; }?>
											<strong>On Hand Time : </strong><?php echo $row["on_hand_time"]."</br>"; ?>
											<strong>Estimated Delivery Time : </strong><?php echo $row["estimated_delivery_time"]."</br>"; ?>
										</td>
										<td>
											<?php 
												if(isset($_POST["city_reach_status"])){
													if($row["shipment_id"] == $_POST['shipment_id']){
												$city_reach_status = $_POST['city_reach_status'];
												$shipment_id = $_POST['shipment_id'];
												$ord1="UPDATE shipment SET city_reach_status = '".$city_reach_status."',city_reach_time = '".$_POST["city_reach_time"]."' WHERE shipment_id = '".$shipment_id."'";
												if($db_handle->runQuery( $ord1)){
													$notify_book = "SELECT a.book_title,t.no_of_copies_buy,bo.order_id FROM book_order AS bo INNER JOIN transaction as t ON bo.trans_id = t.trans_id INNER JOIN books as a ON a.book_id = t.book_id INNER JOIN shipment as s ON s.order_id = bo.order_id  WHERE s.shipment_id = '".$shipment_id."'";
				
				$notify_book_result = $db_handle->runQuery($notify_book);
				$notify_book_result_row = mysqli_fetch_assoc($notify_book_result);
				$notification_msg = "Your Order for the book ".$notify_book_result_row["book_title"]."( Quantity :".$notify_book_result_row["no_of_copies_buy"]." ) is reached your nearer city and you will receive your order soon";
				$notification_order_id = $notify_book_result_row["order_id"];
				
				$notification_con = "INSERT INTO notification (  notification_msg , notification_status , order_id  ,notification_time) VALUES ( '$notification_msg' , 0 , $notification_order_id  , '$time' )";
				if($db_handle->runQuery( $notification_con)){
											?>
											<div id="post"><?php echo "City Reaches Status Updated Successfully";?></div>
				<?php} else { ?><div id="post"><?php echo $notification_con;?></div>
				<?php }
												} else {
												?>
											<div id="post"><?php echo $ord1;?></div>
											<?php	
												}	
												}
												}
												?>
											<select class="form-control" id="<?php echo $i; ?>" onchange="cityReach(<?php echo $row['shipment_id'] ?>,<?php echo $i; ?>) ">
												<option value="1" <?php if($row['city_reach_status'] == 1){ echo("selected");}?>>Reached</option>
												<option value="0" <?php if($row['city_reach_status'] == 0){ echo("selected");}?>>Not Yet Reached</option>
											</select>
										</td>
										<td>
	<?php 
		if(isset($_POST["delivery_status"])){
			if($row['shipment_id'] == $_POST['shipment_id1']) {
		$delivery_status = $_POST['delivery_status'];
		$shipment_id1 = $_POST['shipment_id1'];
		
		$ord1="UPDATE shipment SET delivery_status = '".$delivery_status."',on_delivery_time = '".$_POST["delivered_time"]."' WHERE shipment_id = '".$shipment_id1."'";
		$time = $_POST["delivered_time"];
		$db_handle->runQuery($ord1);
		if(isset($_POST["order_id"])){
			$order_id = $_POST['order_id'];
			$ord2="UPDATE book_order SET order_status = 4 WHERE order_id = '".$order_id."'";
			if($db_handle->runQuery($ord2)){
				$notify_book = "SELECT a.book_title,t.no_of_copies_buy FROM book_order AS bo INNER JOIN transaction as t ON bo.trans_id = t.trans_id INNER JOIN books as a ON a.book_id = t.book_id WHERE bo.order_id = '".$order_id."'";

$notify_book_result = $db_handle->runQuery($notify_book);
$notify_book_result_row = mysqli_fetch_assoc($notify_book_result);
$notification_msg = "Your Order for the book ".$notify_book_result_row["book_title"]."( Quantity :".$notify_book_result_row["no_of_copies_buy"]." ) is deliverd to your desired address and Thank you for selecting books of us";

$notification_con = "INSERT INTO notification (  notification_msg , notification_status , order_id  ,notification_time) VALUES ( '$notification_msg' , 0 , $order_id  , '$time' )";
$db_handle->runQuery($notification_con);
			}	
		}
		
		
	?>
	<div id="post"><?php echo "Delivered Status Updated Successfully";?></div>
	<?php
		}
		}
		?>
											<select class="form-control" id="del<?php echo $i; ?>" onchange="myDelivery(<?php echo $row['shipment_id'] ?>,<?php echo $i; ?>,<?php echo $row['order_id']; ?>) ">
												<option value="1" <?php if($row['delivery_status'] == 1){ echo("selected");}?>>Delivered</option>
												<option value="0" <?php if($row['delivery_status'] == 0){ echo("selected");}?>>Not Yet Delivered</option>
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