<?php
namespace Model;

class NoteDB{
    public $connection;

    public function __construct($connection){
        $this->connection = $connection;
    }

    public function getAllNotes(){
        $sql = "SELECT * FROM note";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        $notes = [];
        foreach($result as $row){
            $note = new Note($row['title'], $row['content'], $row['type_id']);
            $note->id = $row['id'];
            $notes[] = $note;
        }
        return $notes;
    }
    
    public function delete($id){
        $sql = "DELETE FROM note WHERE id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $id);
        return $statement->execute();
    }
}