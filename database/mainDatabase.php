<?php
    class DataBaseConnection
    {
        public static function getMysqlConnection()
        {
            $conn=new PDO("mysql:host=localhost;dbname=Matrimony;port=3308","root","");
            return $conn;
        }
    }
?>