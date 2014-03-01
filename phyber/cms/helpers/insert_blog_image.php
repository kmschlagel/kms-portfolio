<?php
	$blog_image = $_FILES['blog_image']['name'];
	$blog_image_type = $_FILES['blog_image']['type'];
	$blog_image_size = $_FILES['blog_image']['size']; 
	
	// get file info using $FILES variable. 
	// $FILES variable - An array of items uploaded to the current script via the HTTP POST method. 

	if(isset($entry_id))
	{
		$image_id = $entry_id;	
	}
	else
	{
		$image_id = $db->lastInsertId();
	}
	
	/*
	echo $image_id;
	echo $image_id;
    echo $image_id; 
    echo $image_id; 
	*/
	


if ((($blog_image_type == 'image/gif') || ($blog_image_type == 'image/jpeg') || ($blog_image_type == 'image/jpg') || ($blog_image_type == 'image/png'))
        && ($blog_image_size > 0) && ($blog_image_size <= GW_MAXFILESIZE)) 
		{
		
		// File was uploaded to temp directory when form was submitted. Check if there was an error in the initial upload process.
        if ($_FILES['blog_image']['error'] == 0) {
          // Move the file to the target upload folder
          $target = GW_UPLOADPATH_BLOG . $blog_image;
		  
          if (move_uploaded_file($_FILES['blog_image']['tmp_name'], $target)) 
		  {
			
			/*
				The strrchr() function finds the position of the last occurrence of a string within another string, and returns all 		                characters from this position to the end of the string.
				
				strrchr() returns .gif
				
				sbustr(.gif, 1) returns everything after the first character. gif
			*/
	
			// get file extension
			$file_ext = substr(strrchr($blog_image,'.'),1);
			
			//echo $file_ext;

            // Write the data to the database. dont forget singal quotes here.
           $query = "update entries set file_ext = '$file_ext' where entryID = '$image_id'";
		   
$db->exec($query);   
	
			
		
		    // rename takes two parmaters. currnet file first, new file second.
		
			rename(GW_UPLOADPATH_BLOG . $blog_image, GW_UPLOADPATH_BLOG . $image_id .'.' .$file_ext);
			
			
		  }
		}
	}
	
	?>