<?php
require_once "database/database.php";
$dbb = new db();
$conn = $dbb->connect();
$sql = "SELECT * FROM categories";
$query = $conn->prepare($sql);
$query->execute();
$categories = array();
while($result = $query->fetch(PDO::FETCH_OBJ)){
    array_push($categories,$result);
}

include('layout/header.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container" style="margin-left: 40px;">
        <table border="1px">
            <h3>Categories List</h3>
            <thead>
                <tr>
                    <td>Code</td>
                    <td>Category name</td>
                    <td>Action</td>
                </tr>
            </thead>

            <tbody>
                <?php
                foreach($categories as $result){
                    echo "<tr>
                        <td>$result->category_id</td>
                        <td>$result->category_name</td>
                        <td>
                             <a href='./category/editcategory.php?id=$result->category_id'>Update</a>    
                            <a href='./category/deletecategory.php?id=$result->category_id'>Delete</a>
                        </td>
                </tr>";
                }
                ?>
            </tbody>
        </table>
        <a href="./category/addcategory.php" style="margin-top: 16px;">Add new category</a>
    </div>

</body>

</html>

<?php
include('layout/footer.php');