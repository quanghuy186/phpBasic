<?php

namespace Model;

class PostDB{
    public $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function add(){

    }

    public function get(){

    }

    public function update(){

    }
    
    public function delete(){

    }

    public function getAll(){
        $sql = "SELECT * FROM posts";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        $posts = [];
        foreach ($result as $row){
            $post = new Post($row['title'], $row['teaser'], $row['content'], $row['created']);
            $post->id = $row['id'];
            $posts[] = $post;
        }
        return $posts;
    }
}