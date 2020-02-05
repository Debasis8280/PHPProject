<?php session_start();
    $email=$_SESSION["email"];
    require"mainDatabase.php";
    $conn=DataBaseConnection::getMysqlConnection();

    if($_GET["msg"]==1)
    {
        $sql="update  newimage set img1=:img1 where Emailid=:email";
        $filename=$_FILES["img"]["name"];
        $file_temp=$_FILES["img"]["tmp_name"];
        
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed))
        {
            $_SESSION["msg1"]="Upload Valide File";
            header("location: ../uploadmoreprofileImage?msg=1");
        }
        
        else{
            $folder="../profileImage/".$filename;
            move_uploaded_file($file_temp,$folder);
            $pst=$conn->prepare($sql);
            $pst->bindParam(":img1",$folder);
            $pst->bindParam(":email",$email);
            if($pst->execute())
            {
                unset($_SESSION["msg"]);
                header("location: ../profile");
            }
            else{
                echo "error";
            }
        }
    }

    if($_GET["msg"]==2)
    {
        $sql="update  newimage set img2=:img2 where Emailid=:email";
        $filename=$_FILES["img"]["name"];
        $file_temp=$_FILES["img"]["tmp_name"];
        
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed))
        {
            $_SESSION["msg1"]="Upload Valide File";
            header("location: ../uploadmoreprofileImage?msg=2");
        }
        
        else{
            $folder="../profileImage/".$filename;
            move_uploaded_file($file_temp,$folder);
            $pst=$conn->prepare($sql);
            $pst->bindParam(":img2",$folder);
            $pst->bindParam(":email",$email);
            if($pst->execute())
            {
                unset($_SESSION["msg"]);
                header("location: ../profile");
            }
            else{
                echo "error";
            }
        }
    }

    if($_GET["msg"]==3)
    {
        $sql="update  newimage set img3=:img3 where Emailid=:email";
        $filename=$_FILES["img"]["name"];
        $file_temp=$_FILES["img"]["tmp_name"];
        
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed))
        {
            $_SESSION["msg1"]="Upload Valide File";
            header("location: ../uploadmoreprofileImage?msg=3");
        }
        
        else{
            $folder="../profileImage/".$filename;
            move_uploaded_file($file_temp,$folder);
            $pst=$conn->prepare($sql);
            $pst->bindParam(":img3",$folder);
            $pst->bindParam(":email",$email);
            if($pst->execute())
            {
                unset($_SESSION["msg"]);
                header("location: ../profile");
            }
            else{
                echo "error";
            }
        }
    }


    if($_GET["msg"]=="Admin")
    {
        $sql="update  admin set img=:img where Email=:email";
        $filename=$_FILES["img"]["name"];
        $file_temp=$_FILES["img"]["tmp_name"];
        
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed))
        {
            $_SESSION["msg1"]="Upload Valide File";
            header("location: ../uploadmoreprofileImage?msg=Admin");
        }
        
        else{
            $folder="../admin/images/".$filename;
            move_uploaded_file($file_temp,$folder);
            $pst=$conn->prepare($sql);
            $pst->bindParam(":img",$folder);
            $admin="Admin@gmail.com";
            $pst->bindParam(":email",$admin);
            if($pst->execute())
            {
                unset($_SESSION["msg"]);
                header("location: ../admin/index");
            }
            else{
                echo "error";
            }
        }
    }
    
?>