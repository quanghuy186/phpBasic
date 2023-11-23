<?php
    require_once '../database/database.php';
    $dbb = new db();
    $conn = $dbb->connect();
    $sql = "DELETE FROM categories WHERE category_id = '". $_GET['id'] ."'";
    $query = $conn->prepare($sql);
    $query->execute();
    header('Location:../index.php')
    ?>