<?php 
	// include "db_connect.php";
	include "dbcontroller1.php";
	$db_handle = new DBController();
	$sql = "SELECT * FROM menus ";
	$result = $db_handle->runQuery( $sql);
	$row = mysqli_fetch_all($result,MYSQLI_ASSOC);
	?>
<div class="ts-main-content">
		<nav class="ts-sidebar">
			<ul class="ts-sidebar-menu">
				<li class="ts-label">Search</li>
				<li>
					<input type="text" class="ts-sidebar-search" placeholder="Search here...">
				</li>
				<li class="ts-label">Main</li>
				<?php if( !isset($_SESSION['seller_user_id'] )){ ?>
				<li class="open"><a href="dashboard.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
				<?php } else {?>
				<li class="open"><a href="seller_dashboard.php"><i class="fa fa-dashboard"></i> Seller Dashboard</a></li>
				<?php } ?>
				
				<?php if( !isset($_SESSION['seller_user_id'] )){ ?>
				
				<li><a href="#"><i class="fa fa-desktop"></i> Users</a>
					<ul>
						<li><a href="users.php">User Lists</a></li>
						<li><a href="user_role.php">User Role</a></li>
						
					</ul>
				</li>
				<?php } ?>
				<?php if( !isset($_SESSION['seller_user_id'] )){ ?>
				<li><a href="menu_index.php"><i class="fa fa-table"></i> Menu</a></li>
				<?php } ?>
				<li><a href="book_index.php"><i class="fa fa-table"></i> Book Index</a></li>
				<?php if( !isset($_SESSION['seller_user_id'] )){ ?>
				<li><a href="transaction.php"><i class="fa fa-table"></i> Transaction</a></li>
				<?php } ?>
				<li><a href="#"><i class="fa fa-desktop"></i> Order Process Detail</a>
					<ul>
						<li><a href="order.php">Order Details</a></li>
						<li><a href="shipment.php">Shipment Details</a></li>
						
					</ul>
				</li>
				<?php if( !isset($_SESSION['seller_user_id'] )){ ?>
				<li><a href="buyer_review.php"><i class="fa fa-table"></i> Book Review</a></li>
				<?php } ?>
				<li><a href="process_record.php"><i class="fa fa-table"></i> Delivery Process</a></li>
				<?php if( !isset($_SESSION['seller_user_id'] )){ ?>
				<li><a href="#"><i class="fa fa-sitemap"></i> Menu</a>
					<?php
						echo "<ul>";
						foreach($row as $menu){
							if($menu['menu_parent_id'] == 0){
								echo "<li><a href='". $menu['menu_url'] ."'>".$menu['menu_label']."</a>";
								$menu_id = $menu['menu_id'];
								sub($row,$menu_id);
								echo "</li>";
							}
						}
						echo "</ul>";

						
					?>
				</li>
				<?php }
				function sub($row,$menu_id){
					echo "<ul>";
					foreach($row as $menu){
						if($menu['menu_parent_id'] == $menu_id){
							echo "<li><a href='". $menu['menu_url'] ."'>".$menu['menu_label']."</a>";
							sub($row,$menu['menu_id']);
							echo "</li>";
						}
					}
					echo "</ul>";
				}?>
				
				<!-- Account from above -->
				<ul class="ts-profile-nav">
					<li><a href="#">Help</a></li>
					<li><a href="#">Settings</a></li>
					<li class="ts-account">
						<a href="#"><img src="img/ts-avatar.jpg" class="ts-avatar hidden-side" alt=""> Account <i class="fa fa-angle-down hidden-side"></i></a>
						<ul>
							<li><a href="#">My Account</a></li>
							<li><a href="#">Edit Account</a></li>
							<li><a href="#">Logout</a></li>
						</ul>
					</li>
				</ul>

			</ul>
		</nav>