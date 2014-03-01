<?php include 'header.php'; ?>

        <div id="main">
  		<h2>Edit Entry</h2>
          <form action="index.php" method="post" enctype="multipart/form-data">
    	  <input type="hidden" name="action" value="edit_entry" />
    		<label>Tags:</label>
                <select name="tag_id">
				<option value="<?php echo $tag['tagID']; ?>" selected="selected">
                        <?php echo $tag['tagName']; ?>
                    </option>
                    
                <?php foreach ($tags as $tag) : ?>
                    <option value="<?php echo $tag['tagID']; ?>">
                        <?php echo $tag['tagName']; ?>
                    </option>
                <?php endforeach; ?>
                </select>
    <br />

  	<input type="hidden" name="entry_id"
    	value="<?php echo $entry['entryID']; ?>" />

     <br />
     <label>Entry Title</label>
     <input type="input" name="entry_name"
    	 value="<?php echo $entry['entryName']; ?>" />
        
        <br />
     <label>Entry Short Description</label><br>
     <textarea name="entry_desc" id="entry_desc">
     	<?php echo $entry['entryDesc']; ?>
      </textarea>
  
    	<script type="text/javascript">
			//CKEDITOR.replace('description');
			
		
			CKEDITOR.replace('entry_desc',
			{
				toolbar : 'MyBasic',
			});
        </script>
        <br />
        <label>Entry Full Description</label><br>
     <textarea name="entry_desc_full" id="entry_desc_full">
     	<?php echo $entry['entryDescFull']; ?>
      </textarea>
  
    	<script type="text/javascript">
			//CKEDITOR.replace('description');
			
		
			CKEDITOR.replace('entry_desc_full',
			{
				toolbar : 'MyBasic',
			});
        </script>
        <label for="blog_image">Select Image</label>
        <input type="file" name="blog_image" id="blog_image" />
        <br />
     <input id="edit_entry_button" type="submit"  value="Edit" />
      
     </form>
    </div><!-- end page -->

<?php include 'footer.php'; ?>