<?php include 'header.php'; ?>
   
<div id="page" class="clearfix"> 
     
     <div id="left_column">
     	<ul>
     	<li class="ad"><img src="img/debbie_bliss_ad_180.jpg" width="180" height="180"/></li>
        <li class="ad"><img src="img/malabrigo_ad_180.jpg" width="180" height="180"/></li>
        <li class="ad"><img src="img/classic_elite_ad_180.jpg" width="176" height="204"/></li>
        </ul>
     </div> <!--/#left_column-->
    
    <div id="right_column" class="clearfix">
    	<h2>Yarn Weights</h2>
          <ul>
            <?php foreach($weights_menu as $weight_menu) : ?>
        	<li class="box"><a href="products.php?weight_id=<?php echo $weight_menu['weightID']; ?>"><p><?php echo $weight_menu['weight']; ?></p><?php echo '<img src="sm_cat_images/' . $weight_menu['weightID'] . '.' . $weight_menu['file_ext'] . '">'; ?></a></li>
            <?php endforeach; ?>
          </ul>
  	</div> <!--/#right column-->
  
   </div><!--/#page-->   
   
<?php include 'footer.php'; ?>