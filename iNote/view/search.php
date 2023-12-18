<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
</head>

<body>
    <h1>Search Results</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
            </tr>
        </thead>
        <tbody>

            <?php
        if (isset($search_results) && is_array($search_results)) {
            foreach ($search_results as $result) {
                // Hiển thị thông tin tìm kiếm ở đây
                 foreach ($search_results as $result): ?>
            <tr>
                <td><?php echo $result['id']; ?></td>
                <td><?php echo $result['title']; ?></td>
            </tr>
            <?php endforeach; 
                echo "<p>" . $result['title'] . "</p>";
            }
        } else {
            echo "Không có kết quả tìm kiếm.";
        }
        ?>



        </tbody>
    </table>
</body>

</html>