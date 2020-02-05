<?php session_start();
    if(isset($_GET["userid"]))
    {
        require "database/mainDatabase.php";
        $conn=DataBaseConnection::getMysqlConnection();
        $sql="select emailid,Name from users where profileid=:id";
        $pst=$conn->prepare($sql);
        $pst->bindParam(":id",$_GET["userid"]);
        $email="";
        if($pst->execute())
        {
            $email="";
            while($row=$pst->fetch())
            {
                $GLOBALS["email"]=$row["emailid"];
               
            }
        }
       echo $email;
       $to=$email;
       $sub=$_SESSION["name"];
       $body="$_SESSION[name] send you intrest";
       if(mail($to,$sub,$body))
       {
           $_SESSION["send"]="Send Interest Sucessfully";
           header("location: matches");
           exit();
       }
       else
       {
           echo "not";
       }
    }
?>