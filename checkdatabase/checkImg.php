<?php 
    class ImageCheck
    {
        public static function checkImage($email)
        {
            //echo $email;
            //require"../database/mainDatabase.php";
            $conn=DataBaseConnection::getMysqlConnection();
            $sql="select * from newimage where email_id=:email";
            $pst=$conn->prepare($sql);
            $pst->bindParam(":email",$email);
            if($pst->execute())
            {
                while($pst->fetch())
                {
                    return 1;
                }
            }
            return 0;
        }
    }
?>