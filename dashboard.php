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
														$sql_usr = "SELECT a.user_id FROM Users as a INNER JOIN user_role as b ON a.user_role_id = b.user_role_id WHERE a.user_status=1 AND b.user_role_status=1 AND b.user_role_id!=1";
														$num_rows = $db_handle->numRows($sql_usr);
														echo $num_rows;
														?>
													</div>
													<div class="stat-panel-title text-uppercase">Total Users</div>
												</div>
											</div>
											<a href="users.php" class="block-anchor panel-footer">Full Detail <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-success text-light">
												<div class="stat-panel text-center">
													<div class="stat-panel-number h1 "><?php
														$sql_bo = "SELECT book_id FROM books as a INNER JOIN users as b ON a.user_id = b.user_id WHERE b.user_status=1 ";
														$num_rows = $db_handle->numRows($sql_bo);
														echo $num_rows;

														?></div>
													<div class="stat-panel-title text-uppercase">Total Books</div>
												</div>
											</div>
											<a href="book_index.php" class="block-anchor panel-footer text-center">See All &nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-info text-light">
												<div class="stat-panel text-center">
													<div class="stat-panel-number h1 "><?php
														
														$result2 = $db_handle->runQuery("SELECT SUM(t.no_of_copies_buy) as total_copy FROM transaction as t INNER JOIN books as a ON a.book_id = t.book_id INNER JOIN users as b ON a.user_id =  b.user_id INNER JOIN users as c ON c.user_id = t.user_id INNER JOIN book_order AS o ON o.trans_id = t.trans_id WHERE o.seller_approval_status=1 ");
														$row1 = mysqli_fetch_assoc($result2);
														echo $row1['total_copy'];
														?></div>
													<div class="stat-panel-title text-uppercase">Ordered Quantity </div>
												</div>
											</div>
											<a href="transaction.php" class="block-anchor panel-footer text-center">See All &nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-warning text-light">
												<div class="stat-panel text-center">
													<div class="stat-panel-number h1 ">&#8377;<?php
														
														$result3 = $db_handle->runQuery("SELECT SUM(t.no_of_copies_buy * a.book_mrp * 0.15) as profit FROM transaction as t INNER JOIN books as a ON a.book_id = t.book_id INNER JOIN users as b ON a.user_id =  b.user_id INNER JOIN users as c ON c.user_id = t.user_id INNER JOIN book_order AS o ON o.trans_id = t.trans_id WHERE o.order_status=4 ");
														$row2 = mysqli_fetch_assoc($result3);
														echo $row2['profit'];
														?></div>
													<div class="stat-panel-title text-uppercase">Total Revenue</div>
												</div>
											</div>
											<a href="#" class="block-anchor panel-footer text-center">See All &nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-6">
								<div class="panel panel-default">
									<div class="panel-heading">Seller Income Per City</div>
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
									<div class="panel-heading">Orders list(Not Yet Approved)</div>
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
											$sql = "SELECT o.seller_approval_status,o.order_id,t.no_of_copies_buy,a.book_title,a.book_mrp,c.name as buyer_name FROM transaction as t INNER JOIN books as a ON a.book_id = t.book_id INNER JOIN users as b ON a.user_id =  b.user_id INNER JOIN users as c ON c.user_id = t.user_id INNER JOIN book_order AS o ON o.trans_id = t.trans_id WHERE o.seller_approval_status=0 ";
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
						
						<div class="row">
							<div class="col-md-6">
								<div class="panel panel-default">
									<div class="panel-heading">Orders Per Seller</div>
									<div class="panel-body">
										<div class="row">
											<div class="col-md-4">
												<ul class="chart-dot-list">
													<?php
														$sql_ops = "SELECT a.name FROM users as a INNER JOIN user_role as b ON a.user_role_id =  b.user_role_id WHERE a.user_role_id=3 AND b.user_role_status=1";
														$result = $db_handle->runQuery($sql_ops);
														if ($db_handle->numRows($sql_ops) > 0) {
															$i = 0;
															while($row = mysqli_fetch_assoc($result)) {
																$i++;
															?>
														<li class="a<?php echo $i;?>"><?php echo $row['name']; ?></li>
														
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
									<div class="panel-heading">Income of Each Seller</div>
									<div class="panel-body">
										<div class="row">
											<div class="col-md-4">
												<ul class="chart-dot-list">
													<?php
														$sql_ies = "SELECT a.name FROM users as a INNER JOIN user_role as b ON a.user_role_id =  b.user_role_id WHERE a.user_role_id=3 AND b.user_role_status=1";
														$result = $db_handle->runQuery($sql_ies);
														if ($db_handle->numRows($sql_ies) > 0) {
															$i = 0;
														while($row = mysqli_fetch_assoc($result)) {
															$i++;
														?>
													<li class="a<?php echo $i;?>"><?php echo $row['name']; ?></li>
													
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