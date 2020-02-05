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
<title>LouOut</title>
</head>
<body>
		<?php
			if(isset($_SESSION["email"]))
			{	session_destroy();
				header("location: index");
			}
		?>
</body>
</html>