<?php session_start();
	if($_SESSION["email"]==null)
	{
		header("location: login#login-popup");
	}
?>
<!DOCTYPE HTML>
<html>
<body>
<?php require"home_header.php";?>
<div class="grid_3">
  <div class="container">
   <div class="breadcrumb1">
     <ul>
        <a href="home"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">View Profile</li>
     </ul>
   </div>
   <!-- retrive image -->
   <?php
		$email=$_SESSION["email"];
		//require"database/mainDatabase.php";
   		$conn=DataBaseConnection::getMysqlConnection();
   		$sql="select PROFILEID,profile,NAME,DATEOFBIRTH,gender,RELIGION,COUNTRYLIVINGIN,MATRIMONYPROFILEFOR,MOTHERTONGUE,login_time from users where profileid=:id";
		$pst=$conn->prepare($sql);
		$pst->bindParam(":id",$_SESSION["id"]);
		$profileid=0;
		$img="";$name="";$login_time="";$religion="";$countrylivingin="";$matrimonyprofilefor="";$mothertongue="";$dateofbirth="";;$gender="";
		if($result=$pst->execute())
		{
			function users()
			{
				if($row=$GLOBALS["pst"]->fetch())
				{
					$GLOBALS["profileid"]=$row["PROFILEID"];
					$GLOBALS["img"]=str_replace("../","",$row["profile"]);
					$GLOBALS["name"]=$row["NAME"];
					$GLOBALS["login_time"]=$row["login_time"];
					$GLOBALS["religion"]=$row["RELIGION"];
					$GLOBALS["countrylivingin"]=$row["COUNTRYLIVINGIN"];
					$GLOBALS["matrimonyprofilefor"]=$row["MATRIMONYPROFILEFOR"];
					$GLOBALS["mothertongue"]=$row["MOTHERTONGUE"];
					$GLOBALS["dateofbirth"]=$row["DATEOFBIRTH"];
					$GLOBALS["gender"]=$row["gender"];
				}
			}
		}
		users();
   ?>
    <?php
		  $sql1="select img1,img2,img3 from newimage where emailid=:email";
		  $pst=$conn->prepare($sql1);
		  $pst->bindParam(":email",$email);
		  $img1="";
		  $img2="";
		  $img3="";
		  if($result=$pst->execute())
		  {  
				function newimage()
				{
					while($row=$GLOBALS["pst"]->fetch())
					{
						$GLOBALS["img1"]=str_replace("../","",$row["img1"]);
						$GLOBALS["img2"]=str_replace("../","",$row["img2"]);
						$GLOBALS["img3"]=str_replace("../","",$row["img3"]);
					}
				}
		  }
		  newimage();
   ?> 
   <div class="profile">
   <p style="color:green;margin-left:250px;"><?php
					if(isset($_SESSION["update"]))
					{
						echo $_SESSION["update"];
						unset($_SESSION["update"]);
					}
				?></p>
   	 <div class="col-md-8 profile_left">
   	 	<h2>Profile Id :<?php echo $profileid;?> </h2>
   	 	<div class="col_3">
   	        <div class="col-sm-4 row_2">
				<div class="flexslider">
					 <ul class="slides">
						<li data-thumb="<?php echo $img?>">
							<img src="<?php echo $img?>" />
						</li>
						<li data-thumb="<?php echo $img1;?>" >
							<a href="uploadmoreprofileImage?msg=1"><img src="<?php echo $img1;?>" alt="Click For Upload New Image" /></a>
						</li>
						<li data-thumb="<?php echo $img2;?>">
							<a href="uploadmoreprofileImage?msg=2"><img src="<?php echo $img2;?>" alt="Click For Upload New Image" /></a>
						</li>
						<li data-thumb="<?php echo $img3;?>">
							<a href="uploadmoreprofileImage?msg=3"><img src="<?php echo $img3;?>" alt="Click For Upload New Image" /></a>
						</li>
					 </ul>
				  </div>
			</div>
			<?php
				/* its for personal details */
				$sql="select HEIGHT,AGE,MARITAL_STATUS,ANY_DISABILITY,FAMILY_STATUS,FAMILY_TYPE,FAMILY_VALUES,MARITAL_STATUS_NumberofChildren from personal_details where PROFILEID=:id";
				$pst=$conn->prepare($sql);
				$pst->bindParam(":id",$_SESSION["id"]);
				$height="";$age="";$marital_status="";$any_disability="";$family_status="";$family_values="";$family_type="";$marital_status_numberofchildren="";
				if($pst->execute())
				{
					function personal()
					{
						while($row=$GLOBALS["pst"]->fetch())
						{
							$GLOBALS["height"]=$row["HEIGHT"];
							$GLOBALS["age"]=$row["AGE"];
							$GLOBALS["marital_status"]=$row["MARITAL_STATUS"];
							$GLOBALS["any_disability"]=$row["ANY_DISABILITY"];
							$GLOBALS["family_status"]=$row["FAMILY_STATUS"];
							$GLOBALS["family_type"]=$row["FAMILY_TYPE"];
							$GLOBALS["family_values"]=$row["FAMILY_VALUES"];
							$GLOBALS["marital_status_numberofchildren"]=$row["MARITAL_STATUS_NumberofChildren"];
						}
					}
				}
				personal();
			?>
			<?php
				/* its for professional_details */

				$sql="select HIGHEST_EDUCATION,OCCUPATION_STATUS,ANNUAL_INCOME from professional_details where PROFILEID=:id";
				$pst=$conn->prepare($sql);
				$pst->bindParam(":id",$_SESSION["id"]);
				$highest_education="";$occupation_status="";$annual_income="";
				if($pst->execute())
				{
					function professional()
					{
						while($row=$GLOBALS["pst"]->fetch())
						{
							$GLOBALS["highest_education"]=$row["HIGHEST_EDUCATION"];
							$GLOBALS["occupation_status"]=$row["OCCUPATION_STATUS"];
							$GLOBALS["annual_income"]=$row["ANNUAL_INCOME"];
						}
					}
				}
				professional();
			?>
			<?php
				$sql="select cast from religion_detail where profileid=:id";
				$pst=$conn->prepare($sql);
				$pst->bindParam(":id",$_SESSION["id"]);
				$cast="";
				if($pst->execute())
				{
					function religion()
					{
						while($row=$GLOBALS["pst"]->fetch())
						{
							$GLOBALS["cast"]=$row["cast"];
						}
					}	
				}
				religion();
			?>
			<div class="col-sm-8 row_1">
				<table class="table_working_hours">
		        	<tbody>
		        		<tr class="opened_1">
							<td class="day_label">Name :</td>
							<td class="day_value"><?php echo $name;?></td>
						</tr>
		        		<tr class="opened_1">
							<td class="day_label">Age / Height :</td>
							<td class="day_value"><?php echo $age," , ",$height;?></td>
						</tr>
					    <tr class="opened">
							<td class="day_label">Gender :</td>
							<td class="day_value"><?php echo $gender?></td>
						</tr>
					    <tr class="opened">
							<td class="day_label">Religion :</td>
							<td class="day_value"><?php echo $religion;?></td>
						</tr>
					    <tr class="opened">
							<td class="day_label">Marital Status :</td>
							<td class="day_value"><?php echo $marital_status?></td>
						</tr>
					    <tr class="opened">
							<td class="day_label">Location :</td>
							<td class="day_value"><?php echo $countrylivingin?></td>
						</tr>
					    <tr class="closed">
							<td class="day_label">Profile Created by :</td>
							<td class="day_value closed"><span><?php echo $matrimonyprofilefor?></span></td>
						</tr>
					    <tr class="closed">
							<td class="day_label">Education :</td>
							<td class="day_value closed"><span><?php echo $highest_education?></spahn></td>
						</tr>
				    </tbody>
				</table>
			</div>
			<div class="clearfix"> </div>
		</div>
		<?php
			$sql="select Raasi,bodytype,Weight,DrinkingHabit,EATINGHABIT,SmokingHabit,Time_of_Birth,Place_of_Birth,Father_Status,Mother_Status,Brothers,Sister from matches where profileid=:id";
			$pst=$conn->prepare($sql);
			$pst->bindParam(":id",$_SESSION["id"]);
			$pst->execute();
			$body="";$Weight="";$DrinkingHabit="";$eatinghabit="";$SmokingHabit="";$Time_of_Birth="";$Place_of_Birth="";$Raasi="";$Father_Status="";$Mother_Status="";$Sister="";$Brothers="";
			while($row=$pst->fetch())
			{
				$GLOBALS["body"]=$row["bodytype"];
				$GLOBALS["Weight"]=$row["Weight"];
				$GLOBALS["DrinkingHabit"]=$row["DrinkingHabit"];
				$GLOBALS["eatinghabit"]=$row["EATINGHABIT"];
				$GLOBALS["SmokingHabit"]=$row["SmokingHabit"];
				$GLOBALS["Time_of_Birth"]=$row["Time_of_Birth"];
				$GLOBALS["Place_of_Birth"]=$row["Place_of_Birth"];
				$GLOBALS["Raasi"]=$row["Raasi"];
				$GLOBALS["Father_Status"]=$row["Father_Status"];
				$GLOBALS["Mother_Status"]=$row["Mother_Status"];
				$GLOBALS["Brothers"]=$row["Brothers"];
				$GLOBALS["Sister"]=$row["Sister"];
			}
		?>
		<div class="col_4">
		    <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
			   <ul id="myTab" class="nav nav-tabs nav-tabs1" role="tablist">
				  <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">About Myself</a></li>
				  <li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">Family Details</a></li>
			   </ul>
			   <div id="myTabContent" class="tab-content">
				  <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
				    <div class="basic_1">
				    	<h3>Basics & Lifestyle</h3><a class="close" href="editbasic#register-popup">Edit</a>
				    	<div class="col-md-6 basic_1-left">
				    	  <table class="table_working_hours">
				        	<tbody>
				        		<tr class="opened_1">
									<td class="day_label">Name :</td>
									<td class="day_value"><?php echo $name?></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Marital Status :</td>
									<td class="day_value"><?php echo $marital_status?></td>
								</tr>
								<tr class="opened">
									<td class="day_label">No Of Children :</td>
									<td class="day_value"><?php echo $marital_status_numberofchildren?></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Body Type :</td>
									<td class="day_value"><?php echo $body?></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Height :</td>
									<td class="day_value"><?php echo $height?></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Physical Status :</td>
									<td class="day_value closed"><span><?php echo $any_disability?></span></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Profile Created by :</td>
									<td class="day_value closed"><span><?php echo $matrimonyprofilefor?></span></td>
								</tr>
								<tr class="opened">
									<td class="day_label">Drink :</td>
									<td class="day_value closed"><span><?php echo $DrinkingHabit?></span></td>
								</tr>
						    </tbody>
				          </table>
				         </div>
				         <div class="col-md-6 basic_1-left">
				          <table class="table_working_hours">
				        	<tbody>
				        		<tr class="opened_1">
									<td class="day_label">Age :</td>
									<td class="day_value"><?php echo $age?> Yrs</td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Mother Tongue :</td>
									<td class="day_value"><?php echo $mothertongue?></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Body Color :</td>
									<td class="day_value"><?php echo $body;?></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Weight :</td>
									<td class="day_value"><?php echo $Weight?></td>
								</tr>
							    <tr class="closed">
									<td class="day_label">Diet :</td>
									<td class="day_value closed"><span><?php echo $eatinghabit?></span></td>
								</tr>
							    <tr class="closed">
									<td class="day_label">Smoke :</td>
									<td class="day_value closed"><span><?php echo $SmokingHabit?></span></td>
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
									<td class="day_value"><?php echo $Time_of_Birth?></td>
								</tr>
				        		<tr class="opened">
									<td class="day_label">Caste :</td>
									<td class="day_value"><?php echo $cast?></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Date of Birth :</td>
									<td class="day_value closed"><span><?php echo $dateofbirth?></span></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Place of Birth :</td>
									<td class="day_value closed"><span><?php echo $Place_of_Birth?></span></td>
								</tr>
							 </tbody>
				          </table>
				         </div>
				         <div class="col-md-6 basic_1-left">
				          <table class="table_working_hours">
				        	<tbody>
				        		<tr class="opened_1">
									<td class="day_label">Religion :</td>
									<td class="day_value"><?php echo $religion?></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Caste :</td>
									<td class="day_value"><?php echo $cast?></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Raasi :</td>
									<td class="day_value"><?php echo $Raasi?></td>
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
									<td class="day_value"><?php echo $highest_education?></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Occupation Detail :</td>
									<td class="day_value closed"><span><?php echo $occupation_status?></span></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Annual Income :</td>
									<td class="day_value closed"><span>Rs.<?php echo $annual_income?></span></td>
								</tr>
							 </tbody>
				          </table>
				         </div>
				         <div class="clearfix"> </div>
				    </div>
				  </div>
				  <div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
				    <div class="basic_3">
				    	<h4>Family Details</h4><a class="close" href="editbasic1#register-popup">Edit</a>
				    	<div class="basic_1 basic_2">
				    	<h3>Basics</h3>
				    	<div class="col-md-6 basic_1-left">
				    	  <table class="table_working_hours">
				        	<tbody>
				        		<tr class="opened">
									<td class="day_label">Father's Occupation :</td>
									<td class="day_value"><?php echo $Father_Status?></td>
								</tr>
				        		<tr class="opened">
									<td class="day_label">Mother's Occupation :</td>
									<td class="day_value"><?php echo $Mother_Status?></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">No. of Brothers :</td>
									<td class="day_value closed"><span><?php echo $Brothers?></span></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">No. of Sisters :</td>
									<td class="day_value closed"><span><?php echo $Sister?></span></td>
								</tr>
								<tr class="opened">
									<td class="day_label">Family Status :</td>
									<td class="day_value closed"><span><?php echo $family_status ?></span></td>
								</tr>
								<tr class="opened">
									<td class="day_label">Family Type :</td>
									<td class="day_value closed"><span><?php echo $family_type ?></span></td>
								</tr>
								<tr class="opened">
									<td class="day_label">Family Value :</td>
									<td class="day_value closed"><span><?php echo $family_values ?></span></td>
								</tr>
							 </tbody>
				          </table>
				         </div>
				       </div>
				    </div>
				 </div>
		     </div>
		  </div>
	   </div>
   	 </div>
     <div class="col-md-4 profile_right">
     	<div class="newsletter">
		   <form>
			  <input type="text" name="ne" size="30" required="" placeholder="Enter Profile ID :">
			  <input type="submit" value="Go">
		   </form>
        </div>
        <div class="view_profile">
        	<h3>View Similar Profiles</h3>
        	<ul class="profile_item">
				<?php
					$sql1="select GENDER from users where profileid=:id";
					$pst1=$conn->prepare($sql1);
					$pst1->bindParam(":id",$_SESSION["id"]);
					if($pst1->execute())
					{
						if($row1=$pst1->fetch())
						{
							$sql="select u.NAME,u.profile,u.GENDER,u.profileid,u.RELIGION,u.COUNTRYLIVINGIN,p.age,p.height from users u natural join personal_details p";
							$profile="";
							$pst=$conn->query($sql);
								while($row=$pst->fetch())
								{
									if($row["GENDER"]!=$row1["GENDER"] && $row["profileid"]!=$_SESSION["id"])
									{
										$profile=str_replace("../","",$row["profile"]);
										echo "<a href='userprofile?userid=$row[profileid]'>";
										echo "<li class='profile_item-img'>";
										echo "<img src=$profile class='img-responsive' alt=''/>";
										echo "</li>";
										echo "<li class='profile_item-desc'>";
										echo "<h4>$row[profileid]</h4>";
										echo "<p>$row[age] Yrs,$row[height] $row[RELIGION]</p>";
										echo "<h5>View Full Profile</h5>";
										echo "</li>";
										echo "<div class='clearfix'> </div>";
									}
								}	
						}
					}
				?>
        	  </a>
           </ul>
        </div>
       <div class="clearfix"> </div>
    </div>
  </div>
</div>
<!-- FlexSlider -->
<script defer src="js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script>   
</body>
<hr style="height: 20px; background-color: black;">
<?php require"home_footer.php"; ?>
</html>	