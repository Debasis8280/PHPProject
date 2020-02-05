<?php session_start(); 
    require "mainDatabase.php";
    $conn=DataBaseConnection::getMysqlConnection();
     $sql="insert into users(MATRIMONYPROFILEFOR,NAME,profile,EMAILID,DATEOFBIRTH,PASSWORD) values(:MATRIMONYPROFILEFOR,:NAME,:profile,:EMAILID,:DATEOFBIRTH,:PASSWORD)";
     $pst=$conn->prepare($sql);
     
     $pst->bindParam(":MATRIMONYPROFILEFOR",$_REQUEST["profile"]);
     $_SESSION["profile"]=$_REQUEST["profile"];
     $pst->bindParam(":NAME",$_REQUEST["name"]);
     $filename=$_FILES["img"]["name"];
     $file_temp=$_FILES["img"]["tmp_name"];
     $filetype=$_FILES["img"]["type"];
     $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
     $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed))
        {
            $_SESSION["msg"]="Upload Valide File";
            header("location: ../register#register-popup");
        }
        else{
            $folder="../profileImage/".$filename;
            move_uploaded_file($file_temp,$folder);
            $pst->bindParam(":profile",$folder);
        }
            $pst->bindParam(":EMAILID",$_REQUEST["email"]);
            require "../checkdatabase/checkemail.php";
            $email=$_REQUEST["email"];
            $_SESSION["email"]=$_REQUEST["email"];
            $check=EmailCheck::checkEmail($email);
            if($check>0)
            {
                $_SESSION["msge"]="This Email Alrady Exit";
                header("location: ../register#register-popup");   
            }    
            else{
                
                $pst->bindParam(":DATEOFBIRTH",$_REQUEST["date"]);
                $pst->bindParam(":PASSWORD",$_REQUEST["password"]);
                require"../checkdatabase/checkImg.php";
                $checkimg=ImageCheck::checkImage($email);
                if($checkimg > 0)
                {
                    if($pst->execute())
                    {
                        header("location: ../register2#register-popup");
                    } 
                    
                }
                else{
                    $sql1="insert into newimage(emailid) values(:email)";
                    $pst1=$conn->prepare($sql1);
                    $pst1->bindParam(":email",$_REQUEST["email"]);
                    $pst1->execute();
                    
                    if($pst->execute())
                    {
                        header("location: ../register2#register-popup");
                    } 
                }
            }
        
            
?>