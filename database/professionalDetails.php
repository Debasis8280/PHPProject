<?php  session_start();
    require "mainDatabase.php";
    $conn=DatabaseConnection::getMysqlConnection();
    $sql="insert into professional_details(highest_education,employed_in,occupation_status,annual_income,work_locationcountry,work_locationcitizenship,brides_locationcountry,brides_currentcitizenship,profileid) values(:highest_education,:employed_in,:occupation_status,:annual_income,:work_locationcountry,:work_locationcitizenship,:brides_locationcountry,:brides_currentcitizenship,:id)";
        $pst=$conn->prepare($sql);
        
        $pst->bindParam(":highest_education",$_REQUEST["HighestEducation"]);
        $pst->bindParam(":employed_in",$_REQUEST["Employed"]);
        $pst->bindParam(":occupation_status",$_REQUEST["Occupation"]);
        $pst->bindParam(":annual_income",$_REQUEST["income"]);
        $pst->bindParam(":work_locationcountry",$_REQUEST["worklocation"]);
        $pst->bindParam(":work_locationcitizenship",$_REQUEST["workCitizenship"]);
        $pst->bindParam(":brides_locationcountry",$_REQUEST["NotWorkingCountry"]);
        $pst->bindParam(":brides_currentcitizenship",$_REQUEST["NotWorkingCitizenship"]);
        $pst->bindParam(":id",$_SESSION["id"]);
        if($pst->execute())
        {
            header("location: ../registerAboutyou#register-popup");
        }
        else{
            echo "error";
        }
    
?>