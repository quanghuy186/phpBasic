<?php
    namespace Model;
    use PDO;

class DBConnection{
    public string $dsn;
    public string $username;
    public string $password;

    public function __construct(string $dsn, string $username, string $password){
        $this->dsn = $dsn;
        $this->username = $username;
        $this->password = $password;
    }

    public function connect():PDO{
        return new PDO($this->dsn, $this->username, $this->password);
    }

}