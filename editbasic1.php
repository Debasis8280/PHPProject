<?phpsession_start();
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
<!-- <link rel="stylesheet" href="css/bootstrap.css">
<!-- Bootstrap-Core-CSS -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<!-- Style-CSS -->
<link rel="stylesheet" href="css/font-awesome.min.css">
<!-- Font-Awesome-Icons-CSS -->
/

<!--web font-->
<link
	href="//fonts.googleapis.com/css?family=Inconsolata:400,700&amp;subset=latin-ext,vietnamese"
	rel="stylesheet">
<!--//web font-->
<style type="text/css">
.valid {
	border: 1px solid green
}

.error {
	color: red
}

#register-popup {
	overflow-y: scroll;
}
.popup {
    background: #fff;
    border-radius: 4px;
    max-width: 698px;
    position: relative;
    margin: 8em auto;
    padding: 3em 2em;
    z-index: 999;
}
</style>
<?php require "profile.php"?>
</head>

<body>
	<!-- popup for register -->
	<div id="register-popup" class="popup-effect" style="top: -120px;">
		<div class="popup">
			<h5 class="modal-title text-uppercase">Register</h5>
			<div class="lregister-form">
				<form  action="database/editupdate" method="post">
                <div id="myTabContent" class="tab-content">
				  <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
				    <div class="basic_1">
					<div class="basic_3">
				    	<h4>Family Details</h4>
				    	<div class="basic_1 basic_2">
				    	<h3>Basics</h3>
				    	<div class="col-md-6 basic_1-left">
				    	  <table class="table_working_hours">
				        	<tbody>
				        		<tr class="opened">
									<td class="day_label">Father's Occupation :</td>
									<td class="day_value"><input type="text" name="Occupationf" value="<?php echo $Father_Status?>" class="form-control"></td>
								</tr>
				        		<tr class="opened">
									<td class="day_label">Mother's Occupation :</td>
									<td class="day_value"><input type="text" name="Occupationm" value="<?php echo $Mother_Status?>" class="form-control"></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">No. of Brothers :</td>
									<td class="day_value closed"><span><input type="text" name="Brothers" value="<?php echo $Brothers?>" class="form-control"></span></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">No. of Sisters :</td>
									<td class="day_value closed"><span><input type="text" name="Sisters" value="<?php echo $Sister?>" class="form-control"></span></td>
								</tr>
								<tr class="opened">
									<td class="day_label">Family Status :</td>
									<td class="day_value closed"><span><input type="text" name="FamilyStatus" value="<?php echo $family_status ?>" class="form-control"></span></td>
								</tr>
								<tr class="opened">
									<td class="day_label">Family Type :</td>
									<td class="day_value closed"><span><input type="text" name="FamilyType" value="<?php echo $family_type ?>" class="form-control"></span></td>
								</tr>
								<tr class="opened">
									<td class="day_label">Family Value :</td>
									<td class="day_value closed"><span><input type="text" name="FamilyValue" value="<?php echo $family_values ?>" class="form-control"></span></td>
								</tr>
							 </tbody>
				          </table>
				         </div>
				       </div>
				    </div>
				    </div>
				    
				    <div class="basic_1 basic_2">
                         <input type="submit" value="update" name="submit1" style="margin-left:250px;background:green;color:white;">
				         <div class="clearfix"> </div>
				    </div>
				  </div>
				  
				</form>
			</div>
			<a class="close" href="#">&times;</a>
		</div>
	</div>
	<!-- popup for register -->
	
</body>
</html>