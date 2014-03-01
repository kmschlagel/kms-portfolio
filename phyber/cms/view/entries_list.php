<?php include 'header.php'; ?>
<div id="main">

    <h1>Entries List</h1>

    <div id="sidebar">
        <!-- display a list of categories -->
       <h2>Tags</h2>
            <ul class="nav">
            <?php foreach ($tags as $tag) : ?>
                <li>
                <a href="?tag_id=<?php echo $tag['tagID']; ?>&action=list_entries">
                    <?php echo $tag['tagName']; ?>
                </a>
                </li>
            <?php endforeach; ?>
            </ul>
    </div>

    <div id="content">
        <!-- display a table of entries -->
           <h2><?php echo $tag_name; ?></h2>
            <table>
                <tr>
                    <th>Title</th>
					<th>Short Description</th>
                    <th>Long Description</th>
                    <th>Image</th>
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>

                </tr>
                <?php foreach ($entries as $entry) : ?>
                <tr>
                    <td><?php echo $entry['entryName']; ?></td>
                    <td class="right"><?php echo $entry['entryDesc']; ?></td>
                    <td class="right"><?php echo $entry['entryDescFull']; ?></td>
                    <td><?php echo '<img src="../sm_blog_images/' . $entry['entryID'] . '.' . $entry['file_ext'] .'">'; ?></td>
                    <td>
                       	<form action="." method="post">
                        <input type="hidden" name="action"
                               value="delete_entry" />
                        <input type="hidden" name="entry_id"
                               value="<?php echo $entry['entryID']; ?>" />
                        <input type="hidden" name="tag_id"
                               value="<?php echo $entry['tagID']; ?>" />
                        <input type="submit" value="Delete" onClick="return confirmPost();" />
                        </form>

                    </td>
                    
                     <td>
                         <form action="." method="post">
                        <input type="hidden" name="action"
                               value="entry_edit_form" />
                        <input type="hidden" name="entry_id" 
                               value="<?php echo $entry['entryID']; ?>" />
                        <input type="hidden" name="tag_id"
                               value="<?php echo $entry['tagID']; ?>" />
                        <input type="submit" value="Edit" />
                		</form>
                    </td>
                </tr>
				<?php endforeach; ?>
            </table>
            
        <p><a href="?action=entry_add_form">Add Entry</a></p>
        <p><a href="?action=list_tags">Manage Tags</a></p>
        <p><a href="?action=list_products">Manage Products</a></p>
        <p><a href="?action=list_weights">Manage Weights</a></p>
        <p><a href="?action=user_list">Manage Users</a></p>
        <p><a href="?action=logout">Log Out</a></p>
    </div>

</div>
<?php include 'footer.php'; ?>