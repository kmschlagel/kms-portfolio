<?php include 'header.php'; ?>

<div id="main">
<h2>Edit User</h2>
    
<form action="?action=edit_user" method="post">
    
    <input type="hidden" name="frm_userid" value="<?php echo $userid; ?>" />
    
    <label for="email">Email: </label><input type="text" name="frm_email" id="email" value="<?php echo $email; ?>" size="20" /><br />
    
    <label for="password">Password: </label><input type="password" name="frm_password" id="frm_password" size="20" /><br />
    
    <input type="submit" value="update user" />
</form>

    </div><!-- end page -->

<?php include 'footer.php'; ?>