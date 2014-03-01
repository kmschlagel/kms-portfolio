<?php include 'header.php'; ?>
<div id="main">

    <h1>Tag List</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
        </tr>
        <?php foreach ($tags as $tag) : ?>
            <tr>
                <td><?php echo $tag['tagName']; ?></td>
                <td><form action="." method="post">
                    <input type="hidden" name="action"
                           value="delete_tag" />
                    <input type="hidden" name="tag_id"
                           value="<?php echo $tag['tagID']; ?>" />
                    <input type="submit" value="Delete" onClick="return confirmPost();" />
                </form></td>
                
                <td><form action="." method="post">
                    <input type="hidden" name="action"
                           value="edit_tag_form" />
                    <input type="hidden" name="tag_id"
                           value="<?php echo $tag['tagID']; ?>" />
                    <input type="submit" value="Edit" />
                </form>
                </td>
            </tr>
            <?php endforeach; ?>
    </table>
    <br />

    <h2>Add Tag</h2>
    <form id="add_tag_form"
          action="index.php" method="post">
        <input type="hidden" name="action" value="add_tag" />

        <label>Name:</label>
        <input type="text" id="new_tag" name="new_tag" />
        <input type="submit" value="Add"/>
    </form>

    <p><a href="index.php?action=list_entries">Manage Entries</a></p>
    <p><a href="index.php?action=list_products">Manage Products</a></p>
    <p><a href="?action=list_weights">Manage Weights</a></p>
    <p><a href="index.php?action=user_list">Manage Users</a></p>
    <p><a href="?action=logout">Log Out</a></p>

</div>
<?php include 'footer.php'; ?>