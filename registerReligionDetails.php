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
<title>Wedding Organizer Wedding Category Flat Bootstrap Responsive Website Template | Home : W3layouts</title>
	
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Wedding Organizer web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	
	<script type="text/javascript" src="jquery/jquery-1.8.3.min.js"></script>
	
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
		<!--Dosh-->
		$(document).ready(function () {
			$("#recipient-name15").click(function () {
				$("#recipient-name17").html("<input type='checkbox' name='manglik' value='Manglik' id='dosh' style='margin:10px'/>Manglik &nbsp; <input type='checkbox' name='sarpadosh' style='margin:10px' value='Sarpa dosh' id='dosh''/>Sarpa dosh <input type='checkbox' name='Kalasarapsosh' value='kala sarpa dosh' id='dosh' style='margin:18px'/>Kala sarpa dosh <br><input type='checkbox' name='rahudosh' value='Rahu dosh' id='dosh' style='margin:10px'/>Rahu dosh <input type='checkbox' name='Kethudosh' value='Kethu dosh' id='dosh' style='margin:10px'/>Kethu dosh &nbsp; <input type='checkbox' name='kalathradosh' value='kalathra dosh' id='dosh' style='margin:10px'/>kalathra dosh");
			});
		});
		
		$(document).ready(function () {
			$("#recipient-name14").click(function name() {
				$("#recipient-name17").html("");
			});
			$("#recipient-name16").click(function name() {
				$("#recipient-name17").html("");
			});
		});
	</script>
	<!--// Meta tag Keywords -->
    
	<!-- css files -->
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
.valid {
	border: 1px solid green
}

.error {
	color: red
}
	</style>
</head>

<body>
<?php
		require "mainHeader.php";
		require "mainBody.php";
		require "mainFooter.php";
	?>
	<!-- popup for register -->
	<div id="register-popup" class="popup-effect"style="top: -100px;">
		<div class="popup">
			<h5 class="modal-title text-uppercase">Religion Details</h5>
			<div class="lregister-form">
				<form action="database/religionDetails.php" method="post" class="px-3 pt-3 pb-0" id="form">
					<div class="form-group">
						<label for="recipient-name" class="col-form-label">Cast
							</label>
							<input type="text" class="form-control" placeholder="cast"
							name="cast" id="recipient-name111">
					</div>
					<div class="form-group">
						<label for="recipient-name" class="col-form-label">
							Subcast(Optional)</label> <input type="text" class="form-control" placeholder=""
							name="subcast" id="recipient-name12">
					</div>
					<div class="form-group">
						<label for="recipient-name" class="col-form-label">Gothra(m)(Optional)
							</label>
							<input type="text" class="form-control" placeholder=""
							name="gothram" id="recipient-name13">
					</div>
					<div class="form-group">
						<label for="recipient-name" class="col-form-label">Dosh
							</label>
							<input type="radio" 
							name="dosh" id="recipient-name14" value="No">No
							<input type="radio"  
							name="dosh" id="recipient-name15" value="Yes">Yes
							<input type="radio"  
							name="dosh" id="recipient-name16" value="Don't know">Don't know
					</div>
					<div>
						<span id="recipient-name17"></span>
					</div>
					
					<div class="right-w3l">
						<input type="submit" class="form-control" value="Next">
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
					cast:
					  {
					      required:true,
					  },
					 	 dosh:
				    		  {
				    		        required:true,
				    		  },
							  manglik:
							  {
								    require:true,
							  },			  	 
				  },
		  });
	   });
	</script>

</body>
</html>