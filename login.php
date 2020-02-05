<?php session_start();
?>
<!DOCTYPE html>
<html>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Wedding Organizer Wedding Category Flat Bootstrap Responsive Website Template | Home</title>
	
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Wedding Organizer web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->
    
	<!-- css files --><!-- "WebContent/register.jsp" -->
	<link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
	<link rel="stylesheet" href="css/font-awesome.min.css"> <!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->

	<!--web font-->
	<link href="//fonts.googleapis.com/css?family=Inconsolata:400,700&amp;subset=latin-ext,vietnamese" rel="stylesheet">
	<!--//web font-->
	<style type="text/css">
		body {
	background-image: url("images/banner.jpg");
}
#login-popup {
	overflow-y: scroll;
}
	</style>
</head>
</head>
<body>
<?php
		require "mainHeader.php";
		require "mainBody.php";
		require "mainFooter.php";
?>
	<!-- popup for login -->
<div id="login-popup" class="popup-effect">
	<div class="popup">
		<h5 class="modal-title text-uppercase">Login</h5>
		<p style="color: red;"><?php
				if(isset($_SESSION["loginfaild"]))
				{
					echo $_SESSION["loginfaild"];
					unset($_SESSION["loginfaild"]);
				}
		?></p>
		<p style="color:green;"><?php if(isset($_SESSION["sucess"]))
				{
					echo $_SESSION["sucess"];
					unset($_SESSION["sucess"]);
				}?></p>
		<div class="login-form">
			<form action="database/login" method="post" class="px-3 pt-3 pb-0">
				<div class="form-group">
					<label  class="col-form-label">Email Id</label>
					<input type="email" class="form-control" placeholder=" Email Id " name="email" id="recipient-name" required="">
				</div>
				<div class="form-group">
					<label class="col-form-label">Password</label>
					<input type="password" class="form-control" placeholder="password" name="password" id="recipient-name1" required="">
				</div>
				<div class="right-w3l">
					<input type="submit" class="form-control" value="Login">
				</div>
			</form>
			<div class="right-w3l">
					<a href="forgotpassword1">Forget Password?</a>
			</div>
		</div>
		<a class="close" href="#">&times;</a>
	</div>
</div>
<!-- popup for login -->
</body>
</html>