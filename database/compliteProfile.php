<?php session_start();
    require "mainDatabase.php";
    $conn=DataBaseConnection::getMysqlConnection();
    $sql="insert into matches(BODYTYPE,WEIGHT,COLLEGE,EATINGHABIT,DrinkingHabit,SmokingHabit,Raasi,Time_of_Birth,Place_of_Birth,Father_Status,Mother_Status,Brothers,Sister,Parent_Contact_No,PROFILEID) values(:BODYTYPE,:WEIGHT,:COLLEGE,:EATINGHABIT,:DrinkingHabit,:SmokingHabit,:Raasi,:Time_of_Birth,:Place_of_Birth,:Father_Status,:Mother_Status,:Brothers,:Sister,:Parent_Contact_No,:PROFILEID)";
    $pst=$conn->prepare($sql);
    $pst->bindParam(":BODYTYPE",$_REQUEST["body"]);
    $pst->bindParam(":WEIGHT",$_REQUEST["weight"]);
    $pst->bindParam(":COLLEGE",$_REQUEST["college"]);
    $pst->bindParam(":EATINGHABIT",$_REQUEST["Eating"]);
    $pst->bindParam(":DrinkingHabit",$_REQUEST["Drinking"]);
    $pst->bindParam(":SmokingHabit",$_REQUEST["Smoking"]);
    $pst->bindParam(":Raasi",$_REQUEST["Raasi"]);
    $pst->bindParam(":Time_of_Birth",$_REQUEST["date"]);
    $pst->bindParam(":Place_of_Birth",$_REQUEST["country"]);
    $pst->bindParam(":Father_Status",$_REQUEST["FatherStatus"]);
    $pst->bindParam(":Mother_Status",$_REQUEST["MotherStatus"]);
    $pst->bindParam(":Brothers",$_REQUEST["Brothers"]);
    $pst->bindParam(":Sister",$_REQUEST["sister"]);
    $pst->bindParam(":Parent_Contact_No",$_REQUEST["no"]);
    $pst->bindParam(":PROFILEID",$_SESSION["id"]);
    if($pst->execute())
    {
        header("location: ../home");
    }
    else
    {
        echo "error";
    }
?>