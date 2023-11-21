<?php
    require_once('db.php');
    $db = new db;
    $conn = $db->connect();
    $id = $_GET['id'];
    $sql = "SELECT * FROM customers WHERE id = $id";
    $query = $conn->prepare($sql);
    $query->execute();
    $customers = array();
    while($result = $query->fetch(PDO::FETCH_OBJ)){
        $customers = $result;
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
    <table>
        <thead>
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Address</td>
            </tr>
        </thead>

        <tbody>
            <tr>
                <th><?php echo $customers->id ?></th>
                <th><?php echo $customers->name ?></th>
                <th><?php echo $customers->address ?></th>
            </tr>
        </tbody>
    </table>

</body>

</html>