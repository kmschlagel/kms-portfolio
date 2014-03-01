<?php include 'header.php'; ?>

        <div id="main">
  		<h2>Edit Product</h2>
    
    <form action="index.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="action" value="edit_product" />
    
    <label>Weight:</label>
                <select name="weight_id">
                
                 <option value="<?php echo $weight['weightID']; ?>" selected="selected">
                        <?php echo $weight['weight']; ?>
                    </option>
                    
                <?php foreach ($weights as $weight) : ?>
                    <option value="<?php echo $weight['weightID']; ?>">
                        <?php echo $weight['weight']; ?>
                    </option>
                <?php endforeach; ?>
                </select>
    <br />

  	<input type="hidden" name="product_id"
    	value="<?php echo $product['productID']; ?>" />
     
    <label>Product Code</label>
    <input type="input" name="code"
     	value="<?php echo $product['productCode']; ?>" />
     <br />
     <label>Product Name</label>
     <input type="input" name="name"
    	 value="<?php echo $product['productName']; ?>" />
       <br />
     <label>List Price</label>
     <input type="input" name="price"
     	value="<?php echo $product['listPrice']; ?>" />
        
        <br />
     <label>Product Description</label><br>
     <textarea name="product_desc" id="product_desc">
     	<?php echo $product['productDesc']; ?>
      </textarea>
  
    	<script type="text/javascript">
			//CKEDITOR.replace('description');
			
		
			CKEDITOR.replace('product_desc',
			{
				toolbar : 'MyBasic',
			});
        </script>
        <br />
        <label for="product_image">Product Image</label>
        <input type="file" name="product_image" id="product_image" />
        
        <br /> 

     <input id="edit_product_button" type="submit"  value="Edit" />
      
     </form>

    </div><!-- end page -->

<?php include 'footer.php'; ?>