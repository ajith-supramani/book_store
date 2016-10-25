<?php
	// include "db_connect.php";
	include "dbcontroller1.php";
	$db_handle = new DBController();
  
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
?>

	<select name="country" class="form-control" id="newcountry1" >
		<option>Select Country</option>
<?php 
	$cou1 = "SELECT  * FROM country_master ";
	$result = $db_handle->runQuery($cou1);
	if ($db_handle->numRows($cou1) > 0) {
		while($row = mysqli_fetch_assoc($result)) {
?>
		<option value="<?php echo $row["country_id"]; ?>" <?php if($row['country_name'] == $country_name){echo("selected");}?>><?php echo $row["country_name"]; ?></option>
		<?php   }
	} else {
		echo "0 results";
	}
?>
	</select>
