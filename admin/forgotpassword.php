<?php session_start();
	if($_SESSION["email"]==null  && $_SESSION["email"]!="Admin@gmail.com")
	{
		header("location: ../login#login-popup");
	}
?>
<!DOCTYPE HTML>
<html>
<head>
<style type="text/css">
	
.valid {
	border: 1px solid green
}

.error {
	color: red
}

</style>
<script type="text/javascript">
function myFunction() {
	  var x = document.getElementById("password");
	  if (x.type === "password") {
	    x.type = "text";
	  } else {
	    x.type = "password";
	  }
	  
	}
function myFunction1() {
	  var x = document.getElementById("conformpassword");
	  if (x.type === "password") {
	    x.type = "text";
	  } else {
	    x.type = "password";
	  }
	  
	}
</script>
<title>Reset Password </title>
<link href="../css/forgetpassword.css" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="Reset Password Form Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!--google fonts-->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
</head>
<body>
<!--element start here-->
<div class="elelment">
	<h2>Password Change Form</h2>
	<div class="element-main">
		<h1>Enter Password</h1>
		<form action="changepassword" method="post"
					class="px-3 pt-3 pb-0" name="otp" id="form">
			<input type="password" name="password"  style="height: 35px; width: 350px;" placeholder="Password11414" id="password">
			<input type="checkbox" onclick="myFunction()">Show Password
			<input type="password" name="conformpassword" style="height: 35px; width: 350px;" placeholder="Conform Password" id="conformpassword">
			<input type="checkbox" onclick="myFunction1()">Show Conform Password
			<input type="submit" value="Reset my Password">
		</form>
	</div>
</div>
<!--element end here-->

<script src="jquery/jquery-2.1.3.min.js"></script>
	<script
		src="jquery/jquery.validate.min.js"></script>
	<script
		src="jquery/additional-methods.min.js"></script>
	<!-- <script type="text/javascript" src="js/registerValidate.js"></script> -->
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
				    		  password:
				    			  {
				    			         required:true,
				    			         strongPassword: true,
				    			         minlength:8
				    			  },
				    			  conformpassword:
				    				  {
				    				      required:true,
				    				      equalTo:"#password"
				    				  }
				    			 
				  },
		  });
	   });
	</script>
</body>
</html>