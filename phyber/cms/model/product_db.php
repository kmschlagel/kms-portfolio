<?php
function get_products() {
    global $db;
    $query = 'SELECT * FROM products
              ORDER BY productID';
    $products = $db->query($query);
    return $products;
}

function get_products_by_weight($weight_id) {
    global $db;
    $query = "SELECT * FROM products
              WHERE products.weightID = '$weight_id'
              ORDER BY productID";
    $products = $db->query($query);
    return $products;
}

function get_product($product_id) {
    global $db;
    $query = "SELECT * FROM products
              WHERE productID = '$product_id'";
    $product = $db->query($query); //database object
    $product = $product->fetch(); //array
    return $product; 
}

function delete_product($product_id) {
    global $db;
    $query = "DELETE FROM products
              WHERE productID = '$product_id'";
    $db->exec($query);
}

function add_product($weight_id, $code, $name, $price, $product_desc) {
    global $db;
    $query = "INSERT INTO products
                 (weightID, productCode, productName, listPrice, productDesc)
              VALUES
                 ('$weight_id', '$code', '$name', '$price', '$product_desc')";
    $db->exec($query);
}

function edit_product($product_id, $weight_id, $code, $name, $price, $product_desc) {
    global $db;
    $query = "update products
		set productCode = '$code',
		productName = '$name', 
		listPrice = '$price',
		productDesc = '$product_desc',
		weightID = '$weight_id'
	    where productID = '$product_id'";
    $db->exec($query);
}
?>