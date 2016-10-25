<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Harmony - Free responsive Bootstrap admin template by Themestruck.com</title>

	<!-- Font awesome -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- Sandstone Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Bootstrap Datatables -->
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<!-- Bootstrap social button library -->
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<!-- Bootstrap select -->
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<!-- Bootstrap file input -->
	<link rel="stylesheet" href="css/fileinput.min.css">
	<!-- Awesome Bootstrap checkbox -->
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<!-- Admin Stye -->
	<link rel="stylesheet" href="css/style.css">

	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	<?php 
	session_start();
	include "login_cred.php"; 
	
	//echo login_cred("ghj","dfgd",	1);
	
	if(isset($_POST['email1'])){ 
		$role=1;
		$email=$_POST['email1']; 
		$password= $_POST['password1'];
		login_cred($email,$password,$role);
	}	
	?>
	<div class="login-page bk-img" style="background-image: url(img/login-bg.jpg);">
		<div class="form-content">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<h1 class="text-center text-bold text-light mt-4x">Sign in</h1>
						<div class="well row pt-2x pb-3x bk-light">
							<div class="col-md-8 col-md-offset-2">
								<form action="login.php" class="mt"  method="post">

									<label for="" class="text-uppercase text-sm">Email</label>
									<input type="text" placeholder="Email ID" id="inputEmail" name="email1" class="form-control mb">

									<label for="" class="text-uppercase text-sm">Password</label>
									<input type="password" placeholder="Password" id="inputPassword" name="password1" class="form-control mb">

									<div class="checkbox checkbox-circle checkbox-info">
										<input id="checkbox7" type="checkbox" checked>
										<label for="checkbox7">
											Keep me signed in
										</label>
									</div>

									<button class="btn btn-primary btn-block" id="login" type="submit">LOGIN</button>

								</form>
							</div>
						</div>
						<div class="text-center text-light">
							<a href="#" class="text-light">Forgot password?</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
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
	<script type="text/javascript" >
// function myFunction(){
	
	// $("#login").click(function(){ 
		
		// var email = $("#inputEmail").val();
		// var password = $("#inputPassword").val();
		// console.log(email)
		// if(email!="" && password!=""){
		// var dataString = "email1="+email+"&password1="+password+"&role=1";
		// alert(dataString);
		// $.ajax({
		// type:"POST",
		// url:"login.php",
		// data: dataString,
		// success:function(data)
		// { 
			// // alert(data);
			// // var res2 =$(data).find("#login_post").html();
			// // alert(res2);
			// // if(res2 == 'Credential Error'){	
			// // alert(res2);
			// // }
			// // if(res2 == 0){	
			// // window.location = "http://localhost/bookstore/dashboard.php";
			// // }

		// }
		// });
		// }
		// return false;
	// });
	
// }

</script>
</body>

</html>