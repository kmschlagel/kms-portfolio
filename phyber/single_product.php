<?php include 'header.php'; ?>
   
<div id="page" class="clearfix">  
     
     <div id="left_column">
     	<h4>Yarn Weights</h4>
     	<ul>
        	<?php foreach($weights_menu as $weight_menu) : ?>
        	<li><a href="products.php?weight_id=<?php echo $weight_menu['weightID']; ?>"><p><?php echo $weight_menu['weight']; ?></p></a></li>
            <?php endforeach; ?>    
        </ul>
        
        <ul>
     	<li class="ad"><img src="img/debbie_bliss_ad_180.jpg" width="180" height="180"/></li>
        <li class="ad"><img src="img/malabrigo_ad_180.jpg" width="180" height="180"/></li>
        <li class="ad"><img src="img/classic_elite_ad_180.jpg" width="176" height="204"/></li>
        </ul>
     </div> <!--/#left_column-->
    
    <div id="right_column" class="clearfix">
    	<h2><?php echo $product_single['productName']; ?></h2>
        	
            <div id="prod_main_img">
            <a href="#"><?php echo '<img src="lg_images/' . $product_single['productID'] . '.' . $product_single['file_ext'] . '" id="img5">'; ?></a>
           	<br />
            <br />
            <a href="#" onmouseover="swap('img/lg_images/5.jpg', 'img5');" onmouseout="swap('sm_images/5_small.jpg', 'img6');">
            <img src="sm_images/5_small.jpg" id="img6"></a>
            
           	<a href="#" onmouseover="swap('lg_images/souffle1_big.jpg', 'img5');" onmouseout="swap('sm_images/souffle1_small.jpg', 'img1');">
            <img src="sm_images/souffle1_small" id="img1"></a>
            
            <a href="#" onmouseover="swap('lg_images/souffle2_big.jpg', 'img5');" onmouseout="swap('sm_images/souffle2_small.jpg', 'img2');">
            <img src="sm_images/souffle2_small.jpg" id="img2"></a>
            
            <a href="#" onmouseover="swap('lg_images/souffle3_big.jpg', 'img5');" onmouseout="swap('sm_images/souffle3_small.jpg', 'img3');">
            <img src="sm_images/souffle3_small.jpg" id="img3"></a>
            
            <a href="#" onmouseover="swap('lg_images/souffle4_big.jpg', 'img5');" onmouseout="swap('sm_images/souffle4_small.jpg', 'img4');">
            <img src="sm_images/souffle4_small.jpg" id="img4"></a>

            <br />
            <br />
            <a href="products.php?weight_id=<?php echo $product_single['weightID']; ?>">Back to <?php echo $product_single['weight']; ?> </a>
            </div> <!--/#prod_main_img-->
            
            <div id="prod_desc">
            	<h5><?php echo "$" . $product_single['listPrice'] . "/skein"; ?></h5>
            	<?php echo $product_single['productDesc']; ?>
                <a href="blog.php">View projects</a>
                <br />
                <br />
                <form>
                <label>Quantity:</label>
                <input type="text" size="2"/>
                </form>
                <button>Add to Cart</button>
            </div> <!--/#prod_desc-->
     </div> <!--/#right_column-->
  
</div><!--/#page-->   
   
<?php include 'footer.php'; ?>