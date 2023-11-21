<?php
    require_once('db.php');
    $db = new db;
    $conn = $db->connect();
    
    $sql = "SELECT * FROM customers WHERE id = '". $_GET['id'] ."'";
    $query = $conn->prepare($sql);
    $query->execute();
    $customers = array();
    while($result = $query->fetch(PDO::FETCH_OBJ)){
        $customers = $result;
    }

    if($_POST['name'] && $_POST['address']){
        $sql = "UPDATE customers SET name = '". $_POST['name'] ."' ,  address = '". $_POST['address'] ."' WHERE id = '". $_POST['id'] ."' ";
        $conn->exec($sql);
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
        <input type="hidden" name="id" value="<?php $customers->id ?>">

        <label for="">Name</label>
        <input type="text" name="name" value="<?php echo $customers->name ?>">

        <label for="">Address</label>
        <input type="text" name="address" value="<?php echo $customers->address ?>">

        <button type="submit">Save</button>
        <button>Quay lai</button>
    </form>
</body>

</html>