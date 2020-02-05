<?php session_start();
	if($_SESSION["email"]==null  && $_SESSION["email"]!="Admin@gmail.com")
	{
		header("location: ../login#login-popup");
	}
?>
<!DOCTYPE html>
<html>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Wedding Organizer Wedding Category Flat Bootstrap Responsive Website Template | Home</title>
	
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
    
	<!-- css files --><!-- "WebContent/register.jsp" -->
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
.popup {
    background: #fff;
    border-radius: 4px;
    max-width: 500px;
    position: relative;
    margin: 8em auto;
    padding: 3em 2em;
    z-index: 999;
}
.popup-effect:target {
    visibility: visible;
    opacity: 1;
}
.popup-effect {
    position: fixed;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    background: rgba(0, 0, 0, 0.7);
    transition: opacity 0ms;
    visibility: hidden;
    opacity: 0;
    z-index: 99;
}
.popup .close {
    position: absolute;
    top: 10px;
    right: 15px;
    transition: all 200ms;
    font-size: 30px;
    font-weight: bold;
    text-decoration: none;
    color: #000;
}
.right-w3l input[type="submit"] {
    margin-left: 150px;
    background: #17a2b8;
    border: none;
    color: #fff;
    font-size: 15px;
    text-transform: capitalize;
    letter-spacing: 1px;
    cursor: pointer;
    width: auto;
    padding: 8px 25px;
    border-radius: 0;
}
	</style>
</head>
</head>
<body>
<?php
    require "viewuser.php";
    //$userid="";
    if(isset($_GET["user"]))
    {
        $_SESSION["userid"]=$_GET["user"];
    }
    if(isset($_REQUEST["send"]))
    {
            $conn=DataBaseConnection::getMysqlConnection();
            $sql="select emailid from users where profileid=:profileid";
            $pst=$conn->prepare($sql);
            $pst->bindParam(":profileid",$_SESSION["userid"]);
            $pst->execute();
            $email="";
            if($row=$pst->fetch())
            {   
                $GLOBALS["email"]=$row["emailid"];
            }
            $to=$email;
            $sub=$_REQUEST["subject"];
            $message=$_REQUEST["message"];
             if(mail($to,$sub,$message))
             {
                 echo "send";
                 unset($_SESSION["userid"]);
             }
             else{
                 echo "not";
             }
    }
?>
	<!-- popup for login -->
<div id="login-popup" class="popup-effect">
	<div class="popup">
		<h5 class="modal-title text-uppercase">Message</h5>
		<div class="login-form">
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="px-3 pt-3 pb-0">
                <div class="form-group">
					<label  class="col-form-label">Subject</label>
					<input type="text" class="form-control" placeholder=" subject " name="subject" id="recipient-name" required="">
				</div>
				<div class="form-group">
					<label class="col-form-label">Message</label>
					<textarea name="message" class="form-control" rows="4" cols="50"></textarea>
				</div>
				<div class="right-w3l">
					<input type="submit" class="form-control" value="Send" name="send">
				</div>
			</form>
		</div>
		<a class="close" href="#">&times;</a>
	</div>
</div>

<!-- popup for login -->
</body>
</html>