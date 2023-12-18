<?php
namespace Controller;

use Model\NoteDB;
use Model\Note;
use Model\DBConnection;

class NoteController{
    public NoteDB $noteDB;

    public function __construct()
    {
            $connection = new DBConnection('mysql:host=localhost; dbname=inotes', "root", "180623");
            $this->noteDB = new NoteDB($connection->connect());
    }

    public function index(){
        $notes =  $this->noteDB->getAllNotes();
        include 'view/index.php';
    }

    public function detail(){
        $id = $_GET['id'];
        $note = $this->noteDB->detail($id);
        include 'view/detail.php';
    }

    public function getNoteTypes(){
        $noteTypes = $this->noteDB->getAllNoteTypes();
        include 'view/add.php';
    }
    
    public function add(){
        if($_SERVER['REQUEST_METHOD'] === 'GET'){
            include 'view/add.php';
        }else{
            $errors = [];
            $fields = ['title', 'content', 'type_id'];
            foreach($fields as $field){
                if(empty($_POST[$field])){
                    $errors[$field] = "Không được để trống";
                }
            }
            if(empty($error)){
                $title = $_POST['title'];
                $content = $_POST['content'];
                $type_id = $_POST['type_id'];
                $note = new Note($title, $content, $type_id, $name);
                $this->noteDB->create($note);
                header('Location: index.php');
            }else{
                include 'view/add.php';
            }
                
        }
    }

    // public function add(){
    //     if($_SERVER['REQUEST_METHOD'] === 'GET'){
    //         include 'view/add.php';
    //     } else {
    //         $errors = [];
    //         $fields = ['title', 'content', 'type_id']; // Thêm 'name' vào danh sách fields
    //         foreach($fields as $field){
    //             if(empty($_POST[$field])){
    //                 $errors[$field] = "Không được để trống";
    //             }
    //         }
    
    //         if(empty($errors)){
    //             $title = $_POST['title'];
    //             $content = $_POST['content'];
    //             $type_id = $_POST['type_id'];
    
    //             $note = new Note($title, $content, $type_id);
    //             $this->noteDB->create($note);
    //             header('Location: index.php');
    //         } else {
    //             include 'view/add.php';
    //         }
    //     }
    // }

    public function edit(){
        if($_SERVER['REQUEST_METHOD'] === 'GET'){
            $id = $_GET['id'];
            $note = $this->noteDB->detail($id);
            include 'view/edit.php';
        }else{
            $id = $_POST['id'];
            $note = new Note($_POST['title'], $_POST['content'], $_POST['type_id']);
            $this->noteDB->update($id, $note);
            header('Location: index.php.');
        }
    }

    public function delete($id){
        $id = $_GET['id'];
        $this->noteDB->delete($id);
        header('Location: index.php');
    }
    
    public function searchByTitle() {
        $search_query = $_GET['search_query']; // Lấy từ khóa tìm kiếm từ request GET
        $search_results = $this->noteDB->searchByTitle($search_query);
        if ($search_results) {
            include 'view/search.php'; // Đường dẫn tới file view
        } else {
            echo "Không có kết quả tìm kiếm.";
        }
    }
    
    
}