<?php
    require_once('db.php');
    $db = new db;
    $conn = $db->connect();
    $id = $_GET['id'];
    $sql = "DELETE FROM customers WHERE id = $id";
    $query = $conn->prepare($sql);
    $query->execute();
    header('Location:index.php')
?>