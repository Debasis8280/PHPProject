<?php session_start(); 
if($_SESSION["email"]==null)
{
    header("location: login#login-popup");
}

require "home_header.php"?>
<style>
    .i{
        width: 200px;
    }
.user
{
    border: 1px solid black;
    padding:10px;
    background:green;
    color:black;
}
</style>

<div class="grid_3">
  <div class="container">
   <div class="breadcrumb1">
      <ul>
        <a href="home"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">Profile</li>
      </ul>
   </div>
  <div class="col-md-9 profile_left1">
      <h1>Matches</h1><p style="color:green;font-weight:bold; margin-left:200px;"><?php if(isset($_SESSION["send"]))
                                {
                                    echo $_SESSION["send"];
                                   // unset($_SESSION["send"]);
                                }
      ?></p>
      <?php
       $conn=DataBaseConnection::getMysqlConnection();
       $limit = 4;
       $gender=$_SESSION["gender"];
       $sql1 = "SELECT count(*) as g FROM users where gender!='$gender'";
       $pst1 = $conn->query($sql1);
       $total_results = "";
       $pst1->execute();
       while($row=$pst1->fetch())
       {
           $GLOBALS["total_results"]=$row["g"];
       }
       $total_pages = ceil($total_results/$limit);
   
       if (!isset($_GET['page'])) {
           $page = 1;
       } else{
           $page = $_GET['page'];
       }

       $starting_limit = ($page-1)*$limit;
       $sql="select u.name,u.profileid,u.MATRIMONYPROFILEFOR,u.gender,u.profile,u.religion,u.COUNTRYLIVINGIN,p.age,p.height,p.MARITAL_STATUS,pr.HIGHEST_EDUCATION from users u natural join  personal_details p  natural join professional_details pr where u.gender!='$gender' limit $starting_limit,$limit";
       $pst=$conn->prepare($sql);
       $pst->execute();
           if($pst->rowCount()>0)
           {
               while($row=$pst->fetch())
               {
                   
                       $profile=str_replace("../","",$row["profile"]);
                           echo "<div class='profile_top'><a href='userprofile?userid=$row[profileid]'>
                               <h2>$row[profileid]</h2>
                               <div class='col-sm-3 profile_left-top'>
                                   <img class='i'src='$profile' class='img-responsive' alt=''style='height:200px;'/>
                               </div>
                               <div class='col-sm-6'>
                                   <table class='table_working_hours'>
                                       <tbody>
                                           <tr class='opened_1'>
                                               <td class='day_label1'>Age / Height :</td>
                                               <td class='day_value'>$row[age], $row[height]</td>
                                           </tr>
                                           <tr class='opened_1'>
                                               <td class='day_label1'>Gender :</td>
                                               <td class='day_value'>$row[gender]</td>
                                           </tr>
                                           <tr class='opened'>
                                               <td class='day_label1'>Religion :</td>
                                               <td class='day_value'>$row[religion]</td>
                                           </tr>
                                           <tr class='opened'>
                                               <td class='day_label1'>Marital Status :</td>
                                               <td class='day_value'>$row[MARITAL_STATUS]</td>
                                           </tr>
                                           <tr class='opened'>
                                               <td class='day_label1'>Location :</td>
                                               <td class='day_value'>$row[COUNTRYLIVINGIN]</td>
                                           </tr>
                                           <tr class='closed'>
                                               <td class='day_label1'>Profile Created by :</td>
                                               <td class='day_value closed'><span>$row[MATRIMONYPROFILEFOR]</span></td>
                                           </tr>
                                           <tr class='closed'>
                                               <td class='day_label1'>Education :</td>
                                               <td class='day_value closed'><span>$row[HIGHEST_EDUCATION]</span></td>
                                           </tr>
                                       </tbody>
                               </table></a>
                               <div class='buttons'>
                                   <a href='sendintrest?userid=$row[profileid]'><div class='vertical'>Send Interest</div></a>
                               </div>
                               </div>
                               <div class='clearfix'> </div>
                           </div> ";
                   
               }
           }
           else{
               echo "<h1 style='color:red;'>Not Found.......</h1>";
           }
           for ($page=1; $page <= $total_pages ; $page++):
 ?>
<a href='<?php echo "?page=$page"; ?>' class="user"><?php  echo $page; ?>
</a>

<?php endfor; ?> 

</div> 
</div>
<?php require "home_footer.php"?>