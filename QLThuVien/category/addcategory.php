<?php
    include '../layout/header.php';
    require_once '../database/database.php';
    $dbb = new db();
    $conn = $dbb->connect();
    if($_POST && $_POST['category_id']){
        $sql = "INSERT INTO categories(category_id, category_name) VALUES('".$_POST['category_id']."', '". $_POST['category_name'] ."')";
        $query = $conn->prepare($sql);
        $categories = $query->execute();
        header('Location: ../index.php');
    }
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/main.css">
</head>

<body>
    <div class="add_category">
        <form action="" method="POST">
            <table border="1px">
                <thead>
                    <tr>
                        <td>Code</td>
                        <td>Name</td>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td><input type="text" name="category_id"></td>
                        <td><input type="text" name="category_name"></td>
                    </tr>
                </tbody>
            </table>
            <button type="submit">Add</button>
        </form>
    </div>
</body>

</html>