<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add New Note</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 20px;
        background-color: #f4f4f4;
    }

    form {
        border: 2px solid #000;
        width: 500px;
        padding: 20px;
        border-radius: 8px;
        background-color: #fff;
    }

    h1 {
        font-size: 24px;
        margin-bottom: 20px;
        text-align: center;
    }

    div {
        margin-bottom: 15px;
    }

    label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
    }

    input[type="text"],
    textarea {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    textarea {
        resize: vertical;
        height: 150px;
    }

    button {
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        margin-right: 10px;
    }

    button[type="submit"] {
        background-color: #007bff;
        color: #fff;
    }

    button[type="submit"]:hover {
        background-color: #0056b3;
    }

    button[type="button"] {
        background-color: #dc3545;
        color: #fff;
    }

    button[type="button"]:hover {
        background-color: #b02a37;
    }
    </style>
</head>

<body>
    <form action="">
        <h1>Add New Note</h1>
        <div>
            <label for="title">Title</label>
            <input type="text" id="title" name="title" />
        </div>

        <div>
            <label for="content">Content</label>
            <textarea id="content" name="content" cols="30" rows="10"></textarea>
        </div>

        <button type="button">Cancel</button>
        <button type="submit">Save</button>
    </form>
</body>

</html>