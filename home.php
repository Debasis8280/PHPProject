<?php session_start();
	if($_SESSION["email"]==null)
	{
		header("location: login#login-popup");
	}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Insert title here</title>
</head>
<body>
	<?php
		require "home_header.php";
		require "home_banner.php";
		require "home_footer.php";
	?>
</body>
</html>