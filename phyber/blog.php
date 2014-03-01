<?php include 'header.php'; ?>
   
<div id="page" class="clearfix"> 
     
     <div id="left_column">
     	<h4>Popular Tags</h4>
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
    	<h2>Recent Projects</h2>
         <div class="blog_entry clearfix">
          	<img src="img/colorwork.jpg" />
            <h4>Colorwork Challenge</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis lectus dolor, ultricies et sollicitudin sed, 
            semper hendrerit est. Quisque nec nisi sem. Integer ac lorem sed risus tempor rutrum. Cras eu augue metus. 
            Suspendisse porta, augue ac blandit fringilla, nibh erat placerat urna, ut pellentesque libero velit at odio. 
            Etiam laoreet placerat faucibus. Sed at interdum risus.</p>
            <a href="#">Read More</a> <br />
            <a href="#">#colorwork</a>
            <a href="#">#mittens</a>
         </div> <!-- /.blog_entry -->
         
         <div class="blog_entry clearfix">
          	<img src="img/mens_cardi.jpg"/>
            <h4>Men's Comfort Cardi</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis lectus dolor, ultricies et sollicitudin sed, 
            semper hendrerit est. Quisque nec nisi sem. Integer ac lorem sed risus tempor rutrum. Cras eu augue metus. 
            Suspendisse porta, augue ac blandit fringilla, nibh erat placerat urna, ut pellentesque libero velit at odio. 
            Etiam laoreet placerat faucibus. Sed at interdum risus.</p>
            <a href="#">Read More</a> <br />
         </div> <!-- /.blog_entry -->
         
         <div class="blog_entry clearfix">
          	<img src="img/scand_hat.jpg" />
            <h4>Winter is Coming</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis lectus dolor, ultricies et sollicitudin sed, 
            semper hendrerit est. Quisque nec nisi sem. Integer ac lorem sed risus tempor rutrum. Cras eu augue metus. 
            Suspendisse porta, augue ac blandit fringilla, nibh erat placerat urna, ut pellentesque libero velit at odio. 
            Etiam laoreet placerat faucibus. Sed at interdum risus.</p>
            <a href="#">Read More</a> <br />
            <a href="#">#hat</a>
            <a href="#">#colorwork</a>
            <br />
            
         </div> <!-- /.blog_entry -->
	</div> <!--/#right column-->
  
   </div><!--/#page-->   
   
<?php include 'footer.php'; ?>