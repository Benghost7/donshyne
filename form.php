<?php include("app.php"); ?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">

    <label for="prod_name">prod_name</label>
    <input type="text" class="prod_name" name="prod_name" > <br>

    <label for="price_cuurent">price_current</label>
    <input type="text" class="price_current" name="price_current" > <br>

    <label for="price_main">price_main</label>
    <input type="text" class="price_main" name="price_main" > <br>

    <label for="brief_desc">brief_desc</label>
    <textarea name="brief_desc" id="" cols="30" rows="10"></textarea> <br>

    <label for="sku">sku</label>
    <input type="text" class="sku" name="sku" > <br>

    <label for="tags">tags</label>
    <input type="text" class="tags" name="tags" > <br>

    <label for="color">color</label> <br>
    <input type="text" class="color" name="color" > <br>

    <label for="size">size</label>
    <input type="text" class="size" name="size" > <br>

    <label for="qty">qty</label>
    <input type="text" class="qty" name="qty" > <br>


    <label for="prod_desc">prod_desc</label>
    <textarea name="prod_desc" id="" cols="30" rows="10"></textarea> <br>

    <label for="add_info">add_info</label> 
    <textarea name="add_info" id="" cols="30" rows="10"></textarea> <br>

    <label for="feat_image">feat_image</label>
    <input type="file" class="feat_image" name="feat_image" > <br>

    <input type="submit" value="Add Product" name="addProdBtn">
</form>