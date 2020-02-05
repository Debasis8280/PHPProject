<?phpsession_start();
	if($_SESSION["email"]==null)
	{
		header("location: login#login-popup");
	}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Marital an Wedding Category </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="css/home.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
<!----font-Awesome----->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!----font-Awesome----->
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});

</script>
<style type="text/css">
.top_header {
    margin-left: 736px;
    margin-right: -15px;
}
img {
  border-radius: 50%;
  width: 37px;
}
</style>
<link href="bootstrap/bootstrap.css">
<link href="bootstrap/bootstrap.min.css">
</head>
<body>
<!-- ============================  Navigation Start =========================== -->
 <div class="navbar navbar-inverse-blue navbar">
    <!--<div class="navbar navbar-inverse-blue navbar-fixed-top">-->
      <div class="navbar-inner">
        <div class="container">
           
           <a class="brand" href="home"><p style="display: inline; font-size: 30px; margin-top: 20px; color: white;">Wedding</p></a>
           <div class="pull-right">
          	<nav class="navbar nav_bottom" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
		  <div class="navbar-header nav_2">
		      <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">Menu
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="#"></a>
		   </div> 
		   <!-- Collect the nav links, forms, and other content for toggling -->
			<?php
					require "database/mainDatabase.php";
					$conn=DataBaseConnection::getMysqlConnection();
					$sql="select count(gender) as c from users where gender!=:gender";
					$pst=$conn->prepare($sql);
					$pst->bindParam("gender",$_SESSION["gender"]);
					$pst->execute();
					$count="";
					while($row=$pst->fetch())
					{
						$GLOBALS["count"]=$row["c"];
					}
			?>
		    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
		        <ul class="nav navbar-nav nav_1">
		            <li><a href="home">Home</a></li>
		    		<li class="dropdown">
		              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Matches<span class="caret"></span></a>
		              <ul class="dropdown-menu" role="menu">
		                <li><a href="matches">Matches(<?php echo $count?>)</a></li>
		              </ul>
		            </li>
					<li class="dropdown">
		              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Search<span class="caret"></span></a>
		              <ul class="dropdown-menu" role="menu">
		                <li><a href="searchbyname"> Search By Name</a></li>
		                <li><a href="searchbylocation">Search By Location</a></li>
						<li><a href="searchbyid">Search By Id</a></li>
		              </ul>
		            </li>
					<?php
						
						$sql="select profile from users where emailid=:email";
						$pst=$conn->prepare($sql);
						$pst->bindParam(":email",$_SESSION["email"]);
						$img="";
						if($result=$pst->execute())
						{
							function image()
							{
								if($row=$GLOBALS["pst"]->fetch())
								{
									$GLOBALS['img']=str_replace("../","",$row["profile"]);
								}
							}
						}
						image();
						
					?>
		            <li class="last"><a href="contact.html">Contacts</a></li>
		            <li  class="dropdown" style="margin-top: -15px;">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="<?php echo $img;?>" alt="Profile"><span class="caret"></span></a>
		            	<ul class="dropdown-menu" role="menu">
		            		<li><a href="profile">Profile</a></li>  
			                <li><a href="forgotpassword1">Change Password</a></li>
			                <li><a href="logout">LogOut</a></li>
		            	</ul>
		            </li>
		         
		        </ul>
		     </div><!-- /.navbar-collapse -->
		    </nav>
		   </div> <!-- end pull-right -->
          <div class="clearfix"> </div>
        </div> <!-- end container -->
      </div> <!-- end navbar-inner -->
    </div> <!-- end navbar-inverse-blue -->
<!-- ============================  Navigation End ============================ -->