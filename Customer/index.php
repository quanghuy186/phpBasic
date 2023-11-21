<?php
    require_once('db.php');
    $db = new db;
    $conn = $db->connect();
    $sql = "SELECT * FROM customers";
    $query = $conn->prepare($sql);
    $query->execute();
    $customers = array();
    while($result = $query->fetch(PDO::FETCH_OBJ)){
        array_push($customers,$result);
    }
?>

<!DOCTYPE html>
<html>

<head>
    <title>Customer Information</title>
</head>

<body>
    <div class="main">
        <table>
            <a href="./add.php">Add</a>

            <thead>
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Address</td>
                </tr>
            </thead>
            <tbody>
                <?php
                        foreach ($customers as $row) {
                    echo "

                <tr>
                    <td>
                         $row->id
                    </td>
                    <td> $row->name </td>
                    <td> $row->address </td>
                    <td><a href='detail.php?id=$row->id'>Xem</a></td>
                    <td><a href='edit.php?id=$row->id'>Sua</a></td>
                    <td><a href='delete.php?id=$row->id'>xoa</a></td>
                </tr>
                " ; }
                ?>

            </tbody>


        </table>
    </div>
</body>

</html>