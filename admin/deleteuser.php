<?php
    require "../database/mainDatabase.php";
    $conn=DataBaseConnection::getMysqlConnection();
    $sql="delete from users where profileid=:profileid";
    $pst=$conn->prepare($sql);
    $pst->bindParam(":profileid",$_GET["user"]);
    if($pst->execute())
    {
        header("location: viewuser");
    }
    else{
        echo "error";
    }
?>