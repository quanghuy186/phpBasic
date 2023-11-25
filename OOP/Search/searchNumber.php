<?php

$arr = [1,3,5,7,9,11,13,15];
$input = $_GET['input'];

function search($arr, $input) {
    for($i=0;$i<count($arr); $i++)  {
        if($arr[$i] == $input) {
            return true;
        }
    }   
    return false;
}

if(search($arr, $input)){
    echo "yes";
}else{
    echo "no";
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
    <form action="" method="GET">
        <input type="text" name="input">
        <button type="submit">Send</button>
    </form>
</body>

</html>