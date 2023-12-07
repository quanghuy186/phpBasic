<form action="" method="post">
    <input type="hidden" name="id" value="<?php echo $category->id ?>">

    <label for="">Name</label>
    <input type="text" name="name" value="<?php echo $category->name ?>">

    <label for="">Price</label>
    <input type="text" name="price" value="<?php echo $category->price ?>">

    <label for="">Description</label>
    <input type="text" name="description" value="<?php echo $category->description ?>">

    <button type="submit">Save</button>
</form>