<?php session_start();
    require "mainDatabase.php";
    $conn=DataBaseConnection::getMysqlConnection();
    $sql="insert into registerabout(About_you,PROFILEID) values(:About_you,:ID)";
        $pst=$conn->prepare($sql);
        
        $pst->bindParam(":About_you",$_REQUEST["about"]);
        $pst->bindParam(":ID",$_SESSION["id"]);
        if($pst->execute())
        {
            header("location:../CompliteProfile");
        }
        else
        {
            echo "error";
        }
    
?>