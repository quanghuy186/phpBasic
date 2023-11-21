<?php
class db{
    public function connect(){
        $dsn = "mysql:host = localhost;dbname=codegym";
        $username = "root";
        $password = "180623";
        try{
            $conn = new PDO($dsn, $username, $password);
            echo "Thanh cong";
            return $conn;
        }catch(PDOException $e){
            echo $e->getMessage();
        }
        return null;
    }
}