<?php
	$cat_image = $_FILES['cat_image']['name'];
	$cat_image_type = $_FILES['cat_image']['type'];
	$cat_image_size = $_FILES['cat_image']['size']; 
	
	// get file info using $FILES variable. 
	// $FILES variable - An array of items uploaded to the current script via the HTTP POST method.
	
	 
	if(isset($weight_id))
	{
		$image_id = $weight_id;	
	}
	else
	{
		$image_id = $db->lastInsertId();
	}
	
	//echo $cat_image_type;
	//echo $cat_image_size;

if ((($cat_image_type == 'image/gif') || ($cat_image_type == 'image/jpeg') || 
	($cat_image_type == 'image/jpg') || ($cat_image_type == 'image/png'))
       
	    && ($cat_image_size > 0) && ($cat_image_size <= GW_MAXFILESIZE)) 
		{
		
		//echo "test2";
		
		// File was uploaded to temp directory when form was submitted. Check if there was an error in the initial upload process.
        if ($_FILES['cat_image']['error'] == 0) {
          // Move the file to the target upload folder
          $target = GW_UPLOADPATH_CAT . $cat_image;
		  
          if (move_uploaded_file($_FILES['cat_image']['tmp_name'], $target)) 
		  {
			
			/*
				The strrchr() function finds the position of the last occurrence of a string within another string, and returns all 		                characters from this position to the end of the string.
				
				strrchr() returns .gif
				
				sbustr(.gif, 1) returns everything after the first character. gif
			*/
	
			// get file extension
			$file_ext = substr(strrchr($cat_image,'.'),1);
			
			//echo $file_ext;
			//echo "test";
			
            // Write the data to the database. dont forget singal quotes here.
           $query = "update weights set file_ext = '$file_ext' where weightID = '$image_id'";
		   $db->exec($query);   
	
			
		
		    // rename takes two parmaters. currnet file first, new file second.
		
			rename(GW_UPLOADPATH_CAT . $cat_image, GW_UPLOADPATH_CAT . $image_id .'.' . $file_ext);
			
			
		  }
		}
	}
	
	?>