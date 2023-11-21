<?php
class db{
    private $dsn = "mysql:host = localhost;dbname=codegym";
    private $username = "root";
    private $password = "180623";
    public function db($dsn, $username, $password){
        try{
            $conn = new PDO($dsn, $username, $password);
            echo "Thanh cong";
            return $conn;
        }catch(Exception $e){
            echo $e->getMessage();
        }
        return null;
    }
}