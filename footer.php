<!-- Loading Scripts -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>
	
	<script>
		
	window.onload = function(){
    
	<?php if(!isset($_SESSION['seller_user_id'])){ ?>
			// Line chart from swirlData for dashReport
		var swirlData = {
			labels: [
				<?php 
				$resultx = $db_handle->runQuery("SELECT DISTINCT ci.city_name as buyer_city_name FROM transaction as t INNER JOIN books as a ON a.book_id = t.book_id INNER JOIN users as b ON a.user_id =  b.user_id INNER JOIN users as c ON c.user_id = t.user_id INNER JOIN book_order AS o ON o.trans_id = t.trans_id INNER JOIN city_master as ci ON ci.city_id = c.city_id   ");
				$x=0;
				while($row = mysqli_fetch_assoc($resultx)) {
					if($x != 0){
						echo ",";
					}
					echo '"'.$row['buyer_city_name' ].'"';
					$x++;	
				} ?>				
			],
			datasets: [
				<?php  
				$xml1=simplexml_load_file("dash1.xml") or die("Error: Cannot create object");
				$result1 = $db_handle->runQuery("SELECT a.user_id as seller_id  FROM users as a INNER JOIN user_role as b ON a.user_role_id =  b.user_role_id WHERE a.user_role_id=3 AND b.user_role_status=1  ");
				$y=0;
				while($row = mysqli_fetch_assoc($result1)) {
					if($y != 0){
						echo ",";
					}
				 ?>	
					{
						label: <?php echo '"'.$xml1->city[$y]->label.'"'; ?>,
						fillColor: <?php echo '"'.$xml1->city[$y]->fillColor.'"'; ?>,
						strokeColor: <?php echo '"'.$xml1->city[$y]->strokeColor.'"'; ?>,
						pointColor: <?php echo '"'.$xml1->city[$y]->pointColor.'"'; ?>,
						pointStrokeColor: <?php echo '"'.$xml1->city[$y]->pointStrokeColor.'"'; ?>,
						pointHighlightFill: <?php echo '"'.$xml1->city[$y]->pointHighlightFill.'"'; ?>,
						pointHighlightStroke:  <?php echo '"'.$xml1->city[$y]->pointHighlightStroke.'"'; ?>,
						data: [	<?php 
						$result2 = $db_handle->runQuery("SELECT DISTINCT ci.city_id as buyer_city FROM transaction as t INNER JOIN books as a ON a.book_id = t.book_id INNER JOIN users as b ON a.user_id =  b.user_id INNER JOIN users as c ON c.user_id = t.user_id INNER JOIN book_order AS o ON o.trans_id = t.trans_id INNER JOIN city_master as ci ON ci.city_id = c.city_id  ");
						$x1=0;
						while($row1 = mysqli_fetch_assoc($result2)) {
							$result = $db_handle->runQuery("SELECT  SUM(t.no_of_copies_buy * a.book_mrp ) as buyer_city_count FROM transaction as t INNER JOIN books as a ON a.book_id = t.book_id INNER JOIN users as b ON a.user_id =  b.user_id INNER JOIN users as c ON c.user_id = t.user_id INNER JOIN book_order AS o ON o.trans_id = t.trans_id INNER JOIN city_master as ci ON ci.city_id = c.city_id  WHERE  a.user_id = '".$row['seller_id'] ."' AND ci.city_id = '".$row1['buyer_city'] ."' AND o.order_status=4");
						
							$row2 = mysqli_fetch_assoc($result);
							if($x1 != 0){
								echo ",";
							}
							echo '"'.$row2['buyer_city_count' ].'"';
							$x1++;	
						} ?>]
					}
					<?php $y++; 
				} ?>
					
			]
		};
			
		var ctx = document.getElementById("dashReport").getContext("2d");
		window.myLine = new Chart(ctx).Line(swirlData, {
			responsive: true,
			scaleShowVerticalLines: false,
			scaleBeginAtZero : true,
			multiTooltipTemplate: "<%if (label){%><%=label%>: <%}%><%= value %>",
		}); 
			
			// Pie Chart from doughnutData
			 
			
		var doughnutData = [
			<?php
			$xml=simplexml_load_file("dash.xml") or die("Error: Cannot create object");

			$result = $db_handle->runQuery("SELECT a.user_id as seller  FROM users as a INNER JOIN user_role as b ON a.user_role_id =  b.user_role_id WHERE a.user_role_id=3 AND b.user_role_status=1");
				
			$x=0;
			while($row = mysqli_fetch_assoc($result)) {
			
				$result1 = $db_handle->runQuery("SELECT SUM(t.no_of_copies_buy) AS copies FROM transaction as t INNER JOIN books as a ON a.book_id = t.book_id INNER JOIN users as b ON a.user_id =  b.user_id INNER JOIN users as c ON c.user_id = t.user_id INNER JOIN book_order AS o ON o.trans_id = t.trans_id WHERE  a.user_id = '".$row['seller'] ."' AND o.seller_approval_status = 1");
				$row1 = mysqli_fetch_assoc($result1);	
				if($x != 0){
					echo ",";
				}
				
				?>
				{ 
					value: <?php if(isset($row1["copies"])){echo $row1["copies"];} else {echo "0";} ?> ,
					color: <?php echo '"'.$xml->order[$x]->color.'"'; ?> ,
					highlight: <?php echo '"'.$xml->order[$x]->highlight.'"'; ?> ,
					label: <?php echo '"'.$xml->order[$x]->label.'"'; ?>
				}
		
				<?php $x++; 
			} ?>	
		];
					
		var doctx = document.getElementById("chart-area3").getContext("2d");
		window.myDoughnut = new Chart(doctx).Pie(doughnutData, {responsive : true});

		// Dougnut Chart from doughnutData
			
		var doughnutData = [
			<?php
			$xml=simplexml_load_file("dash.xml") or die("Error: Cannot create object");
			$result = $db_handle->runQuery("SELECT a.user_id as seller  FROM users as a INNER JOIN user_role as b ON a.user_role_id =  b.user_role_id WHERE a.user_role_id=3 AND b.user_role_status=1");
			
			$x=0;
			while($row = mysqli_fetch_assoc($result)) {
			
				$result1 = $db_handle->runQuery("SELECT SUM(t.no_of_copies_buy * a.book_mrp ) AS copies FROM transaction as t INNER JOIN books as a ON a.book_id = t.book_id INNER JOIN users as b ON a.user_id =  b.user_id INNER JOIN users as c ON c.user_id = t.user_id INNER JOIN book_order AS o ON o.trans_id = t.trans_id WHERE  a.user_id = '".$row['seller'] ."' AND o.order_status=4");
				$row1 = mysqli_fetch_assoc($result1);	
				if($x != 0){
					echo ",";
				}	
			?>
				{ 
					value: <?php if(isset($row1["copies"])){echo $row1["copies"];} else {echo "0";} ?> ,
					color: <?php echo '"'.$xml->order[$x]->color.'"'; ?> ,
					highlight: <?php echo '"'.$xml->order[$x]->highlight.'"'; ?> ,
					label: <?php echo '"'.$xml->order[$x]->label.'"'; ?>
				}
				
				<?php $x++; 
			} ?>	
		];
			
		var doctx = document.getElementById("chart-area4").getContext("2d");
		window.myDoughnut = new Chart(doctx).Doughnut(doughnutData, {responsive : true});
	<?php } else {?>	
		// Line chart from swirlData for dashReport
		var swirlData = {
			labels: [
				<?php  
				
				$result = $db_handle->runQuery("SELECT DISTINCT ci.city_name as buyer_city_name FROM transaction as t INNER JOIN books as a ON a.book_id = t.book_id INNER JOIN users as b ON a.user_id =  b.user_id INNER JOIN users as c ON c.user_id = t.user_id INNER JOIN book_order AS o ON o.trans_id = t.trans_id INNER JOIN city_master as ci ON ci.city_id = c.city_id  WHERE  a.user_id = '".$_SESSION['seller_user_id'] ."' ");
				$x=0;
				while($row = mysqli_fetch_assoc($result)) {
					if($x != 0){
						echo ",";
					}
					echo '"'.$row['buyer_city_name' ].'"';
					$x++;	
				} ?>				
			],
			datasets: [
				<?php  
				$xml1=simplexml_load_file("dash1.xml") or die("Error: Cannot create object");
				
				$result1 = $db_handle->runQuery("SELECT DISTINCT a.book_id FROM transaction as t INNER JOIN books as a ON a.book_id = t.book_id INNER JOIN users as b ON a.user_id =  b.user_id INNER JOIN users as c ON c.user_id = t.user_id INNER JOIN book_order AS o ON o.trans_id = t.trans_id INNER JOIN city_master as ci ON ci.city_id = c.city_id  WHERE  a.user_id = '".$_SESSION['seller_user_id'] ."' ");
				$y=0;
				while($row = mysqli_fetch_assoc($result1)) {
					if($y != 0){
						echo ",";
					}
				 ?>	
					{
						label: <?php echo '"'.$xml1->city[$y]->label.'"'; ?>,
						fillColor: <?php echo '"'.$xml1->city[$y]->fillColor.'"'; ?>,
						strokeColor: <?php echo '"'.$xml1->city[$y]->strokeColor.'"'; ?>,
						pointColor: <?php echo '"'.$xml1->city[$y]->pointColor.'"'; ?>,
						pointStrokeColor: <?php echo '"'.$xml1->city[$y]->pointStrokeColor.'"'; ?>,
						pointHighlightFill: <?php echo '"'.$xml1->city[$y]->pointHighlightFill.'"'; ?>,
						pointHighlightStroke:  <?php echo '"'.$xml1->city[$y]->pointHighlightStroke.'"'; ?>,
						data: [	<?php 
						$result2 = $db_handle->runQuery("SELECT DISTINCT ci.city_id as buyer_city FROM transaction as t INNER JOIN books as a ON a.book_id = t.book_id INNER JOIN users as b ON a.user_id =  b.user_id INNER JOIN users as c ON c.user_id = t.user_id INNER JOIN book_order AS o ON o.trans_id = t.trans_id INNER JOIN city_master as ci ON ci.city_id = c.city_id  WHERE  a.user_id = '".$_SESSION['seller_user_id'] ."' ");
						$x1=0;
						
						while($row1 = mysqli_fetch_assoc($result2)) {
							
							$result = $db_handle->runQuery("SELECT  COUNT(ci.city_name) as buyer_city_count FROM transaction as t INNER JOIN books as a ON a.book_id = t.book_id INNER JOIN users as b ON a.user_id =  b.user_id INNER JOIN users as c ON c.user_id = t.user_id INNER JOIN book_order AS o ON o.trans_id = t.trans_id INNER JOIN city_master as ci ON ci.city_id = c.city_id  WHERE  a.user_id = '".$_SESSION['seller_user_id'] ."' AND t.book_id = '".$row['book_id'] ."' AND ci.city_id = '".$row1['buyer_city'] ."' ");
						
							$row2 = mysqli_fetch_assoc($result);
							if($x1 != 0){
								echo ",";
							}
							echo '"'.$row2['buyer_city_count' ].'"';
							$x1++;	
						} ?>
						]
					}
					<?php $y++; 
				} ?>
					
			]
		};
				
		var ctx = document.getElementById("dashReport").getContext("2d");
		window.myLine = new Chart(ctx).Line(swirlData, {
			responsive: true,
			scaleShowVerticalLines: false,
			scaleBeginAtZero : true,
			multiTooltipTemplate: "<%if (label){%><%=label%>: <%}%><%= value %>",
		}); 
			
			// Pie Chart from doughnutData
				 
				
		var doughnutData = [
			<?php
			$xml=simplexml_load_file("dash.xml") or die("Error: Cannot create object");

			$result = $db_handle->runQuery("SELECT a.book_id FROM books as a INNER JOIN users as b ON a.user_id =  b.user_id WHERE a.user_id='".$_SESSION['seller_user_id']."'");
			$x=0;
			
			while($row = mysqli_fetch_assoc($result)) {
				
				$result1 = $db_handle->runQuery("SELECT SUM(t.no_of_copies_buy) AS copies FROM transaction as t INNER JOIN books as a ON a.book_id = t.book_id INNER JOIN users as b ON a.user_id =  b.user_id INNER JOIN users as c ON c.user_id = t.user_id INNER JOIN book_order AS o ON o.trans_id = t.trans_id WHERE  a.user_id = '".$_SESSION['seller_user_id'] ."' AND t.book_id = '".$row['book_id'] ."' AND o.seller_approval_status = 1");
				$row1 = mysqli_fetch_assoc($result1);	
				if($x != 0){
					echo ",";
				}
						
			?>
				{ 
					value: <?php if(isset($row1["copies"])){echo $row1["copies"];} else {echo "0";} ?> ,
					color: <?php echo '"'.$xml->order[$x]->color.'"'; ?> ,
					highlight: <?php echo '"'.$xml->order[$x]->highlight.'"'; ?> ,
					label: <?php echo '"'.$xml->order[$x]->label.'"'; ?>
				}
				
				<?php $x++; 
			} ?>	
		];
					
		var doctx = document.getElementById("chart-area3").getContext("2d");
		window.myDoughnut = new Chart(doctx).Pie(doughnutData, {responsive : true});

				// Dougnut Chart from doughnutData
				
		var doughnutData = [
			<?php
		
			$xml=simplexml_load_file("dash.xml") or die("Error: Cannot create object");
			$result = $db_handle->runQuery("SELECT a.book_id FROM books as a INNER JOIN users as b ON a.user_id =  b.user_id WHERE a.user_id='".$_SESSION['seller_user_id']."'");
			
			$x=0;
			while($row = mysqli_fetch_assoc($result)) {
				
				$result1 = $db_handle->runQuery("SELECT SUM(t.no_of_copies_buy * a.book_mrp ) AS copies FROM transaction as t INNER JOIN books as a ON a.book_id = t.book_id INNER JOIN users as b ON a.user_id =  b.user_id INNER JOIN users as c ON c.user_id = t.user_id INNER JOIN book_order AS o ON o.trans_id = t.trans_id WHERE  a.user_id = '".$_SESSION['seller_user_id'] ."' AND t.book_id = '".$row['book_id'] ."' AND o.order_status=4");
				$row1 = mysqli_fetch_assoc($result1);	
				if($x != 0){
					echo ",";
				}
					
		?>
				{ 
					value: <?php if(isset($row1["copies"])){echo $row1["copies"];} else {echo "0";} ?> ,
					color: <?php echo '"'.$xml->order[$x]->color.'"'; ?> ,
					highlight: <?php echo '"'.$xml->order[$x]->highlight.'"'; ?> ,
					label: <?php echo '"'.$xml->order[$x]->label.'"'; ?>
				}
			
			<?php $x++; 
			} ?>	
		];
				
		var doctx = document.getElementById("chart-area4").getContext("2d");
		window.myDoughnut = new Chart(doctx).Doughnut(doughnutData, {responsive : true});
	<?php 
	} ?>

	}
	</script>

</body>

</html>