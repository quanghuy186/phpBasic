<?php
namespace Controller;

use Model\CategoryDB;
use Model\Category;
use Model\DBConnection;

class CategoryController{
    public CategoryDB $categoryDB;

    public function __construct(){
        $connection = new DBConnection('mysql:host=localhost; dbname=category', "root", "180623");
        $this->categoryDB = new CategoryDB($connection->connect());
    }

    public function add(){
        if($_SERVER['REQUEST_METHOD'] === 'GET'){
            include 'view/add.php';
        }else{
            $errors = [];
            $fields = ['name', 'email', 'address'];
            foreach($fields as $field){
                if(empty($_POST[$field])){
                    $errors[$field] = "Không được để trống";
                }
            }
            if(empty($error)){
                $name = $_POST['name'];
                $price = $_POST['price'];
                $description = $_POST['description'];
                $category = new Category($name, $price, $description);
                $this->categoryDB->create($category);
                header('Location: index.php');
            }else{
                include 'view/add.php';
            }
                
        }
    }

    public function index(){
        $categories =  $this->categoryDB->getCategory();
        include 'view/display.php';
    }

    public function delete($id){
        $id = $_GET['id'];
        $this->categoryDB->delete($id);
        header('Location: index.php');
    }

    public function edit(){
        if($_SERVER['REQUEST_METHOD'] === 'GET'){
            $id = $_GET['id'];
            $category = $this->categoryDB->detail($id);
            include 'view/edit.php';
        }else{
            $id = $_POST['id'];
            $category = new Category($_POST['name'], $_POST['price'], $_POST['description']);
            $this->categoryDB->update($id, $category);
            header('Location: index.php.');
        }
    }

    public function detail(){
        $id = $_GET['id'];
        $category = $this->categoryDB->detail($id);
        include 'view/detail.php';
    }
    
}