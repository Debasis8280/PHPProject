<?php session_start();
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
<!-- "WebContent/register.jsp" -->
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

.valid {
	border: 1px solid green
}

.error {
	color: red
}

#register-popup {
	overflow-y: scroll;
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
	<div id="register-popup" class="popup-effect" style="top: -120px;">
		<div class="popup">
			<h5 class="modal-title text-uppercase">Register</h5>
			<div class="lregister-form">
				<form enctype="multipart/form-data" action="database/register.php" method="post"
					class="px-3 pt-3 pb-0" name="register" id="form" >
					<div class="form-group">
						<label for="recipient-name" class="col-form-label">Matrimony
							Profile for </label> <select name="profile" id="profile"
							class="form-control">
							<option value="">-select-</option>
							<option value="myself">Myself</option>
							<option value="son">Son</option>
							<option value="daughter">Daughter</option>
							<option value="brother">Brother</option>
							<option value="sister">Sister</option>
							<option value="relative">Relative</option>
							<option value="friend">Friend</option>
						</select> <span id="profilvalidate" style="color: red;"></span>
					</div>
					<div class="form-group">
						<label for="recipient-name" class="col-form-label"> Name</label> <input
							type="text" class="form-control" placeholder="" name="name"
							id="recipient-name3"> 
					</div>
					<div class="form-group">
						<label for="recipient-name" class="col-form-label"> Choose Profile</label> <input
							type="file" class="form-control" placeholder="" name="img"
							id="recipient-name100">  
							<div class="result" style="color:red;"><?php
								if(isset($_SESSION["msg"]))
								{
									echo $_SESSION["msg"];
									unset($_SESSION["msg"]);
								}
							?></div>
					</div>
					<div class="form-group search-box">
						<label for="recipient-name" class="col-form-label">Email
							id</label> <input type="email" class="form-control" placeholder=""
							name="email" id="recipient-name4"> 
							<div class="result" style="color:red;">
							<?php
								if(isset($_SESSION["msge"]))
								{
									echo $_SESSION["msge"];
									unset($_SESSION["msge"]);
								}
							?>
							</div>
					</div>
					<div class="form-group">
						<label for="recipient-name" class="col-form-label">Date of
							birth </label> <input type="date" class="form-control"
							placeholder="DD-MM-YYYY" name="date" id="recipient-name5">
						<span id="datevalidate" style="color: red;"></span>
					</div>
					<div class="form-group">
						<label for="recipient-name" class="col-form-label">Password</label>
						<input type="password" class="form-control" placeholder=""
							name="password" id="recipient-name6"> <span
							id="passwordvalidate" style="color: red;"></span>
					</div>
					<div class="form-group">
						<label for="recipient-name" class="col-form-label">Conform
							Password</label> <input type="password" class="form-control"
							placeholder="" name="conformpassword" id="recipient-name0">
						<span id="conpasswordvalidate" style="color: green;"></span>
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
				  profile:
					  {
					      required:true
					  },
				      name:
				    	  {
				    	          required:true,
				    	          minlength:4       
				    	  },
				    	  email:
				    		  {
				    		        required:true,
				    		        email:true,
				    		  },
							  img:
				    		  {
				    		        required:true,
							  },
				    		  date:
				    			  {
				    			      required:true
				    			  },
				    		  password:
				    			  {
				    			         required:true,
				    			         strongPassword: true,
				    			         minlength:8
				    			  },
				    			  conformpassword:
				    				  {
				    				      required:true,
				    				      equalTo:"#recipient-name6"
				    				  }
				    			 
				  },
				  messages:
					  {
					  email: {
					        required: 'Please enter an email address.',
					        email: 'Please enter a <em>valid</em> email address.',

					      },
						  img: {
					        required: 'Please upload valid image.',
					      },
					  }
		  });
	   });
	</script>
</body>
</html>