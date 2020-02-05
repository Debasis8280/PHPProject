<?php session_start();
error_reporting(E_ERROR | E_PARSE);
require "database/mainDatabase.php";
        $conn=DataBaseConnection::getMysqlConnection();
       $limit = 4;
       $gender=$_SESSION["gender"];
       $sql1 = "SELECT count(*) as u.g , p.age FROM users u natural join personal_details p where gender!='$gender' and age>=:form and age<=:to";
       $pst1 = $conn->prepare($sql1);
       $pst1->bindParam(":form",$_REQUEST["form"]);
       $pst1->bindParam(":to",$_REQUEST["to"]);
       $total_results = "";
       $pst1->execute();
       while($row=$pst1->fetch())
       {
           $GLOBALS["total_results"]=$row["g"];
       }
       $total_pages = ceil($total_results/$limit);
       echo $total_pages;
?>