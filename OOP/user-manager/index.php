<?php
namespace User;
class User{
    protected string $username;
    protected string $email;
    public int $role;

    // public function __construct(string $username, string $email, int $role) {
    //     $this->username = $username;
    //     $this->email = $email;
    //     $this->role = $role;
    // }   
    
    public function getInfor(){
        return $this->username." ". $this->email;
    }

    public function getRole(){
        return $this->role;
    }   

    public function setRole($role){
        $this->role = $role;
    }   

    public function setUsername($username){
        $this->username = $username;
    }   

    public function setEmail($email){
        $this->email = $email;
    }     
}

$dt = new User();
$dt->setRole(0);
$dt->setEmail('email@example.com');
$dt->setUsername('username');
if($dt->getRole() == 1){
    echo $dt->getInfor();
}else {
    echo "Username"; 
}