<?php include 'header.php'; ?>
   
<div id="page" class="clearfix">  
     
     <div id="left_column">
     	<h4>Yarn Weights</h4>
     	<ul>
        	 <?php foreach($weights_menu as $weight_menu) : ?>
        	<li><a href="products.php?weight_id=<?php echo $weight_menu['weightID']; ?>"><p><?php echo $weight_menu['weight']; ?></p></a></li>
            <?php endforeach; ?>    
        </ul>
     </div> <!--/#left_column-->
    
    <div id="right_column" class="clearfix">
    	<h2><?php echo $product_single['productName']; ?></h2>
        	
            <div id="prod_main_img">
            <a href="#"><?php echo '<img src="img/lg_images/' . $product_single['productID'] . '.' . $product_single['file_ext'] . '" id="img5">'; ?></a>
           	
            <a href="#" onmouseover="swap('img/test_images/5.jpg', 'img5');" onmouseout="swap('img/test_images/5_small.jpg', 'img6');">
            <img src="img/test_images/5_small.jpg" id="img6"></a>
            
           	<a href="#" onmouseover="swap('img/test_images/souffle1_big.jpg', 'img5');" onmouseout="swap('img/test_images/souffle1_small.jpg', 'img1');">
            <img src="img/test_images/souffle1_small" id="img1"></a>
            
            <a href="#" onmouseover="swap('img/test_images/souffle2_big.jpg', 'img5');" onmouseout="swap('img/test_images/souffle2_small.jpg', 'img2');">
            <img src="img/test_images/souffle2_small.jpg" id="img2"></a>
            
            <a href="#" onmouseover="swap('img/test_images/souffle3_big.jpg', 'img5');" onmouseout="swap('img/test_images/souffle3_small.jpg', 'img3');">
            <img src="img/test_images/souffle3_small.jpg" id="img3"></a>
            
            <a href="#" onmouseover="swap('img/test_images/souffle4_big.jpg', 'img5');" onmouseout="swap('img/test_images/souffle4_small.jpg', 'img4');">
            <img src="img/test_images/souffle4_small.jpg" id="img4"></a>
            
           
            <br />
            <a href="products.php?weight_id=<?php echo $product_single['weightID']; ?>">Back to <?php echo $product_single['weight']; ?> </a>
            </div> <!--/#prod_main_img-->
            
            <div id="prod_desc">
            	<h5>$<?php echo $product_single['listPrice']; ?></h5>
            	<?php echo $product_single['productDesc']; ?>
                <button>Add to Cart</button>
            </div> <!--/#prod_desc-->
     </div> <!--/#right_column-->
  
</div><!--/#page-->   
   
<?php include 'footer.php'; ?>