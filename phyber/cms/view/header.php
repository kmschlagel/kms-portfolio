<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <!-- the head section -->
    <head>
        <title>Phyber CMS</title>
        <link rel="stylesheet" type="text/css" href="view/styles/main.css" />
        <link rel="stylesheet" type="text/css" href="view/styles/Josefin-fontfacekit/stylesheet.css">
              
		<script type="text/javascript" src="view/styles/ckeditor/ckeditor.js"></script>
        <script type="text/javascript">
			function confirmPost()
			{
			var agree=confirm("Are you sure you want to delete?");
			if (agree)
			return true;
			else
			return false;
			}
        </script>
        
        <script src="http://code.jquery.com/jquery-1.8.2.min.js"></script> 
    	<script type="text/javascript">
			var minWidth = <?php echo GW_MINFILEWIDTH ?>;
			var minHeight = <?php echo GW_MINFILEHEIGHT ?>;
			var maxFileSize = <?php echo GW_MAXFILESIZE ?>;
        </script>
        <script type="text/javascript" src="helpers/chk_dimensions.js"></script>
  		<script type="text/javascript" src="helpers/chk_cat_dimensions.js"></script>
		<script type="text/javascript" src="helpers/chk_blog_dimensions.js"></script>

	</head>

    
    <!-- the body section -->
    <body>
    <div id="page">
        <div id="header">
            <h1>Phyber CMS</h1>
        </div>
       