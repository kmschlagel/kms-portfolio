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
    	<h2> <?php echo $weight_name; ?></h2>
         	<ul>
            <?php foreach($products as $product) : ?>
            <li class="box"><a href="single_product_hovertest.php?product_id=<?php echo $product['productID']; ?>"><p><?php echo $product['productName']; ?></p><?php echo '<img src="img/sm_images/' . $product['productID'] . '.' . $product['file_ext'] . '">'; ?></a></li>
           <?php endforeach; ?>
          </ul>
    </div> <!--/#right_column-->
  
   </div><!--/#main_container-->   
   
<?php include 'footer.php'; ?>