<?php session_start();
	if($_SESSION["email"]==null)
	{
		header("location: login#login-popup");
	}
?>
<!DOCTYPE html>
<html>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Wedding Organizer Wedding Category Flat Bootstrap
	Responsive Website Template | Home : W3layouts</title>

<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords"
	content="Wedding Organizer web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

<script type="text/javascript" src="jquery/jquery-1.8.3.min.js"></script>

<script type="application/x-javascript">
	
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
</script>

<!--// Meta tag Keywords -->

<!-- css files -->
<link rel="stylesheet" href="css/bootstrap.css">
<!-- Bootstrap-Core-CSS -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<!-- Style-CSS -->
<link rel="stylesheet" href="css/font-awesome.min.css">
<!-- Font-Awesome-Icons-CSS -->
<!-- //css files -->

<!--web font-->
<link
	href="//fonts.googleapis.com/css?family=Inconsolata:400,700&amp;subset=latin-ext,vietnamese"
	rel="stylesheet">
<!--//web font-->
<style type="text/css">
body {
	background-image: url("images/banner.jpg");
}
</style>
</head>

<body>
<?php
	$profile=$_SESSION["profile"];
	$familystatus=$_SESSION["Family_Status"];
	$familyvalues=$_SESSION["Family_Values"];
	$familytype=$_SESSION["familytype"];
	$country=$_SESSION["country"];
?>
<script type="text/javascript">
	$(document).ready(function() {
		var profile="<?php echo $profile;?>";
		var familystatus="<?php echo $familystatus;?>";
		var familyvalues="<?php echo $familyvalues;?>";
		var familytype="<?php echo $familytype;?>";
		var country="<?php echo $country;?>";
		if (profile=="myself" || profile=="son" || profile=="daughter" || profile=="brother" || profile=="sister" || profile=="relative" || profile=="friend" ) 
		{
			$("#d").html("<textarea rows='8' cols='40' class='form-control' name='about'id='g'> I come from a "+familystatus+" family with "+familyvalues+" family values. We belong to "+familytype+" family currently living in "+country+".</textarea>");	
		}
	});
</script>
<?php
	require "mainHeader.php";
	require "mainBody.php";
	require "mainFooter.php";
	
?>
	<!-- popup for register -->
	<div id="register-popup" class="popup-effect" style="top: -120px;">
		<div class="popup">
			<h5 class="modal-title text-uppercase">About</h5>
			<div class="lregister-form">
				<form action="database/registerAbout.php"
					method="post" class="px-3 pt-3 pb-0">
					<div class="form-group">
						<label for="recipient-name" class="col-form-label">About You</label><br>
							 <span id="d"></span>
					</div>
			
					<div class="right-w3l">
						<input type="submit" class="form-control" value="Submit" >
					</div>
				</form>
			</div>
			<a class="close" href="#">&times;</a>
		</div>
	</div>
	<!-- popup for register -->
	<script src="jquery/jquery-2.1.3.min.js"></script>
	<script
		src="jquery/jquery.validate.min.js"></script>
	<script
		src="jquery/additional-methods.min.js"></script>
	<script type="text/javascript" src="js/registerValidate.js"></script> -->
	 <script type="text/javascript">
	   $(document).ready(function(){
		   $.validator.addMethod('strongPassword', function(value, element) {
			    return this.optional(element) 
			      || value.length >= 6
			      && /\d/.test(value)
			      && /[a-z]/i.test(value);
			  }, 'Your password must be at least 6 characters long and contain at least one number and one char\'.')

		  $("#form") .validate({
			  rules:
				  {
				  about:
					  {
					      required:true,
					  },
				  },
		  });
	   });
	</script>

</body>
</html>