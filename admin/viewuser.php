<?php session_start();
	if($_SESSION["email"]==null  && $_SESSION["email"]!="Admin@gmail.com")
	{
		header("location: ../login#login-popup");
	}
?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Users</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="../css/font-awesome.css">		
    <link rel="stylesheet" href="css/style.css">
  </head>
<style>
    table, th, td  {
  border: 1px solid black;
  text-align:center;
  padding:5px;
    }
td{
    padding:5px;
}
img{
    height:100px;
    width:100px;
}
.user
{
    border: 1px solid black;
    padding:10px;
    background:green;
    color:black;
}
.search{
  float: right;
  padding: 6px;
  border: none;
  margin-top: 8px;
  margin-right: 16px;
  font-size: 17px;
}
button {
    height: 42px;
    margin-top: auto;
}
</style>
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
		  		<a href="#" class="img logo rounded-circle mb-5" style="background-image: url(<?php echo $profile;?>);"></a>
	        <ul class="list-unstyled components mb-5">
	          <li class="active">
              <a href="index">Home</a>
	          </li>
	        </ul>
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
        <!-- table -->
        <?php
          $limit = 4;
          $sql1 = "SELECT count(*) FROM users";
          $pst1 = $conn->query($sql1);
          $total_results = $pst1->fetchColumn();
          $total_pages = ceil($total_results/$limit);
  
          if (!isset($_GET['page'])) {
              $page = 1;
          } else{
              $page = $_GET['page'];
          }
          $starting_limit = ($page-1)*$limit;
          $sql="select  PROFILEID,profile,NAME,RELIGION,COUNTRYLIVINGIN,MATRIMONYPROFILEFOR,MOTHERTONGUE,GENDER from users limit $starting_limit,$limit";
          $pst=$conn->query($sql);
          $pst->execute();
          echo "<div>";
            echo "<table style='border:2px solid black;'>";
                 echo "<tr>";
                      echo "<th>PROFILE ID</th>";
                      echo "<th>PROFILE </th>";
                      echo "<th>NAME </th>";
                      echo "<th>GENDER </th>";
                      echo "<th>COUNTRY ID</th>";
                      echo "<th>PROFILE FOR ID</th>";
                      echo "<th>MOTHERTONGUE</th>";
                      echo "<th>DELETE</th>";
                      echo "<th>MESSAGE</th>";
                 echo "</tr>";
          while($row=$pst->fetch())
          { 
            echo "<tr>";
                echo "<td>";
                    echo $row["PROFILEID"];
                echo "</td>";
                echo "<td>";
                    echo "<img src=$row[profile]>";
                echo "</td>";
                echo "<td>";
                    echo $row["NAME"];
                echo "</td>";
                echo "<td>";
                echo $row["GENDER"];
            echo "</td>";
                echo "<td>";
                    echo $row["COUNTRYLIVINGIN"];
                echo "</td>";
                echo "<td>";
                    echo $row["MATRIMONYPROFILEFOR"];
                echo "</td>";
                echo "<td>";
                    echo $row["MOTHERTONGUE"];
                echo "</td>";
                echo "<td>";
                echo "<a href='deleteuser?user=$row[PROFILEID]' class='user'>Delete</a>";
                echo "</td>";
                echo "<td>";
                    echo "<a href='message?user=$row[PROFILEID]#login-popup' class='user'>Message</a>";
                echo "</td>";
            echo "</tr>";
          }
          echo "</table>";
          echo "</div>";
        ?>
        <br>
        <?php  for ($page=1; $page <= $total_pages ; $page++):?>
<a href='<?php echo "?page=$page"; ?>' class="user"><?php  echo $page; ?>
 </a>

<?php endfor; ?>


      </div>
</div>
    <?php

    ?>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>