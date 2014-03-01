<?php include 'header.php'; ?>

<div>
 <p>Add User</p>
  <form method="post" action="?action=add_user">
  <input type="hidden" name="action" value="add_user" />
      Email: <input type="text" name="frm_email"> <br />
        Password: <input type="password" name="frm_password"> <br />
      <input type="submit" name="submit" value="add user">
    </form>
</div>
<?php include 'footer.php'; ?>
