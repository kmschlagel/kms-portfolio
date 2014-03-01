<?php include 'header.php'; ?>
<div id="main">

    <h1>Weight List</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>Image</th>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
        </tr>
        <?php foreach ($weights as $weight) : ?>
            <tr>
                <td><?php echo $weight['weight']; ?></td>
                <td><?php echo '<img src="../sm_cat_images/' . $weight['weightID'] . '.' . $weight['file_ext'] .'">'; ?></td>
                <td><form action="." method="post">
                    <input type="hidden" name="action"
                           value="delete_weight" />
                    <input type="hidden" name="weight_id"
                           value="<?php echo $weight['weightID']; ?>" />
                    <input type="submit" value="Delete" onClick="return confirmPost();" />
                </form></td>
                
                <td><form action="." method="post">
                    <input type="hidden" name="action"
                           value="edit_weight_form" />
                    <input type="hidden" name="weight_id"
                           value="<?php echo $weight['weightID']; ?>" />
                    <input type="submit" value="Edit" />
                </form>
                </td>
            </tr>
            <?php endforeach; ?>
    </table>
    <br />

    <h2>Add Category</h2>
    <form id="add_category_form"
          action="index.php" method="post">
        <input type="hidden" name="action" value="add_weight" />

        <label>Name:</label>
        <input type="input" name="name" />
        <input type="submit" value="Add"/>
    </form>

    <p><a href="index.php?action=list_products">Manage Products</a></p>
	<p><a href="index.php?action=list_entries">Manage Blog</a></p>
    <p><a href="index.php?action=user_list">Manage Users</a></p>
    <p><a href="?action=logout">Log Out</a></p>

</div>
<?php include 'footer.php'; ?>