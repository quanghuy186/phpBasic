<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <textarea name="input" id="" cols="30" rows="10"></textarea>
        <button type="submit">Add</button>
    </form>
</body>

</html>

<?php
$arr = [];
$arr[] = $_POST['input'];
$viettel = []; //001
$mobi = []; //002
$vina = []; //003
foreach ($arr as $key => $value){
    for ($i = 0; $i < strlen($value); $i++) {
        if(substr($value[$i], 0, 2) == '001'){
            $viettel[] = $value[$i];
        }
        if(substr($value[$i], 0, 2) == '002'){
            $mobi[] = $value[$i];
        }
        if(substr($value[$i], 0, 2) == '003'){
            $vina[] = $value[$i];
        }   
    }
}

echo "<pre>";

    print_r($viettel);  

    print_r($mobi);
    
    print_r($vina); 
    
    echo "</pre>";  
    