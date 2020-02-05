<?php session_start();
 require "mainDatabase.php";
 $conn=DataBaseConnection::getMysqlConnection();
    if(isset($_REQUEST["submit"])=="update")
    {
       $name=$_REQUEST["name"];
       $Marital_Status=$_REQUEST["Marital_Status"];
       $Children=$_REQUEST["Children"];
       $Body=$_REQUEST["Body"];
        $Height=$_REQUEST["Height"];
        $Physical=$_REQUEST["Physical"];
        $Profile=$_REQUEST["Profile"];
        $Drink=$_REQUEST["Drink"];
        $Age=$_REQUEST["Age"];
        $MotherTongue=$_REQUEST["MotherTongue"];
        $BodyColor=$_REQUEST["BodyColor"];
        $Weight=$_REQUEST["Weight"];
        $Diet=$_REQUEST["Diet"];
        $Smoke=$_REQUEST["Smoke"];
        $TimeBirth=$_REQUEST["TimeBirth"];
        $Caste=$_REQUEST["Caste"];
        $DateBirth=$_REQUEST["DateBirth"];
        $PlaceBirth=$_REQUEST["PlaceBirth"];
        $Religion=$_REQUEST["Religion"];
        $Raasi=$_REQUEST["Raasi"];
        $Education=$_REQUEST["Education"];
        $Occupation=$_REQUEST["Occupation"];
        $Annual=$_REQUEST["Annual"];
        $sql="update users set name=:name,DATEOFBIRTH=:DATEOFBIRTH,MATRIMONYPROFILEFOR=:profile,MOTHERTONGUE=:MotherTongue,RELIGION=:RELIGION where profileid=:id";
        $pst=$conn->prepare($sql);
        $pst->bindParam(":name",$name);
        $pst->bindParam(":DATEOFBIRTH",$DateBirth);
        $pst->bindParam(":profile",$Profile);
        $pst->bindParam(":MotherTongue",$MotherTongue);
        $pst->bindParam(":RELIGION",$Religion);
        $pst->bindParam(":id",$_SESSION["id"]);
        $pst->execute();
        $sql1="update personal_details set MARITAL_STATUS=:MARITAL_STATUS,MARITAL_STATUS_NumberofChildren=:children,HEIGHT=:HEIGHT,AGE=:AGE,ANY_DISABILITY=:ANY_DISABILITY where profileid=:id";
        $pst1=$conn->prepare($sql1);
        $pst1->bindParam(":MARITAL_STATUS",$Marital_Status);
        $pst1->bindParam(":children",$Children);
        $pst1->bindParam(":HEIGHT",$Height);
        $pst1->bindParam(":AGE",$Age);
        $pst1->bindParam(":ANY_DISABILITY",$Physical);
        $pst1->bindParam(":id",$_SESSION["id"]);
        $pst1->execute();
        $sql2="update matches set BODYTYPE=:BODYTYPE,DrinkingHabit=:DrinkingHabit,WEIGHT=:WEIGHT,EATINGHABIT=:EATINGHABIT,SmokingHabit=:SmokingHabit,Raasi=:Raasi,Place_of_Birth=:Place_of_Birth,Time_of_Birth=:Time_of_Birth where profileid=:id";
        $pst2=$conn->prepare($sql2);
        $pst2->bindParam(":BODYTYPE",$Body);
        $pst2->bindParam(":DrinkingHabit",$Drink);
        $pst2->bindParam(":WEIGHT",$Weight);
        $pst2->bindParam(":EATINGHABIT",$Diet);
        $pst2->bindParam(":SmokingHabit",$Smoke);
        $pst2->bindParam(":Raasi",$Raasi);
        $pst2->bindParam(":Place_of_Birth",$PlaceBirth);
        $pst2->bindParam(":Time_of_Birth",$TimeBirth);
        $pst2->bindParam(":id",$_SESSION["id"]);
        $pst2->execute();
        $sql3="update religion_detail set CAST=:CAST where profileid=:id";
        $pst3=$conn->prepare($sql3);
        $pst3->bindParam(":CAST",$Caste);
        $pst3->bindParam("id",$_SESSION["id"]);
        $pst3->execute();
        $sql4="update professional_details set HIGHEST_EDUCATION=:HIGHEST_EDUCATION,OCCUPATION_STATUS=:OCCUPATION_STATUS,ANNUAL_INCOME=:ANNUAL_INCOME where profileid=:id";
        $pst4=$conn->prepare($sql4);
        $pst4->bindParam(":HIGHEST_EDUCATION",$Education);
        $pst4->bindParam(":OCCUPATION_STATUS",$Occupation);
        $pst4->bindParam(":ANNUAL_INCOME",$Annual);
        $pst4->bindParam(":id",$_SESSION["id"]);
        if($pst4->execute())
        {   
            $_SESSION["update"]="sucessfully update";
            header("location: ../profile");
        }
        else{
            echo "not";
        }
    }
    if(isset($_REQUEST["submit1"])=="update")
    {
        $Occupationf=$_REQUEST["Occupationf"];
        $Occupationm=$_REQUEST["Occupationf"];
        $Brothers=$_REQUEST["Brothers"];
        $Sisters=$_REQUEST["Sisters"];
        $FamilyStatus=$_REQUEST["FamilyStatus"];
        $FamilyType=$_REQUEST["FamilyType"];
        $FamilyValue=$_REQUEST["FamilyValue"];
        $sql="update matches set Father_Status=:Father_Status,Mother_Status=:Mother_Status,Brothers=:Brothers,Sister=:Sister where profileid=:id";
        $pst=$conn->prepare($sql);
        $pst->bindParam(":Father_Status",$Occupationf);
        $pst->bindParam(":Mother_Status",$Occupationm);
        $pst->bindParam(":Brothers",$Brothers);
        $pst->bindParam(":Sister",$Sisters);
        $pst->bindParam("id",$_SESSION["id"]);
        $pst->execute();
        $sql1="update personal_details set FAMILY_STATUS=:FAMILY_STATUS,FAMILY_TYPE=:FAMILY_TYPE,FAMILY_VALUES=:FAMILY_VALUES where profileid=:id";
        $pst1=$conn->prepare($sql1);
        $pst1->bindParam(":FAMILY_STATUS",$FamilyStatus);
        $pst1->bindParam(":FAMILY_TYPE",$FamilyType);
        $pst1->bindParam(":FAMILY_VALUES",$FamilyValue);
        $pst1->bindParam(":id",$_SESSION["id"]);
        if($pst1->execute())
        {
            $_SESSION["update"]="sucessfully update";
            header("location: ../profile");
        }



    }
?>