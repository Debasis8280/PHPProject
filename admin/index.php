<?php session_start();
	if($_SESSION["email"]==null  && $_SESSION["email"]!="Admin@gmail.com")
	{
		header("location: ../login#login-popup");
	}
?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="../css/font-awesome.css">
		<link rel="stylesheet" href="css/style.css">
    <style>
        .card {
  /* Add shadows to create the "card" effect */
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 192px;
  float:left;
}

/* On mouse-over, add a deeper shadow */
.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

/* Add some padding inside the card container */
.container {
  padding: 2px 16px;
}
    </style>
  </head>
  <body>
    <?php
        require"../database/mainDatabase.php";
        $conn=DataBaseConnection::getMysqlConnection();
        $sql="select img from admin";
        $pst=$conn->prepare($sql);
        $profile="";
        if($pst->execute())
        {
          while($row=$GLOBALS["pst"]->fetch())
          {
            $GLOBALS["profile"]=$row["img"];
          }
        }
    ?>
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="p-4 pt-5">
		  		<a href="../uploadmoreprofileImage?msg=Admin" class="img logo rounded-circle mb-5" style="background-image: url(<?php echo $profile;?>);"></a>
	      </div>
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">

            <button type="button" id="sidebarCollapse" class="btn btn-primary">
              <i class="fa fa-bars"></i>
              <span class="sr-only">Toggle Menu</span>
            </button>
            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent"><h2 style="margin-top:8px;">Dashboard</h2>
              <ul class="nav navbar-nav ml-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="#">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="forgotpassword">Change Password</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../logout">LogOut</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>   
        <!-- card -->
        <?php
          $sql="select count(PROFILEID) as no from  users";
          $pst=$conn->query($sql);
          $pst->execute();
          $no="";
          while($row=$pst->fetch())
          {
            $GLOBALS["no"]=$row["no"];
          }
        ?>
        <div class="card">
            <div class="container">
              <h4><b><a href="viewuser" style="color:black;">Total Users</a></b></h4>
              <p style="text-align:center;"><?php echo $no;?></p>
            </div>
        </div>
        <div class="card" style="margin-left:20px;">
            <div class="container">
              <h4><b>Message</b></h4>
              <p>Architect & Engineer</p>
            </div>
        </div>


      </div>
		</div>
    

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>