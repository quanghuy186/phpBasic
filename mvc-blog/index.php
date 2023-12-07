<?php
require "model/DBConnection.php";
require "model/PostDB.php";
require "model/Post.php";
require_once 'Controller\PostController.php';

use Controller\PostController;

    $page = isset($_GET['page']) ? $_GET['page'] : null;
    // $page = $_GET['page'];
    $controller = new PostController();
    switch($page){
        case 'index':
            $controller->index();
            break;
        default:
            $controller->index();
    }