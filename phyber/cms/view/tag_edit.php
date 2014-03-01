<?php include 'header.php'; ?>

    <div id="main">
    <h2>Edit Tag</h2>
    
    <form action="index.php" method="post" id="edit_tag_form" enctype="multipart/form-data">
        <input type="hidden" name="action" value="edit_tag" />
        <input type="hidden" name="tag_id" value="<?php echo $tag['tagID']; ?>" />
        <br />
        <input type="input" name="tag_name" value="<?php echo $tag['tagName']; ?>" />
        <br />
        <input id="edit_tag_button" type="submit"  value="Edit" />
    </form>
    </div><!-- end page -->

<?php include 'footer.php'; ?>