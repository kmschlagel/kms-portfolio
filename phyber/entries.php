<?php include 'header.php'; ?>
   
<div id="page" class="clearfix"> 
     
     <div id="left_column">
     	<h4>Tags</h4>
     	<ul>
			<?php foreach($tags_menu as $tag_menu) : ?>
        	<li><a href="entries.php?tag_id=<?php echo $tag_menu['tagID']; ?>"><p><?php echo $tag_menu['tagName']; ?></p></a></li>
            <?php endforeach; ?>           
        </ul>

        <ul>
     	<li class="ad"><img src="img/debbie_bliss_ad_180.jpg" width="180" height="180"/></li>
        <li class="ad"><img src="img/malabrigo_ad_180.jpg" width="180" height="180"/></li>
        <li class="ad"><img src="img/classic_elite_ad_180.jpg" width="176" height="204"/></li>
        </ul>
     </div> <!--/#left_column-->
    
    <div id="right_column" class="clearfix">
    	<h2><?php echo $tag_name; ?></h2>
        
        <?php foreach($entries as $entry) : ?>
         <div class="blog_entry clearfix">
          	<?php echo '<img src="lg_blog_images/' . $entry['entryID'] . '.' . $entry['file_ext'] . '">'; ?>
            <h4><?php echo $entry['entryName']; ?></h4>
            <?php echo $entry['entryDesc']; ?>
            <a href="entry.php?entry_id=<?php echo $entry['entryID']; ?>">Read More</a> <br />
		 </div> <!-- /.blog_entry -->
         <?php endforeach; ?>  
          
         <a href="#" style="margin-left: 4%; font-family: 'prestige_elite_stdbold';">more entries</a>
  	</div> <!--/#right column-->
  
   </div><!--/#page-->   
   
<?php include 'footer.php'; ?>