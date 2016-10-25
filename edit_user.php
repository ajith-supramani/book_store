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
<style>
.add{
	top: 10px;
}
.glyphicon {
    font-size: 20px;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script> 
	$(document).ready(function(){
		
		$("select[name='country']").change(function(){
			var selectBox = document.getElementById("country");
			var selected = selectBox.options[selectBox.selectedIndex].value;
			var dataString = 'country_id='+ selected;
			$.ajax({
				type: "POST",
				url: "edit_user.php",
				data: dataString,
				success: function(data)
				{
					var success =  $(data).find("#state1").html(); 
					$("#state1").html(success);
				} 
			});
		});	
		$("#country_select2").change(function(){
			var selectBox = document.getElementById("country_select2");
			var selected = selectBox.options[selectBox.selectedIndex].value;
			var dataString = 'country_select2_id='+ selected;
			$.ajax({
				type: "POST",
				url: "edit_user.php",
				data: dataString,
				success: function(data){
					var success =  $(data).find("#state_select1").html();
					$("#state_select1").html(success);
				} 
			});
		});	
		$("select[name='state']").change(function(){
			var selectBox = document.getElementById("state1");
			var selected = selectBox.options[selectBox.selectedIndex].value;
			var dataString = 'state_id='+ selected;
			$.ajax({
				type: "POST",
				url: "edit_user.php",
				data: dataString,
				success: function(data)
				{
					var success =  $(data).find("#city1").html(); 
					$("#city1").html(success);
				} 
			});
		});	
		
		
		$("button[name='coun_sav']").click(function(){ 
			var name=$("#countrypop").val();
			var status=$("#sel1").val();
			var dataString = "name="+name+"&status="+status;
			$.ajax({
				type:"post",
				url:"edit_user.php",
				data: dataString,
				success:function(data)
				{ 
					var res1 =$(data).find("#country_post").html();
					alert(res1);
					var success1 =  $(data).find("#country").html(); 
					$("#country").html(success1);
					$("#myModal").modal('hide');
				}
			});

		});

		$("button[name='state_sav']").click(function(){ 
			var country_select = $("#country_select1").val();
			var state_name = $("#statepop").val();
			var state_status = $("#sel2").val();
			var dataString = "state_name="+state_name+"&state_status="+state_status+"&country_id="+country_select;
			$.ajax({
				type:"post",
				url:"edit_user.php",
				data: dataString,
				success:function(data)
				{ 
					var res2 =$(data).find("#state_post").html();
					alert(res2);
					var success2 =  $(data).find("#state1").html(); 
					$("#state1").html(success2);
					$("#myModal1").modal('hide');
				}
			});

		});

		$("button[name='city_sav']").click(function(){ 
			var state_select = $("#state_select1").val();
			var city_name = $("#citypop").val();
			var city_status = $("#sel3").val();
			var dataString = "new_city_name="+city_name+"&new_city_status="+city_status+"&state_id="+state_select;
			$.ajax({
				type:"post",
				url:"edit_user.php",
				data: dataString,
				success:function(data)
				{ 
					var res3 =$(data).find("#city_post").html();
					alert(res3);
					var success3 =  $(data).find("#city1").html(); 
					$("#city1").html(success3);
					$("#myModal2").modal('hide');
				}
		});

		});
				
		
	});						
</script>	
	<?php
	
		if(isset($_GET['id'])){
			
			$sql1 = "SELECT  users.*, user_role.*,c.country_name,s.country_id,s.state_name,ci.state_id,ci.city_name FROM users INNER JOIN user_role ON users.user_role_id = user_role.user_role_id  INNER JOIN city_master as ci ON users.city_id = ci.city_id INNER JOIN state_master as s ON s.state_id = ci.state_id INNER JOIN country_master as c ON c.country_id = s.country_id WHERE users.user_id = '" . $_GET['id'] . "'";
			
			$result = $db_handle->runQuery($sql1);
			$row = mysqli_fetch_assoc($result); 
			
		}
		if(isset($_SESSION['seller_user_id'])){
			$sql1 = "SELECT  users.*, user_role.*,c.country_name,s.country_id,s.state_name,ci.state_id,ci.city_name FROM users INNER JOIN user_role ON users.user_role_id = user_role.user_role_id  INNER JOIN city_master as ci ON users.city_id = ci.city_id INNER JOIN state_master as s ON s.state_id = ci.state_id INNER JOIN country_master as c ON c.country_id = s.country_id WHERE users.user_id = '" . $_SESSION['seller_user_id'] . "'";
			
			$result = $db_handle->runQuery($sql1);
			$row = mysqli_fetch_assoc($result); 
		}	
		if(isset($_POST["edit_save"])){
			$user_id                =   $_POST['user_id'];
			$user_role_id			=	$_POST['user_role'];
			$user_name 		        = 	$_POST['user_name'];
			$email 		            = 	$_POST['email'];
			$mobno 		            = 	$_POST['mobno'];
			$city_id 		        = 	$_POST['city'];
			$password 		        = 	$_POST['password'];
			$user_role 		        = 	$_POST['user_role'];
			$user_status 		    = 	$_POST['user_status'];
			date_default_timezone_set("Asia/Kolkata");
			$user_modified_on    	= 	date("Y-m-d h:i:s");
		
			$sql = "UPDATE users SET name = '$user_name' ,user_role_id = '$user_role_id' , email = '$email' , mobno = '$mobno' , city_id = '$city_id' , password = '$password' , user_status = $user_status , user_modified_on = '$user_modified_on' WHERE user_id = '" .$user_id. "'";

			if ($db_handle->runQuery($sql)) {
				// echo "Record Updated successfully!!!";
				header('Location: http://localhost/bookstore/users.php');
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($this->conn);
			}
			//mysqli_close($this->conn);
		} 
		
		
		
	
	?>
					
	<h2 class="page-title">Edit Users</h2>

	<div class="row">
		<div class="col-md-6">
			<div class="panel panel-default">
			<div class="panel-heading">Edit Users Here..</div>
			<div class="panel-body">
				
			<form method="post" action="edit_user.php" class="form-horizontal">
					
						<div class="form-group">
							<label class="col-sm-4 control-label">User Name</label>
							<div class="col-sm-6">
								<input type="hidden" name="user_id" value="<?php if(isset($row['user_id'])){ echo $row['user_id'];} else {echo "";}?>" class="form-control"/>
									<input type="text" name="user_name" value="<?php if(isset($row['name'])){echo $row['name']; } else {echo "";} ?>" class="form-control">
								
							</div>
						</div>
						
						<div class="hr-dashed"></div>
						
						<div class="form-group">
							<label class="col-sm-4 control-label">Email Id</label>
							<div class="col-sm-6">
								<input type="email" name="email" value="<?php if(isset($row['email'])){echo $row['email']; } else {echo "";} ?>"class="form-control">
							</div>
						</div>
						
						<div class="hr-dashed"></div>
						
						<div class="form-group">
							<label class="col-sm-4 control-label">Mobile Number</label>
							<div class="col-sm-6">
								<input type="tel" name="mobno" pattern="^\d{10}$" value="<?php if(isset($row['mobno'])){echo $row['mobno']; } else {echo "";} ?>" class="form-control">
							</div>
						</div>
						
						<div class="hr-dashed"></div>
						
						<div class="form-group">
							<label class="col-sm-4 control-label">Country</label>
							<div class="col-sm-6">
								<?php
								if(isset($_POST["name"])){
								  if($_POST["name"] != ""){
									  $sq ="SELECT country_name FROM country_master";
									  $resu = $db_handle->runQuery($sq);
									  while($roww = mysqli_fetch_assoc($resu)) {
										  
											if(str_replace(' ', '',strtolower($roww["country_name"])) == str_replace(' ', '',strtolower($_POST["name"]))){ ?>
												<div id="country_post">Country Name Already Exit</div>	
										<?php exit;
											} 
									  } ?>
											<div id="country_post">Country Name Added Successfully</div>
										<?php 
									  $country_name=$_POST["name"];
									  $status=$_POST["status"];
									  date_default_timezone_set("Asia/Kolkata");
									  $country_created_on  	= 	date("Y-m-d h:i:s");

									  $sql = "INSERT INTO country_master(country_name,country_status,country_created_on) values('$country_name','$status',' $country_created_on')";
									  if ($db_handle->runQuery($sql)) {
											echo "New record created successfully";
									  } else {
											echo "Error: " . $sql . "<br>" . mysqli_error($this->conn);
									   } 
									} else{
										?><div id="country_post">Enter the country name first</div><?php
									}
								} ?>
								<select name="country" class="form-control" id="country" >
									<option>Select Country</option>
									<?php 
										$cou = "SELECT  * FROM country_master ";
										$result1 = $db_handle->runQuery($cou);
										if ($db_handle->numRows($cou) > 0) {
											while($row1 = mysqli_fetch_assoc($result1)) {
											
									?>
									
									<option value="<?php echo $row1["country_id"]; ?>" <?php if(isset($row['country_name'])) { if($row1['country_name'] == $row['country_name']){echo("selected");} }?>><?php echo $row1["country_name"]; ?></option>
								
								
								<?php   	}
										} else {
											echo "0 results";
										}
								?>
								</select>
							</div>	
							<a href="javascript://" data-toggle="tooltip" data-placement="right" title="To add new country name"  >
								<span class="glyphicon glyphicon-plus add" data-toggle="modal" data-target="#myModal"></span> </a>
									
								<div class="modal fade" id="myModal" role="dialog">
									<div class="modal-dialog">
									
									  <div class="modal-content">
										<div class="modal-header">
										  <button type="button" class="close" data-dismiss="modal">&times;</button>
										  <h4 class="modal-title">Add New Country</h4>
										</div>
									   <div class="modal-body">
											<div class="form-group">
											  <label for="country" class="form-control-label">Country Name:</label>
											  <input type="text" class="form-control" id="countrypop" >
											  <label for="sel1">Country status (select one):</label>
												  <select class="form-control" id="sel1">
													<option value="1">Enable</option>
													<option value="0">Disable</option>
												  </select>
											</div>
										</div>
										<div class="modal-footer">
										  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										  <button type="button" name="coun_sav" class="btn btn-primary">Save</button>
										</div>
									  </div>
									</div>
								</div>
						</div>
						
					<div class="hr-dashed"></div>
					<div id="state">
						<div class="form-group">
							<label class="col-sm-4 control-label">State</label>
							<div class="col-sm-6">
							<?php
								if(isset($_POST["state_name"])){
								  if($_POST["country_id"] != 0) {
									  if($_POST["state_name"] != ""){
										  $couid = $_POST["country_id"];
										  $sq ="SELECT state_name FROM state_master WHERE country_id= $couid";

										  $resu = $db_handle->runQuery($sq);
										  while($roww = mysqli_fetch_assoc($resu)) {
											  if(str_replace(' ', '',strtolower($roww["state_name"])) == str_replace(' ', '',strtolower($_POST["state_name"]))){ ?>
													<div id="state_post">State Name Already Exit</div>	
											<?php exit;
												} 
											} ?>
												<div id="state_post">State Name Added Successfully</div>
												<?php  
										  $country_id = $_POST["country_id"];
										  $state_name = $_POST["state_name"];
										  $status = $_POST["state_status"];
										  date_default_timezone_set("Asia/Kolkata");
										  $state_created_on  	= 	date("Y-m-d h:i:s");

										  $sql = "INSERT INTO state_master(country_id,state_name,state_status,state_created_on) values('$country_id','$state_name','$status',' $state_created_on')";
											if ($db_handle->runQuery($sql)) {
												echo "New record created successfully";
											} else {
												echo "Error: " . $sql . "<br>" . mysqli_error($this->conn);
											} 
										} else{
											?><div id="state_post">Enter the state name first</div><?php
										}
									}else{
										?><div id="state_post">Select the country name first</div><?php
									}
								}
								?>
								<select name="state" class="form-control" id="state1">
									<option>Select State</option>
									<?php 
										$country_id = $_POST['country_id'];
										if(isset($_POST['country_id'])){
											$stat = "SELECT  * FROM state_master WHERE country_id = $country_id";
										} else {
											$stat = "SELECT  * FROM state_master WHERE country_id = '".$row['country_id']."'";
										}
										$result3 = $db_handle->runQuery($stat);
										if ($db_handle->numRows($stat) > 0) {
											while($row3 = mysqli_fetch_assoc($result3)) {
											
									?>
									
									<option value="<?php echo $row3["state_id"]; ?>" <?php if($row3['state_name'] == $row['state_name']){echo("selected");}?>><?php echo $row3["state_name"]; ?></option>
									
									
									<?php   }
										} else {
											echo "0 results";
										}

										
									?>
								</select>
							</div>
							<a href="javascript://" data-toggle="tooltip" data-placement="right" title="To add new state name">
							<span class="glyphicon glyphicon-plus add" data-toggle="modal" data-target="#myModal1"> </span></a>
				
							<div class="modal fade" id="myModal1" role="dialog">
								<div class="modal-dialog">
								
								  <div class="modal-content">
									<div class="modal-header">
									  <button type="button" class="close" data-dismiss="modal">&times;</button>
									  <h4 class="modal-title">Add New State </h4>
									</div>
								    <div class="modal-body">
										<div class="form-group">
										  <label for="country_select1">Country Name (select one):</label>
											  <select class="form-control" id="country_select1">
												<option>Select Country</option>
												<?php 
													$cou = "SELECT  * FROM country_master ";
													$result = $db_handle->runQuery($cou);
													if ($db_handle->numRows($cou) > 0) {
														while($rowc = mysqli_fetch_assoc($result)) {
														
												?>
												
												<option value="<?php echo $rowc["country_id"]; ?>"><?php echo $rowc["country_name"]; ?></option>
												
												
												<?php   }
													} else {
														echo "0 results";
													}

													
												?>
											  </select>
										  <label for="statepop" class="form-control-label">State Name:</label>
										  <input type="text" class="form-control" id="statepop" >
										  <label for="sel2">State status (select one):</label>
											  <select class="form-control" id="sel2">
												<option value="1">Enable</option>
												<option value="0">Disable</option>
											  </select>
										</div>
									</div>
									<div class="modal-footer">
									  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									  <button type="button" name="state_sav" class="btn btn-primary">Save</button>
									</div>
								  </div>
								  
								</div>
							</div>
						</div>
					</div>
					<div class="hr-dashed"></div>
			<div id="city">
				<div class="form-group">
					<label class="col-sm-4 control-label">City</label>
					<div class="col-sm-6">
						<?php
						if(isset($_POST["new_city_name"])){
							 if($_POST["state_id"] != 0) {
						  if($_POST["new_city_name"] != ""){
							  $state_id = $_POST["state_id"];
							  $sq ="SELECT city_name FROM city_master WHERE state_id= $state_id";
							 
							  $resu1 = $db_handle->runQuery($sq);
							  while($roww = mysqli_fetch_assoc($resu1)) {
								  if(str_replace(' ', '',strtolower($roww["city_name"])) == str_replace(' ', '',strtolower($_POST["new_city_name"]))){ ?>
								  
										<div id="city_post">City Name Already Exit</div>	
									<?php exit;
									} 
								}?>
										<div id="city_post">City Name Added Successfully</div>
									<?php 
							  $state_id = $_POST["state_id"];
							  $new_city_name = $_POST["new_city_name"];
							  $new_city_status = $_POST["new_city_status"];
							  date_default_timezone_set("Asia/Kolkata");
							  $city_created_on  	= 	date("Y-m-d h:i:s");

								$sql = "INSERT INTO city_master(state_id,city_name,city_status,city_created_on) values('$state_id','$new_city_name','$new_city_status',' $city_created_on')";
								if ($db_handle->runQuery($sql)) {
										echo "New record created successfully";
									} else {
										echo "Error: " . $sql . "<br>" . mysqli_error($this->conn);
									} 
							} else{
								?><div id="city_post">Enter the city name first</div><?php
							}
							}else{
							?><div id="city_post">Select the state name first</div><?php
						 }
						}
					  ?>	
						<select name="city" class="form-control" id="city1">
							<option>Select City</option>
							<?php 
								$state_id = $_POST['state_id'];
								if(isset($_POST['state_id'])){
									$cit = "SELECT  * FROM city_master WHERE state_id = $state_id";
								} else {
									$cit = "SELECT  * FROM city_master WHERE state_id = '".$row['state_id']."'";
								}
								$result4 = $db_handle->runQuery($cit);
								if ($db_handle->numRows($cit) > 0) {
									while($row4 = mysqli_fetch_assoc($result4)) {
									
							?>
							
							<option value="<?php echo $row4["city_id"]; ?>" <?php if(isset($row['city_id'])){if($row4['city_id'] == $row['city_id']){echo("selected");} }?> > <?php echo $row4["city_name"]; ?> </option>
							
							
							<?php   }
								} else {
									echo "0 results";
								}	
							?>
						</select>
					</div>
					<a href="javascript://" data-toggle="tooltip" data-placement="right"title="To add new city name">
					<span class="glyphicon glyphicon-plus add" data-toggle="modal" data-target="#myModal2"></span>  </a>
						
					<div class="modal fade" id="myModal2" role="dialog">
						<div class="modal-dialog">
						
						  <div class="modal-content">
							<div class="modal-header">
							  <button type="button" class="close" data-dismiss="modal">&times;</button>
							  <h4 class="modal-title">Add New City </h4>
							</div>
						    <div class="modal-body">
								<div class="form-group">
									<label for="country_select1">Country Name (select one):</label>
									<select class="form-control" id="country_select2">
										<option>Select Country</option>
										<?php 
											$cou = "SELECT  * FROM country_master ";
											$result = $db_handle->runQuery($cou);
											if ($db_handle->numRows($cou) > 0) {
												while($row5 = mysqli_fetch_assoc($result)) {
												
										?>
										
										<option value="<?php echo $row5["country_id"]; ?>"><?php echo $row5["country_name"]; ?></option>
										
										
										<?php   }
											} else {
												echo "0 results";
											}	
										?>
									</select>
									<label for="country_select1">State Name (select one):</label>
									<select class="form-control" id="state_select1">
										<option>Select State</option>
										<?php 
											$country_id = $_POST['country_select2_id'];
											$sta = "SELECT  * FROM state_master WHERE country_id = $country_id";
											$result = $db_handle->runQuery($sta);
											if ($db_handle->numRows($sta) > 0) {
												while($row6 = mysqli_fetch_assoc($result)) {
												
										?>
										
										<option value="<?php echo $row6["state_id"]; ?>"><?php echo $row6["state_name"]; ?></option>
										
										
										<?php   }
											} else {
												echo "0 results";
											}
										?>
									</select>
								  <label for="country" class="form-control-label">City Name:</label>
								  <input type="text" class="form-control" id="citypop" >
								  <label for="sel3">City status (select one):</label>
									  <select class="form-control" id="sel3">
										<option value="1">Enable</option>
										<option value="0">Disable</option>
									  </select>
								</div>
							</div>
							<div class="modal-footer">
							  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							  <button type="button" name="city_sav" class="btn btn-primary">Save</button>
							</div>
						  </div>
						  
						</div>
					</div>
				</div>
			 </div>
			 <div class="hr-dashed"></div>
						
				<div class="form-group">
					<label class="col-sm-4 control-label">Password</label>
					<div class="col-sm-6">
						<input type="password" class="form-control" value="<?php if(isset($row['password'])){echo $row['password']; } else {echo "";} ?>" name="password">
					</div>
				</div>
						
				<div class="hr-dashed"></div>
						
				<div class="form-group">
					<label class="col-sm-4 control-label">User role</label>
					<div class="col-sm-6">
						<select name="user_role" class="form-control">
						<option>Select User Role</option>
						<?php 
							$sql2 = "SELECT  * FROM user_role ";
							$result2 = $db_handle->runQuery($sql2);
							if ($db_handle->numRows($sql2) > 0) {
								while($row2 = mysqli_fetch_assoc($result2)) {
						?>
						<option value="<?php echo $row2["user_role_id"]; ?>" <?php if($row2['user_role_name'] == $row['user_role_name']){echo("selected");}?>><?php echo $row2["user_role_name"]; ?></option>
						
						
						<?php   }
								} else {
									echo "0 results";
								}

							//mysqli_close($this->conn);
						?>
					</select>
					</div>
				</div>
				
				<div class="hr-dashed"></div>
				
				<div class="form-group">
					<label class="col-sm-4 control-label">User Status</label>
					<div class="col-sm-6">
						<select name="user_status" class="form-control">
							<option>Select Status</option>
							<option value="1" <?php if($row['user_status'] == '1'){echo("selected");}?>>Enable</option>
							<option value="0" <?php if($row['user_status'] == '0'){echo("selected");}?>>Disable</option>
						</select>
					</div>
				</div>
				
				
				<div class="hr-dashed"></div>
				
				<div class="form-group">
					<div class="col-sm-8 col-sm-offset-2">
						<?php if(!isset($_SESSION['seller_user_id'])){?><a href="users.php" class="btn btn-success">Return to User Detail Page</a>&nbsp;&nbsp;<?php }?>
						<input type="submit" class="btn btn-primary" name="edit_save" value="Edit_save" />
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