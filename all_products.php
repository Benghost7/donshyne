<?php
include("app.php");

$query = "SELECT * FROM tbl_products";
$rows = mysqli_query($conn, $query) or die("Error executing query");

//serial number
$sn=0;
?>

<table>
    <thead>
        <tr>
            <th>SN</th>
            <th>Featimage</th>
            <th>Product Name</th>
            <th>Price (current)</th>
            <th>Price (main)</th>
            <th>SKU</th>
            <th>Tags</th>
            <th>Color</th>
            <th>Size</th>
            <th>Qty</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($rows as $row) { $sn++; ?>
        <tr>
            <td><?php echo $sn; ?></td>
            <td><img src="uploads/products/<?php echo $row['feat_image']; ?>" height="70" alt="Product Featured Image"></td>
            <td><?php echo $row['prod_name']; ?></td>
            <td><?php echo $row['price_current']; ?></td>
            <td><?php echo $row['price_main']; ?></td>
            <td><?php echo $row['sku']; ?></td>
            <td><?php echo $row['tags']; ?></td>
            <td><?php echo $row['color']; ?></td>
            <td><?php echo $row['size']; ?></td>
            <td><?php echo $row['qty']; ?></td>
            <td>
                <a href="update.php?product_id=<?php echo $row['id']; ?>"> Edit</a> |
                <a href="delete.php?gif=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to delete this reecord');">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>
