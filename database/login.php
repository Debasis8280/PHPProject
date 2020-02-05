<?php session_start();
     require "mainDatabase.php";
     $conn=DataBaseConnection::getMysqlConnection();
    if($_REQUEST["email"]=="Admin@gmail.com")
    {
        $sql="select * from admin where email=:email and password=:password";
    
        $pst=$conn->prepare($sql);
        $pst->bindParam(":email",$_REQUEST["email"]);
        $pst->bindParam(":password",$_REQUEST["password"]);
    
        if($pst->execute())
        {
            if($row=$pst->rowCount()>0)
            {
                $_SESSION["email"]=$_REQUEST["email"];
                header("location: ../admin/index");
            }
            else
            {
                
                $_SESSION["loginfaild"]="You Enter invalid email or password";
                header("location: ../login#login-popup");
                exit();
            }
        }
    }
    else{
    $sql="select name,profileid,gender from users where emailid=:emailid and password=:password";
    
    $pst=$conn->prepare($sql);
    $pst->bindParam(":emailid",$_REQUEST["email"]);
    $pst->bindParam(":password",$_REQUEST["password"]);

    if($pst->execute())
    {
        if($pst->rowCount()>0)
        {
            if($row=$pst->fetch())
            {
                $_SESSION["name"]=$row["name"];
                $_SESSION["id"]=$row["profileid"];
                $_SESSION["gender"]=$row["gender"];
                $_SESSION["email"]=$_REQUEST["email"];
                header("location: ../home");
            }
        }
        else
        {
            
            $_SESSION["loginfaild"]="You Enter invalid email or password";
            header("location: ../login#login-popup");
            exit();
        }
    }
    }
?>