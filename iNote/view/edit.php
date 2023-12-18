<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Notes</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 20px;
        background-color: #f4f4f4;
    }

    .main {
        max-width: 600px;
        margin: 0 auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
        font-size: 24px;
        margin-bottom: 10px;
        text-align: center;
    }

    p {
        font-size: 16px;
        margin-bottom: 20px;
        padding: 10px;
        background-color: #f2f2f2;
        border-radius: 4px;
    }

    form {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 20px;
    }

    input[type="text"] {
        flex: 1;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    button {
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    button[type="submit"] {
        background-color: #007bff;
        color: #fff;
        margin-right: 10px;
    }

    button[type="submit"]:hover {
        background-color: #0056b3;
    }

    button.delete {
        background-color: #dc3545;
        color: #fff;
    }

    button.delete:hover {
        background-color: #b02a37;
    }
    </style>
</head>

<body>
    <div class="main">
        <h1>Note</h1>
        <p>Sửa nội dung</p>
        <form action="" method="post">
            <input type="hidden" name="id" value="<?php echo $note->id ?>">
            <input type="hidden" name="title" value="<?php echo $note->title ?>" placeholder="Tiêu đề" />
            <input type="text" name="content" value="<?php echo $note->content ?>" placeholder="Nội dung" />
            <input type="hidden" name="type_id" value="<?php echo $note->type_id ?>" placeholder="Type ID" />

            <div>
                <button class="delete mx-3" type="button">
                    <a class="text-white text-decoration-none" href="index.php?">Quay lại</a>
                </button>
                <button type="submit">Sửa</button>
            </div>
        </form>
    </div>
</body>

</html>