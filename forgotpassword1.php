
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
<title>Reset Password Form  Responsive Widget Template | Home :: w3layouts</title>
<link href="css/forgetpassword.css" rel="stylesheet" type="text/css" media="all"/>
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
	<h2>Reset Password Form</h2>
	<div class="element-main">
		<h1>Forgot Password</h1>
		<?php if(isset($_GET["error"]))
			{
				echo "<p style='color:red;'>$_GET[error]</p>";
			}
		?>
		<p>Forgot Your Password And Keep your Password Secure</p>
		<form action="database/changepassword" method="post"
					class="px-3 pt-3 pb-0" name="forget" id="form">
			<input type="email" name="email" placeholder="Enter email">
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
				  
				    	  email:
				    		  {
				    		        required:true,
				    		        email:true,
				    		       
				    		  },
				    		
				  },
				  messages:
					  {
					  email: {
					        required: 'Please enter an email address.',
					        email: 'Please enter a <em>valid</em> email address.',

					      }
					  
					  }
		  });
	   });
	</script>
</body>
</html>