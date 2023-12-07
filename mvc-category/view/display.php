<div class="container row">
    <table class="table">
        <h2 class="text-center">Quan ly</h2>
        <div class="">
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
                    <a class='btn btn-primary' href='index.php?c=edit&id=".$category->id."'>Edit</a>
                    <a  class='btn btn-warning' href='index.php?c=detail&id=".$category->id."'>View</a>
                    <a  class='btn btn-danger' href='index.php?c=delete&id=".$category->id."'>Delete</a>
                </td>";
                echo "</tr>";
            }
        ?>
            </tbody>
    </table>
    <div class="col-2">
        <a href=" ./index.php?c=add" class="text-decoration-none btn btn-success">Add new</a>
        <a href="/" class="text-decoration-none btn btn-warning text-white">Quay lai</a>
    </div>
</div>

</div>