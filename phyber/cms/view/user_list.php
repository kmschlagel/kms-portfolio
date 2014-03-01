<?php include ('header.php'); ?>

<div id="main">

<h3>Phyber Users Admin</h3>


<table border="1">
 <tr>
    <th>User</th>
    <th colspan="2">&nbsp;
    </th>
</tr>


<?php foreach ($users as $user): ?>
<tr>
<td><?php echo $user['email']; ?></td>
<td>
	<form action="?action=delete_user" method="post">
        <input type="hidden" name="userid"
               value="<?php echo $user['userID']; ?>" />
        <input type="hidden" name="email"
               value="<?php echo $user['email']; ?>" />
        <input type="submit" value="Delete" onClick="return confirmPost();" />
    </form>
</td>

<td>
    <form action="?action=show_user_edit" method="post">
        <input type="hidden" name="userid" 
               value="<?php echo $user['userID']; ?>" />
        <input type="hidden" name="email"
               value="<?php echo $user['email']; ?>" />
        <input type="submit" value="Edit" />
    </form>
</td>
</tr>

<?php endforeach; ?>
<tr><td colspan="3"><a href="?action=show_user_add">add new user</a></td></tr>
<tr><td colspan="3"><a href="../../index.php">Back to Phyber CMS</a></td></tr>
<tr><td colspan="3"><a href="?action=logout">logout</a></td></tr>
</table>
 
 </div>

<?php include ('footer.php'); ?>
