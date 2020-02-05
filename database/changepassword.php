<?php session_start();
 require "mainDatabase.php";
 $conn=DataBaseConnection::getMysqlConnection();
if(isset($_REQUEST["email"])!=null)
{

    require "../checkdatabase/checkemail.php";
    $check=EmailCheck::checkEmail($_REQUEST["email"]);
    if($check>0)
    {
            $_SESSION["email"]=$_REQUEST["email"];
            header("location: ../forgotpassword");
    } 
    else{
        header("location: ../forgotpassword1?error=Email Not Exit");
    }   
}
if(isset($_REQUEST["password"])!=null)
{
    $sql="update users set password=:pass where emailid=:email";
    $pst=$conn->prepare($sql);
    $pst->bindParam(":pass",$_REQUEST["password"]);
    $pst->bindParam(":email",$_SESSION["email"]);
    if($pst->execute())
    {
        $_SESSION["sucess"]="Password SucessFully Change plz Login With New Password";
        header("location: ../login#login-popup");
    }
    echo  $_REQUEST["password"],$_SESSION["email"];
}
?>