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

    }

    public function add(){

    }

    public function edit(){
        include 'view/edit.php';
    }

    public function delete($id){
        $id = $_GET['id'];
        $this->noteDB->delete($id);
        header('Location: index.php');
    }
}