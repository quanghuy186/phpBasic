<?php
namespace Controller;

use Model\DBConnection;
use Model\Post;
use Model\PostDB;

class PostController{
    public $postDB;
    public function __construct()
    {
        $connection = new DBConnection('mysql:host=localhost;dbname=post', 'root', '180623');
        $this->postDB = new PostDB($connection->connect());
    }

    public function index(){
        $posts = $this->postDB->getAll();
        include 'view/list.php';
    }
    
}