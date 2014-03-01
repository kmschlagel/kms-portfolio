<?php include 'header.php'; ?>
<div id="main">

    <h1>Product List</h1>

    <div id="sidebar">
        <!-- display a list of categories -->
        <h2>Weights</h2>
        <ul class="nav">
        <?php foreach ($weights as $weight) : ?>
            <li>
            <a href="?weight_id=<?php echo $weight['weightID']; ?>">
                <?php echo $weight['weight']; ?>
            </a>
            </li>
        <?php endforeach; ?>
        </ul>
    </div>

    <div id="content">
        <!-- display a table of products -->
        <h2><?php echo $weight_name; ?></h2>
        <table>
            <tr>
                <th>Code</th>
                <th>Name</th>
                <th class="right">Price</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
            </tr>
            <?php foreach ($products as $product) : ?>
            <tr>
                <td><?php echo $product['productCode']; ?></td>
                <td><?php echo $product['productName']; ?></td>
                <td class="right"><?php echo $product['listPrice']; ?></td>
                <td class="right"><?php echo $product['productDesc']; ?></td>
                <td><?php echo '<img src="../sm_images/' . $product['productID'] . '.' . $product['file_ext'] .'">'; ?></td>
                <td>
                	<form action="." method="post">
                    <input type="hidden" name="action"
                           value="delete_product" />
                    <input type="hidden" name="product_id"
                           value="<?php echo $product['productID']; ?>" />
                    <input type="hidden" name="weight_id"
                           value="<?php echo $product['weightID']; ?>" />
                    <input type="submit" value="Delete" onClick="return confirmPost();" />
                	</form>
                </td>
                
                <td>
                	<form action="." method="post">
                    <input type="hidden" name="action"
                           value="product_edit_form" />
                    <input type="hidden" name="product_id" 
                           value="<?php echo $product['productID']; ?>" />
                    <input type="hidden" name="weight_id"
                           value="<?php echo $product['weightID']; ?>" />
                    <input type="submit" value="Edit" />
                	</form>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <p><a href="?action=product_add_form">Add Product</a></p>
        <p><a href="?action=list_weights">Manage Weights</a></p>
		<p><a href="?action=list_entries">Manage Blog</a></p>
        <p><a href="?action=user_list">Manage Users</a></p>
        <p><a href="?action=logout">Log Out</a></p>
    </div>

</div>
<?php include 'footer.php'; ?>