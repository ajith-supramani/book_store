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

						<h2 class="page-title">Dashboard</h2>
						
						<div class="row">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-primary text-light">
												<div class="stat-panel text-center">
													<div class="stat-panel-number h1 ">
														<?php
														$num_rows = $db_handle->numRows("SELECT a.book_id FROM books as a INNER JOIN users as b ON a.user_id =  b.user_id WHERE a.user_id='".$_SESSION['seller_user_id']."'");
														//$num_rows = mysqli_num_rows($result);
														echo $num_rows;

														?>
													</div>
													<div class="stat-panel-title text-uppercase">Total Books</div>
												</div>
											</div>
											<a href="book_index.php" class="block-anchor panel-footer">Full Detail <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-success text-light">
												<div class="stat-panel text-center">
													<div class="stat-panel-number h1 "><?php
														$num_rows = $db_handle->numRows("SELECT o.order_id FROM transaction as t INNER JOIN books as a ON a.book_id = t.book_id INNER JOIN users as b ON a.user_id =  b.user_id INNER JOIN users as c ON c.user_id = t.user_id INNER JOIN book_order AS o ON o.trans_id = t.trans_id WHERE  a.user_id = '".$_SESSION['seller_user_id'] ."' ");
														//$num_rows = mysqli_num_rows($result);
														echo $num_rows;

														?></div>
													<div class="stat-panel-title text-uppercase">Total Orders</div>
												</div>
											</div>
											<a href="order.php" class="block-anchor panel-footer text-center">See All &nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-info text-light">
												<div class="stat-panel text-center">
													<div class="stat-panel-number h1 "><?php
														$num_rows = $db_handle->numRows("SELECT o.order_id FROM transaction as t INNER JOIN books as a ON a.book_id = t.book_id INNER JOIN users as b ON a.user_id =  b.user_id INNER JOIN users as c ON c.user_id = t.user_id INNER JOIN book_order AS o ON o.trans_id = t.trans_id WHERE  a.user_id = '".$_SESSION['seller_user_id'] ."' AND o.order_status=1 ");
														//$num_rows = mysqli_num_rows($result);
														echo $num_rows;

														?></div>
													<div class="stat-panel-title text-uppercase">Pending</div>
												</div>
											</div>
											<a href="order.php?order_status=1" class="block-anchor panel-footer text-center">See All &nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-warning text-light">
												<div class="stat-panel text-center">
													<div class="stat-panel-number h1 "><?php
														$num_rows = $db_handle->numRows("SELECT o.order_id FROM transaction as t INNER JOIN books as a ON a.book_id = t.book_id INNER JOIN users as b ON a.user_id =  b.user_id INNER JOIN users as c ON c.user_id = t.user_id INNER JOIN book_order AS o ON o.trans_id = t.trans_id WHERE  a.user_id = '".$_SESSION['seller_user_id'] ."' AND o.order_status=4 ");
														//$num_rows = mysqli_num_rows($result);
														echo $num_rows;

														?></div>
													<div class="stat-panel-title text-uppercase">Delivered</div>
												</div>
											</div>
											<a href="order.php?order_status=4" class="block-anchor panel-footer text-center">See All &nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-6">
								<div class="panel panel-default">
									<div class="panel-heading">Orders Per City</div>
									<div class="panel-body">
										<div class="chart">
											<canvas id="dashReport" height="310" width="600"></canvas>
										</div>
										<div id="legendDiv"></div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="panel panel-default">
									<div class="panel-heading">Recent Oreders</div>
									<div class="panel-body">
										<div class="alert alert-dismissible alert-success">
											<button type="button" class="close" data-dismiss="alert"><i class="fa fa-close"></i></button>
											<strong>Well done!</strong> You successfully read <a href="#" class="alert-link">this important alert message</a>.
										</div>
										<table class="table table-hover">
											<thead>
												<tr>
													<th>Book Name</th>
													<th>Buyer Name</th>
													<th>Quantity</th>
													<th>Approval Status</th>
												</tr>
											</thead>
											<tbody>
											<?php
											$sql = "SELECT o.seller_approval_status,o.order_id,t.no_of_copies_buy,a.book_title,a.book_mrp,c.name as buyer_name FROM transaction as t INNER JOIN books as a ON a.book_id = t.book_id INNER JOIN users as b ON a.user_id =  b.user_id INNER JOIN users as c ON c.user_id = t.user_id INNER JOIN book_order AS o ON o.trans_id = t.trans_id WHERE o.seller_approval_status=0 AND b.user_id = '".$_SESSION['seller_user_id']."'";
											$result = $db_handle->runQuery($sql);
											if ($db_handle->numRows($sql) > 0) {
												while($row = mysqli_fetch_assoc($result)) {
									
											?>	
											
												<tr>
													<th scope="row"><?php echo $row['book_title'];?></th>
													<td><?php echo $row['buyer_name'];?></td>
													<td><?php echo $row['no_of_copies_buy'];?></td>
													<td><a href="order.php?ord_id=<?php echo $row['order_id'];?>">Not Yet Approved</a></td>
												</tr>
												<?php 
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
						<input id="color1" type="hidden" value="#F7464A"></input>
						<input id="highlight1" type="hidden"  value="#FF5A5E"></input>
						<input id="label1" type="hidden"  value="Red"></input>
						<input id="color2" type="hidden"  value="#46BFBD"></input>
						<input id="highlight2" type="hidden" value="#5AD3D1"></input>
						<input id="label2" type="hidden" value="Green"></input>
						<input id="color3" type="hidden" value="#FDB45C"></input>
						<input id="highlight3" type="hidden" value="#FFC870"></input>
						<input id="label3" type="hidden" value="Yellow"></input>
						<input id="color4" type="hidden" value="#001f3f"></input>
						<input id="highlight4" type="hidden" value="#FF5A5E"></input>
						<input id="label4" type="hidden" value="Red"></input>
						<input id="color5" type="hidden" value="#01FF70"></input>
						<input id="highlight5" type="hidden" value="#FF5A5E"></input>
						<input id="label5" type="hidden" value="Green"></input>
						<input id="color6" type="hidden" value="#7FDBFF"></input>
						<input id="highlight6" type="hidden" value="#FF5A5E"></input>
						<input id="label6" type="hidden" value="Yellow"></input>
						<input id="color7" type="hidden" value="#FFDC00"></input>
						<input id="highlight7" type="hidden" value="#FF5A5E"></input>
						<input id="label7" type="hidden" value="Red"></input>
						<input id="color8" type="hidden" value="#800080"></input>
						<input id="highlight8" type="hidden" value="#FF5A5E"></input>
						<input id="label8" type="hidden" value="Green"></input>
						<input id="color9" type="hidden" value="#CD5C5C"></input>
						<input id="highlight9" type="hidden" value="#FF5A5E"></input>
						<input id="label9" type="hidden" value="Yellow"></input>
						<input id="color10" type="hidden" value=""></input>
						<input id="highlight10" type="hidden" value="#FF5A5E"></input>
						<input id="label10" type="hidden" value="Red"></input>
						<input id="color11" type="hidden" value=""></input>
						<input id="highlight11" type="hidden" value="#FF5A5E"></input>
						<input id="label11" type="hidden" value="Green"></input>
						<div class="row">
							<div class="col-md-6">
								<div class="panel panel-default">
									<div class="panel-heading">Orders Per Book</div>
									<div class="panel-body">
										<div class="row">
											<div class="col-md-4">
												<ul class="chart-dot-list">
												<?php
														$sql = "SELECT a.book_title FROM books as a INNER JOIN users as b ON a.user_id =  b.user_id WHERE a.user_id='".$_SESSION['seller_user_id']."'";
														$result = $db_handle->runQuery($sql);
														if ($db_handle->numRows($sql) > 0) {
															$i = 0;
														while($row = mysqli_fetch_assoc($result)) {
															$i++;
														?>
													<li class="a<?php echo $i;?>"><?php echo $row['book_title']; ?></li>
													
													<?php 
												}
											} else {
												echo "0 results";
											}
											
											
											?>
												</ul>
											</div>
											<div class="col-md-8">
												<div class="chart chart-doughnut">
													<canvas id="chart-area3" width="1200" height="900" />
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							<div class="col-md-6">
								<div class="panel panel-default">
									<div class="panel-heading">Seller Income Per Book</div>
									<div class="panel-body">
										<div class="row">
											<div class="col-md-4">
												<ul class="chart-dot-list">
												
													<?php
														$sql = "SELECT Distinct(a.book_id),a.book_title FROM transaction as t INNER JOIN books as a ON a.book_id = t.book_id INNER JOIN users as b ON a.user_id =  b.user_id INNER JOIN users as c ON c.user_id = t.user_id INNER JOIN book_order AS o ON o.trans_id = t.trans_id WHERE  a.user_id = '".$_SESSION['seller_user_id'] ."' AND o.order_status=4"
														$result = $db_handle->runQuery($sql);
														if ($db_handle->numRows($sql) > 0) {
															$i = 0;
															while($row = mysqli_fetch_assoc($result)) {
																$i++;
														?>
													<li class="a<?php echo $i;?>"><?php echo $row['book_title']; ?></li>
													
													<?php 
															}
														} else {
															echo "0 results";
														}
													?>
												</ul>
											</div>
											<div class="col-md-8">
												<div class="chart chart-doughnut">
													<canvas id="chart-area4" width="1200" height="900" />
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>

			</div>
		</div>
	</div>
	
<?php
	include "footer.php";
?>