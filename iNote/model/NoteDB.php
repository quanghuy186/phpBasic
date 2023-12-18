<?php
namespace Model;
use PDO;

class NoteDB{
    public $connection;

    public function __construct($connection){
        $this->connection = $connection;
    }

    public function getAllNotes(){
        $sql = "SELECT note.*, note_type.name AS name
        FROM note 
        LEFT JOIN note_type ON note.type_id = note_type.id"; 
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        $notes = [];
        foreach($result as $row){
            $note = new Note($row['title'], $row['content'], $row['type_id']);
            $note->name = $row['name']; 
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

    public function getAllNoteTypes(){
        $sql = "SELECT id, name FROM note_type";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $noteTypes = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $noteTypes;
    }

    public function create($note){
        $sql = "INSERT INTO note(title, content, type_id) VALUES(?, ?, ?)";
        $stm = $this->connection->prepare($sql);
        $stm->bindParam(1, $note->title);
        $stm->bindParam(2, $note->content);
        $stm->bindParam(3, $note->type_id);
        return $stm->execute();
    }

    // public function create($note){
    //     // Lấy type_id từ bảng note_type dựa trên tên
    //     $typeSql = "SELECT id FROM note_type WHERE name = ?";
    //     $typeStatement = $this->connection->prepare($typeSql);
    //     $typeStatement->bindParam(1, $note->name);
    //     $typeStatement->execute();
    //     $noteTypes = $typeStatement->fetch();
    
    //     if ($noteTypes) {
    //         $typeId = $noteTypes['id'];
    
    //         // Thêm ghi chú mới vào bảng note với type_id đã lấy được
    //         $sql = "INSERT INTO note (title, content, type_id) VALUES (?, ?, ?)";
    //         $stm = $this->connection->prepare($sql);
    //         $stm->bindParam(1, $note->title);
    //         $stm->bindParam(2, $note->content);
    //         $stm->bindParam(3, $typeId);
    //         return $stm->execute();
    //     } else {
    //         return false; // Không tìm thấy type_id tương ứng với tên note_type
    //     }
    // }
    

    public function detail($id){
        // $sql = "SELECT * FROM note WHERE id = ?";
        $sql = "SELECT note.*, note_type.name AS name
        FROM note 
        LEFT JOIN note_type ON note.type_id = note_type.id WHERE note.id = ?"; 
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $id);
        $statement->execute();
        $row = $statement->fetch();
        $note = new Note($row['title'], $row['content'], $row['type_id']);
        $note->name = $row['name'];
        $note->id = $row['id'];
        return $note;
    }

    public function update($id,$note){
        $sql = "UPDATE note SET title = ?, content = ?, type_id = ? WHERE id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $note->title);
        $statement->bindParam(2, $note->content);
        $statement->bindParam(3, $note->type_id);
        $statement->bindParam(4, $id);
        return $statement->execute();
    }

    public function searchByTitle($search_query) {
        $sql = "SELECT * FROM note WHERE title LIKE :search_query";
        $stmt = $this->connection->prepare($sql);
        $search_query = '%' . $search_query . '%';
        $stmt->bindParam(':search_query', $search_query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}