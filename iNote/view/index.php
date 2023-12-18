<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Your Notes</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 20px;
        background-color: #f4f4f4;
    }

    .main {
        max-width: 800px;
        margin: 0 auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
        font-size: 32px;
        margin-bottom: 20px;
        text-align: center;
    }

    select,
    input[type="text"],
    button {
        margin-bottom: 10px;
        padding: 8px;
        width: calc(100% - 18px);
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    select {
        width: calc(100% - 22px);
    }

    button {
        background-color: #007bff;
        color: #fff;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    button:hover {
        background-color: #0056b3;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th,
    td {
        padding: 8px;
        border: 1px solid #ccc;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
        font-weight: bold;
    }

    .btn-container {
        display: flex;
        gap: 5px;
    }

    .btn-container a {
        text-decoration: none;
        padding: 5px 10px;
        border-radius: 4px;
        color: #fff;
    }

    .edit {
        background-color: #28a745;
    }

    .view {
        background-color: #007bff;
    }

    .delete {
        background-color: #dc3545;
    }
    </style>
</head>

<body>
    <div class="main">
        <h1>Your Notes</h1>
        <div class="filter">
            <select name="category">
                <option value="0">Thể loại</option>
                <?php
                    foreach ($notes as $row){
                ?>
                <option value="1"><?php echo " $row->name " ?></option>
                <?php
                    }
                ?>
            </select>
            <form action="view/search.php" method="GET">
                <input type="text" name="search_query" placeholder="Tiêu đề" />
                <button type="submit">Tìm kiếm</button>
            </form>

        </div>
        <table>
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Tiêu đề</th>
                    <th>Phân loại</th>
                    <th>Hành động</th>
                </tr>
            </thead>

            <tbody>
                <?php
                foreach ($notes as $note) {
                    echo "<tr>";
                    echo "<td>" . $note->id . "</td>";
                    echo "<td>" . $note->title . "</td>";
                    echo "<td>" . $note->name . "</td>";

                    echo "<td class='btn-container'>
                            <a class='btn edit' href='index.php?c=edit&id=" . $note->id . "'>Edit</a>
                            <a class='btn view' href='index.php?c=detail&id=" . $note->id . "'>View</a>
                            <a class='btn delete' href='index.php?c=delete&id=" . $note->id . "'>Delete</a>
                        </td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
            <div><button class="btn btn-success">
                    <a class="text-white text-decoration-none" href="<?php echo "index.php?c=add" ?>">Thêm mới ghi
                        chú</a>
                </button></div>
        </table>
    </div>
</body>

</html>