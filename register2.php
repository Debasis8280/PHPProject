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
	<div id="register-popup" class="popup-effect"style="top: -120px;">
		<div class="popup">
			<h5 class="modal-title text-uppercase">Register</h5>
			<div class="lregister-form">
				<form action="database/register2.php" method="post" class="px-3 pt-3 pb-0" id="form">
					<div class="form-group">
						<label for="recipient-name7" class="col-form-label">Gender
							</label>
							<select name="gender" class="form-control" placeholder=""
							name="gender" id="recipient-name8" required="">
								<option value="">-Select-</option>
								<option value="male">Male</option>
								<option value="female">Female</option>
								<option value="Other">Other</option>
							</select>
							
					</div>
					<div class="form-group">
						<label for="recipient-name" class="col-form-label">Mobile No
							</label> <input type="text" class="form-control" placeholder=""
							name="mobile" id="recipient-name7">
					</div>
					<div class="form-group">
						<label for="recipient-name" class="col-form-label">Religion
							</label>
							<select class="form-control" id="recipient-name10" name="religion">
								<option value="" hidden="hidden"> Select Religion </option>
								<option value="hindu">Hindu</option>
								<option value="muslim">Muslim - Shia</option>
								<option value="Muslim - Sunni">Muslim - Sunni</option>
								<option value="Muslim - Others">Muslim - Others</option>
								<option value="Christian - Catholic">Christian - Catholic</option>
								<option value="Christian - Orthodox">Christian - Orthodox</option>
								<option value="Christian - Protestant">Christian - Protestant</option>
								<option value="Christian - Others">Christian - Others</option>
								<option value="Sikh">Sikh</option>
								<option value="Jain - Digambar">Jain - Digambar</option>
								<option value="Jain - Shwetambar">Jain - Shwetambar</option>
								<option value="Jain - Others">Jain - Others</option>
								<option value="Parsi">Parsi</option>
								<option value="Buddhist">Buddhist</option>
								<option value="Inter-Religion">Inter-Religion</option>
								<option value="No Religious Belief">No Religious Belief</option>
							</select>
					</div>
					<div class="form-group">
						<label for="recipient-name" class="col-form-label">Mother Tongue
							</label> 
							<select name="mothertongue" class="form-control" id="recipient-name800">
                                <option value="">-Select-</option>
                                <option value=Angika>Angika</option>
                                <option value=Arunachali>Arunachali</option>
                                <option value=Assamese>Assamese</option>
                                <option value=Awadhi>Awadhi</option>
                                <option value=Bengali>Bengali</option>
                                <option value=Bhojpuri>Bhojpuri</option>
                                <option value=Brij>Brij</option>
                                <option value=Bihari>Bihari</option>
                                <option value=Badaga>Badaga</option>
                                <option value=Chatisgarhi>Chatisgarhi</option>
                                <option value=Dogri>Dogri</option>
                                <option value=English>English</option>
                                <option value=French>French</option>
                                <option value=Garhwali>Garhwali</option>
                                <option value=Garo>Garo</option>
                                <option value=Gujarati>Gujarati</option>
                                <option value=Haryanvi>Haryanvi</option>
                                <option value=Himachali/Pahari>Himachali/Pahari</option>
                                <option value=Hindi>Hindi</option>
                                <option value=Kanauji>Kanauji</option>
                                <option value=Kannada>Kannada</option>
                                <option value=Kashmiri>Kashmiri</option>
                                <option value=Khandesi>Khandesi</option>
                                <option value=Khasi>Khasi</option>
                                <option value=Konkani>Konkani</option>
                                <option value=Koshali>Koshali</option>
                                <option value=Kumoani>Kumoani</option>
                                <option value=Kutchi>Kutchi</option>
                                <option value=Lepcha>Lepcha</option>
                                <option value=Ladacki>Ladacki</option>
                                <option value=Magahi>Magahi</option>
                                <option value=Maithili>Maithili</option>
                                <option value=Malayalam>Malayalam</option>
                                <option value=Manipuri>Manipuri</option>
                                <option value=Marathi>Marathi</option>
                                <option value=Marwari>Marwari</option>
                                <option value=Miji>Miji</option>
                                <option value=Mizo>Mizo</option>
                                <option value=Monpa>Monpa</option>
                                <option value=Nicobarese>Nicobarese</option>
                                <option value=Nepali>Nepali</option>
                                <option value=Odia>Odia</option>
                                <option value=Punjabi>Punjabi</option>
                                <option value=Rajasthani>Rajasthani</option>
                                <option value=Sanskrit>Sanskrit</option>
                                <option value=Santhali>Santhali</option>
                                <option value=Sindhi>Sindhi</option>
                                <option value=Sourashtra>Sourashtra</option>
                                <option value=Tamil>Tamil</option>
                                <option value=Telugu>Telugu</option>
                                <option value=Tripuri>Tripuri</option>
                                <option value=Tulu>Tulu</option>
                                <option value=Urdu>Urdu</option>
                        </select>
					</div>
					<div class="form-group">
						<label for="recipient-name1" class="col-form-label">Country living in</label>
						<input type="text" class="form-control" placeholder="Country"
							name="country" id="recipient-name150">
					</div>
					<div class="right-w3l">
						<input type="submit" class="form-control"value="Next">
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
					gender:
					  {
					      required:true,
					  },
				      mobile:
				    	  {
							  required:true,
				    	       minlength:10,  
								maxlength:10   
				    	  },
				    	  religion:
				    		  {
				    		        required:true,
				    		  },
							  mothertongue:
				    		  {
				    		        required:true,
				    		  },
				    		  country:
				    			  {
				    			      required:true,
				    			  },
				  },
				  
		  });
	   });
	</script>
</body>
</html>