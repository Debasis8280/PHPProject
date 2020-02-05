<?php session_start();
    require "mainDatabase.php";
    $conn=DataBaseConnection::getMysqlConnection();
    $sql1="select PROFILEID from users where emailid=:email";
    $pst1=$conn->prepare($sql1);
    $pst1->bindParam(":email",$_SESSION["email"]);
    $pst1->execute();
    $profileid=0;
    if($row=$pst1->fetch())
    {
        $GLOBALS["profileid"]=$row["PROFILEID"];
    }
    $sql="update users set gender=:gender,mobileno=:mobileno,religion=:religion,mothertongue=:mothertongue,countrylivingin=:countrylivingin where profileid=:id";
    $pst=$conn->prepare($sql);
       
        $pst->bindParam(":gender",$_REQUEST["gender"]);
        $_SESSION["gender"]=$_REQUEST["gender"];
        $pst->bindParam(":mobileno",$_REQUEST["mobile"]);
        $pst->bindParam(":religion",$_REQUEST["religion"]);
        $pst->bindParam(":mothertongue",$_REQUEST["mothertongue"]);
        $pst->bindParam(":countrylivingin",$_REQUEST["country"]);
        $_SESSION["country"]=$_REQUEST["country"];
        $pst->bindParam(":id",$profileid);
        $_SESSION["id"]=$profileid;
        $sql1="update newimage set profileid=:id where emailid=:email";
        $pst1=$conn->prepare($sql1);
        $pst1->bindParam(":id",$profileid);
        $pst1->bindParam(":email",$_SESSION["email"]);
        $pst1->execute();
        if($pst->execute())
        {
            header("location: ../registerReligionDetails#register-popup");
        }
        else{
            echo "error";
        }
?>