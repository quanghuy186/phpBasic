<?php
    require "model/Category.php";
    require "model/CategoryDB.php";
    require "model/DBConnection.php";
    require "controller/CategoryController.php";

    use \Controller\CategoryController;
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $controller = new CategoryController(); 
    $c = isset($_REQUEST['c']) ? $_REQUEST['c'] : null;
    switch ($c) {
        case 'add':
            $controller->add();
            break;
        case 'delete':
            $controller->delete($id);
            break;
        case 'edit':
            $controller->edit($id);
            break;
        case 'detail':
            $controller->detail();
            break;
        default:
            $controller->index();
            break;
    }
    ?>
</body>

</html>