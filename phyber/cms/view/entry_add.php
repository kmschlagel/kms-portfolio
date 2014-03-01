<?php include 'header.php'; ?>
<div id="main">
    <h1>Add an Entry</h1>
            <br />
            <br />
            <form action="index.php" method="post" id="add_entry_form" enctype="multipart/form-data">
        		<input type="hidden" name="action" value="add_entry" />

                <label>Tag:</label>
                <select name="tag_id">
                <?php foreach ($tags as $tag) : ?>
                    <option value="<?php echo $tag['tagID']; ?>">
                        <?php echo $tag['tagName']; ?>
                    </option>
                <?php endforeach; ?>
                </select>
                <br />
                <br />

                <label>Entry Title:</label>
                <input type="input" name="entry_name" />
                <br />
                <br />

                <label>Entry Short Description</label> <br>
                <textarea name="entry_desc" id="entry_desc">
                </textarea>
                
				<script type="text/javascript">
				//CKEDITOR.replace('description');
				
			
				CKEDITOR.replace('entry_desc',
				{
					toolbar : 'MyBasic',
				});
				</script>
               
               
               <label>Entry Full Description</label> <br>
                <textarea name="entry_desc_full" id="entry_desc_full">
                </textarea>
                
				<script type="text/javascript">
				//CKEDITOR.replace('description');
				
			
				CKEDITOR.replace('entry_desc_full',
				{
					toolbar : 'MyBasic',
				});
				</script>
               
               <br />
               <br />
                <label for="blog_image">Entry Image</label>
                <input type="file" name="blog_image" id="blog_image" />
				<br />
				<label>&nbsp;</label>
                <input type="submit" value="Add Entry" />
                <br />
            </form>
            
    <p><a href="index.php?action=list_entries">View Entry List</a></p>

</div>
<?php include 'footer.php'; ?>