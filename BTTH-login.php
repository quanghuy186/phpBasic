<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="GET">
        <div class="container">
            <h2>Login</h2>
            <label for="">User name</label>
            <div class="name">
                <input type="text" name="username">
            </div>

            <label for="">Password</label>
            <div class="pass">
                <input type="text" name="password">
            </div>
            <button>Sign in</button>
        </div>
    </form>

    <?php
        if($_SERVER["REQUEST_METHOD"]  == "GET"){
            $username = $_GET['username'];
            $password = $_GET['password'];
            if(($username == 'admin') and ($password == 'admin')){
                echo "Welcome";
            }else{
                echo "Login Error";
            }
        }
    ?>
</body>

</html>