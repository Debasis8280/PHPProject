<?php
    $email="Admin@gmail.com";
    require "../database/mainDatabase.php";
    $conn=DataBaseConnection::getMysqlConnection();
    $sql="update admin set password=:pass where email=:email";
    $pst=$conn->prepare($sql);
    $pst->bindParam(":pass",$_REQUEST["password"]);
    $pst->bindParam(":email",$email);
    if($pst->execute())
    {
        header("location: index");
    }
?>