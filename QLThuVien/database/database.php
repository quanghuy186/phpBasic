<?php
    class db{
        public function connect(){
            $dsn = "mysql:host = localhost;dbname=library";
            $username = "root";
            $password = "180623";
            try{
                $conn = new PDO($dsn, $username, $password);
                return $conn;
            }catch(PDOException $e){
                echo $e->getMessage();
            }
            return null;        
        }
    }
?>