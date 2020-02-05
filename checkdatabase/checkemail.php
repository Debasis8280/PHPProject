<?php
    class EmailCheck 
    {
        public static function checkEmail($email)
        {
            //require "../database/mainDatabase.php";
            $conn=DataBaseConnection::getMysqlConnection();
            $sql="select * from users where emailid=:email";
            $pst=$conn->prepare($sql);
            $pst->bindParam(":email",$email);
            if($pst->execute())
            {
               if($pst->fetch())
               {
                   return 1;
               }                                   
            }
            return 0;
        }
    }
?>