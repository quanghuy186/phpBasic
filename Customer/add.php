<?php
    require_once('db.php');
    $db = new db;
    $conn = $db->connect();
    if($_POST){
        $sql = "INSERT INTO customers(id,name,address) VALUES('". $_POST['id'] ."', '". $_POST['name'] ."', '". $_POST['address'] ."')";
        $query = $conn->prepare($sql);
        $query->execute();
        header("Location:index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">
        <label for="">ID</label>
        <input type="text" name="id">

        <label for="">Name</label>
        <input type="text" name="name">

        <label for="">Address</label>
        <input type="text" name="address">
        <button type="submit">Save</button>
        <button>Quay lai</button>
    </form>
</body>

</html>