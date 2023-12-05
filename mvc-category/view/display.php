<table border="1px">
    <a href="./index.php?c=add">Them moi</a>
    <thead>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Price</td>
            <td>Description</td>
            <td>Action</td>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach($categories as $category){
                echo "<tr>";
                echo "<td>".$category->id."</td>";
                echo "<td>".$category->name."</td>";
                echo "<td>".$category->price."</td>";
                echo "<td>".$category->description."</td>";
                echo "<td>
                    <a href='index.php?c=edit&id=".$category->id."'>Edit</a>
                    <a href='index.php?c=delete&id=".$category->id."'>Delete</a>
                </td>";
                echo "</tr>";
            }
        ?>
    </tbody>
    <a href="/">quay lai</a>
</table>