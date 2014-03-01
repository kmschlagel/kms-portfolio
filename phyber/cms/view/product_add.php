<?php include 'header.php'; ?>
<div id="main">
    <h1>Add Product</h1>
    <form action="index.php" method="post" id="add_product_form" enctype="multipart/form-data">
        <input type="hidden" name="action" value="add_product" />

        <label>Weight:</label>
        <select name="weight_id">
        <?php foreach ( $weights as $weight ) : ?>
            <option value="<?php echo $weight['weightID']; ?>">
                <?php echo $weight['weight']; ?>
            </option>
        <?php endforeach; ?>
        </select>
        <br />

        <label>Code:</label>
        <input type="input" name="code" />
        <br />

        <label>Name:</label>
        <input type="input" name="name" />
        <br />

        <label>List Price:</label>
        <input type="input" name="price" />
        <br />
        
        <label>Product Description</label> <br>
                <textarea name="product_desc" id="product_desc">
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
        <label>&nbsp;</label>
        <input type="submit" value="Add Product" />
        <br />  
    </form>
    <p><a href="index.php?action=list_products">View Product List</a></p>

</div>
<?php include 'footer.php'; ?>