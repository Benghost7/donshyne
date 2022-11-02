<?php
include("app.php");

$query = "SELECT * FROM tbl_products WHERE id={$_GET['product_id']}";
$result =mysqli_query($conn, $query);
$row= mysqli_fetch_assoc($result);

if(isset($_POST['updateproductsBtn'])) {
    //Form Fields
    $id = $_POST['id'];
    $prodname = $_POST['prod_name'];
    $pricecurrent = $_POST['price_current'];
    $pricemain = $_POST['price_main'];
    $briefdesc = $_POST['brief_desc'];
    $sku = $_POST['sku'];
    $tags =$_POST['tags'];
    $color= $_POST['color'];
    $size = $_POST['size'];
    $qty =$_POST['qty'];
    $proddesc =$_POST['prod_desc'];
    $addinfo=$_POST['add_info'];
    $featimage= $_FILES['feat_image']['name'];

    //Form query
    $query = "";
    if(isset($featimage) && $featimage != "") {
        $query = "UPDATE tbl_proucts SET prod_name='$prodname', price_current='$pricecurrent', price_main='$pricemain',brief_desc='$briefdesc', sku='$sku',tags='$tags',color='$color',size='$size',qty='$qty',prod_desc='$proddesc', add_info='$addinfo', feat_image='$featimage' WHERE id={$id}";
    } else {
        $query = "UPDATE tbl_products SET prod_name='$prodname', price_current='$pricecurrent', price_main='$pricemain',brief_desc='$briefdesc', sku='$sku',tags='$tags',color='$color',size='$size',qty='$qty',prod_desc='$proddesc', add_info='$addinfo' WHERE id={$id}";
    }
    $result = mysqli_query($conn, $query);

    if($result) {
        if(isset($featimage) && $featimage != "") {
            $upload_file = move_uploaded_file($_FILES['feat_image']['tmp_name'], "uploads/products/{$featimage}");
            if($upload_file) {
                echo "Thank you, your updates was successful";
                //Redirect to all profiles
                header("Location: all_products.php");
            }
        } else {
            echo "Thank you, your update is successful";
            //Redirect to all profiles
            header("Location: all_products.php");
        }
    } else {
        header("Location: update.php?product_id={$id}&s=0");
        //echo "Oops! there was an error submitting your form";
    }
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML Form</title>
</head>
<body>
    <?php
        echo (isset($_GET['s']) && $_GET['s'] == "0") ? "Failed to update this product" : "";
    ?>
<form method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    <label for="prod_name">prod_name</label>
    <input type="text" class="prod_name" name="prod_name" value="<?php echo $row['prod_name']; ?>"> <br>

    <label for="price_cuurent">price_current</label>
    <input type="text" class="price_current" name="price_current" value="<?php echo $row['price_current']; ?>" > <br>

    <label for="price_main">price_main</label>
    <input type="text" class="price_main" name="price_main" value="<?php echo $row['price_main']; ?>" > <br>

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

    <input type="submit" value="Add Product" name="updateproductsBtn">
</form>
   
</body>
</html>