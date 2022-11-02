<?php

require_once("db.conn.php");

if(isset($_POST['addProdBtn'])) {
    $prodname = $_POST['prod_name'];
    $pricecurrent = $_POST['price_current'];
    $pricemain = $_POST['price_main'];
    $briefdesc = $_POST['brief_desc'];
    $sku = $_POST['sku'];
    $tags = $_POST['tags'];
    $color = $_POST['color'];
    $size = $_POST['size'];
    $qty = $_POST['qty'];
    $proddesc = $_POST['prod_desc'];
    $addinfo = $_POST['add_info'];
    $featimage = $_FILES['feat_image']['name'];

    $query = "INSERT INTO tbl_products(prod_name, price_current, price_main, brief_desc, sku, tags, color, size, qty, prod_desc, add_info, feat_image) VALUES ('$prodname', '$pricecurrent', '$pricemain', '$briefdesc', '$sku', '$tags', '$color', '$size', '$qty', '$proddesc', '$addinfo', '$featimage')";
    $result = mysqli_query($conn, $query);

    if($result) {
        $upload_prod = move_uploaded_file($_FILES['feat_image']['tmp_name'], "uploads/products/{$featimage}");
        if($upload_prod) {
            header("Location: success.php");
        } else {
            header("Location: failed.php");
        }
    } else {
        echo "Failed to add products";
    }
}