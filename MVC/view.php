<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        foreach($persons as $person){
            echo $person->name . "<br/>";
            echo $person->age. "<br/>"; 
            echo $person->address;
        }
    ?>

</body>

</html>