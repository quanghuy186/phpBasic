<?php
namespace Model;

class  CategoryDB{
    public $connection;

    public function __construct($connection){
        $this->connection = $connection;
    }

    public function create($category){
        $sql = "INSERT INTO categories(name, price, description) VALUES(?, ?, ?)";
        $stm = $this->connection->prepare($sql);
        $stm->bindParam(1, $category->name);
        $stm->bindParam(2, $category->price);
        $stm->bindParam(3, $category->description);
        return $stm->execute();
    }


    public function getCategory():array{
        $sql = "SELECT * FROM categories";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        $categories = [];
        foreach($result as $row){
            $category = new Category($row['name'], $row['price'], $row['description']);
            $category->id = $row['id'];
            $categories[] = $category;
        }
        return $categories;
    }

    public function delete($id){
        $sql = "DELETE FROM categories WHERE id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $id);
        return $statement->execute();
    }

    public function update($id){

    }

    public function detail($id){
        $sql = "SELECT * FROM categories WHERE id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $id);
        $statement->execute();
        $row = $statement->fetch();
        $category = new Category($row['name'], $row['price'], $row['description']);
        $category->id = $row['id'];
        return $category;
    }
}