<?php include 'header.php'; ?>

    <div id="main">
    <h2>Edit Weight</h2>
    
    <form action="index.php" method="post" id="edit_weight_form" enctype="multipart/form-data">
    <input type="hidden" name="action" value="edit_weight" />
    
  
  	<input type="hidden" name="weight_id"
    value="<?php echo $weight['weightID']; ?>" />
     
     <br />
     <input type="input" name="weight"
     value="<?php echo $weight['weight']; ?>" />

	<br />
 	 <label for="cat_image">Image:</label>
     <input type="file" name="cat_image" id="cat_image" />

     <br />
     <input id="edit_weight_button" type="submit"  value="Edit" />
      
     </form>
    </div><!-- end page -->

<?php include 'footer.php'; ?>