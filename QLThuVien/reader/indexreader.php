<?php
    require_once '../database/database.php';
    $dbb = new db();
    $conn = $dbb->connect();
    $sql = "SELECT * FROM students";
    $query = $conn->prepare($sql);
    $query->execute();
    $students = array();
    while($result = $query->fetch(PDO::FETCH_OBJ)){
    array_push($students,$result);
}
include '../layout/header.php';

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
    <div class="main_reader">
        <h3>Reader List</h3>
        <table border="1px">
            <thead>
                <tr>
                    <td>Code</td>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Address</td>
                    <td>Image</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach($students as $result){
                    echo "<tr>
                        <td>$result->student_id</td>
                        <td>$result->student_name</td>
                        <td>$result->student_address</td>
                        <td>$result->student_email</td>
                        <td>$result->student_image</td>
                        <td>
                            <a href='editreader.php?id=$result->student_id'>Update</a>    
                            <a href='deletereader.php?id=$result->student_id'>Delete</a>
                        </td>
                    </tr>";
                }
               ?>

            </tbody>

        </table>
        <a href="addreader.php" style="margin-top: 16px;">Add new reader</a>

    </div>

    <?php
        include '../layout/footer.php';
    ?>
</body>

</html>