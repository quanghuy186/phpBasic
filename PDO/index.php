<?php
    include "db.php";
    $db = new db();
    $conn = $db->connect();
    $sql = "INSERT INTO students(id,name) VALUES(2, 'du don')";
    $conn->exec($sql);