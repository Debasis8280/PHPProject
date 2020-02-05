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
<!-- <link rel="stylesheet" href="css/bootstrap.css">-->
<!-- Bootstrap-Core-CSS -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<!-- Style-CSS -->
<link rel="stylesheet" href="css/font-awesome.min.css">
<!-- Font-Awesome-Icons-CSS -->


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
	<div id="register-popup" class="popup-effect" style="top: -120px;">
		<div class="popup">
			<h5 class="modal-title text-uppercase"></h5>
			<div class="lregister-form">
				<form  action="database/editupdate" method="post">
                <div id="myTabContent" class="tab-content">
				  <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
				    <div class="basic_1">
				    	<h3>Basics & Lifestyle</h3>
				    	<div class="col-md-6 basic_1-left">
				    	  <table class="table_working_hours">
				        	<tbody>
				        		<tr class="opened_1">
									<td class="day_label">Name :</td>
									<td class="day_value"><input type="text" name="name" value="<?php echo $name?>" class="form-control"></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Marital Status :</td>
									<td class="day_value"><input type="text" name="Marital_Status" value="<?php echo $marital_status?>" class="form-control"></td>
								</tr>
								<tr class="opened">
									<td class="day_label">No Of Children :</td>
									<td class="day_value"><input type="text" name="Children" value="<?php echo $marital_status_numberofchildren?>" class="form-control"></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Body Type :</td>
									<td class="day_value"><input type="text" name="Body" value="<?php echo $body?>" class="form-control"></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Height :</td>
									<td class="day_value"><input type="text" name="Height" value="<?php echo $height?>" class="form-control"></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Physical Status :</td>
									<td class="day_value closed"><span><input type="text" name="Physical" value="<?php echo $any_disability?>" class="form-control"></span></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Profile Created by :</td>
									<td class="day_value closed"><span><input type="text" name="Profile" value="<?php echo $matrimonyprofilefor?>" class="form-control"></span></td>
								</tr>
								<tr class="opened">
									<td class="day_label">Drink :</td>
									<td class="day_value closed"><span><input type="text" name="Drink" value="<?php echo $DrinkingHabit?>" class="form-control"></span></td>
								</tr>
						    </tbody>
				          </table>
				         </div>
				         <div class="col-md-6 basic_1-left">
				          <table class="table_working_hours">
				        	<tbody>
				        		<tr class="opened_1">
									<td class="day_label">Age :</td>
									<td class="day_value"><input type="text" name="Age" value="<?php echo $age?>" class="form-control">Yrs</td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Mother Tongue :</td>
									<td class="day_value"><input type="text" name="MotherTongue" value="<?php echo $mothertongue?>" class="form-control"></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Body Color :</td>
									<td class="day_value"><input type="text" name="BodyColor" value="<?php echo $body;?>" class="form-control"></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Weight :</td>
									<td class="day_value"><input type="text" name="Weight" value="<?php echo $Weight?>" class="form-control"></td>
								</tr>
							    <tr class="closed">
									<td class="day_label">Diet :</td>
									<td class="day_value closed"><span><input type="text" name="Diet" value="<?php echo $eatinghabit?>" class="form-control"></span></td>
								</tr>
							    <tr class="closed">
									<td class="day_label">Smoke :</td>
									<td class="day_value closed"><span><input type="text" name="Smoke" value="<?php echo $SmokingHabit?>" class="form-control"></span></td>
								</tr>
						    </tbody>
				        </table>
				        </div>
				        <div class="clearfix"> </div>
				    </div>
				    <div class="basic_1">
				    	<h3>Religious / Social & Astro Background</h3>
				    	<div class="col-md-6 basic_1-left">
				    	  <table class="table_working_hours">
				        	<tbody>
				        		<tr class="opened">
									<td class="day_label">Time of Birth :</td>
									<td class="day_value"><input type="text" name="TimeBirth" value="<?php echo $Time_of_Birth?>" class="form-control"></td>
								</tr>
				        		<tr class="opened">
									<td class="day_label">Caste :</td>
									<td class="day_value"><input type="text" name="Caste" value="<?php echo $cast?>" class="form-control"></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Date of Birth :</td>
									<td class="day_value closed"><span><input type="text" name="DateBirth" value="<?php echo $dateofbirth?>" class="form-control"></span></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Place of Birth:</td>
									<td class="day_value closed"><span><input type="text" name="PlaceBirth" value="<?php echo $Place_of_Birth?>" class="form-control"></span></td>
								</tr>
							 </tbody>
				          </table>
				         </div>
				         <div class="col-md-6 basic_1-left">
				          <table class="table_working_hours">
				        	<tbody>
				        		<tr class="opened_1">
									<td class="day_label">Religion :</td>
									<td class="day_value"><input type="text" name="Religion" value="<?php echo $religion?>" class="form-control"></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Caste :</td>
									<td class="day_value"><input type="text" name="Caste" value="<?php echo $cast?>" class="form-control"></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Raasi :</td>
									<td class="day_value"><input type="text" name="Raasi" value="<?php echo $Raasi?>" class="form-control"></td>
								</tr>
							</tbody>
				        </table>
				        </div>
				        <div class="clearfix"> </div>
				    </div>
				    <div class="basic_1 basic_2">
				    	<h3>Education & Career</h3>
				    	<div class="basic_1-left">
				    	  <table class="table_working_hours">
				        	<tbody>
				        		<tr class="opened">
									<td class="day_label">Education   :</td>
									<td class="day_value"><input type="text" name="Education" value="<?php echo $highest_education?>" class="form-control"></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Occupation Detail :</td>
									<td class="day_value closed"><span><input type="text" name="Occupation" value="<?php echo $occupation_status?>" class="form-control"></span></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Annual Income :</td>
									<td class="day_value closed"><span>Rs.<input type="text" name="Annual" value="<?php echo $annual_income?>" class="form-control"></span></td>
								</tr>
							 </tbody>
				          </table>
				         </div>
                         <input type="submit" value="update" name="submit"style="margin-left:250px;background:green;color:white;">
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