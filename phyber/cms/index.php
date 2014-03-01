<?php
require('helpers/authenticate.php');
require('helpers/appvars.php');
require('helpers/appvars_cat.php');
require('helpers/appvars_blog.php');
require('model/database.php');
require('model/product_db.php');
require('model/category_db.php');
require('model/tag_db.php');
require('model/entry_db.php');
require('model/user_db.php');


if (isset($_POST['action'])) {
    $action = $_POST['action'];
} else if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'list_products';
}

	switch ($action) { 
	case 'list_products':
    // Get the current category ID
    $weight_id = $_GET['weight_id'];
    if (!isset($weight_id)) {
        $weight_id = 1;
    }
	// Get product and category data
    $weight_name = get_weight_name($weight_id);
    $weights = get_weights();
    $products = get_products_by_weight($weight_id);
	// Display the product list
    include('view/product_list.php');
	break;
	
	case 'delete_product':
    // Get the IDs
    $product_id = $_POST['product_id'];
    $weight_id = $_POST['weight_id'];
    delete_product($product_id);
	// Display the Product List page for the current category
    header("Location: .?weight_id=$weight_id");
	break;
	

	case 'product_edit_form':
	$product_id = $_POST['product_id'];
    $weight_id = $_POST['weight_id'];
	$product = get_product($product_id);
	$weight = get_weight($weight_id);
    $weights = get_weights();
    include('view/product_edit.php');
	break;
	
	case 'edit_product':
    $weight_id = $_POST['weight_id'];
	$product_id = $_POST['product_id'];
    $code = $_POST['code'];
    $name = $_POST['name'];
    $price = $_POST['price'];
	$product_desc = $_POST['product_desc'];
	// Validate the inputs
    if (empty($code) || empty($name) || empty($price) || empty($product_desc)) {
        $error = "Invalid product data. Check all fields and try again.";
        include('errors/error.php'); break;
    } else {
        edit_product($product_id, $weight_id, $code, $name, $price, $product_desc);
			if(!empty($blog_image)) 
			{
		include('helpers/insert_image.php');
		include('helpers/resize_image.php');
			}
		// Display the Product List page for the current category
        header("Location: .?weight_id=$weight_id"); break;
    }
	break;
	
	case 'product_add_form':
    $weights = get_weights();
    include('view/product_add.php');
	break;
	
	case 'add_product':
    $weight_id = $_POST['weight_id'];
    $code = $_POST['code'];
    $name = $_POST['name'];
    $price = $_POST['price'];
	$product_desc = $_POST['product_desc'];	
	// Validate the inputs
    if (empty($code) || empty($name) || empty($price) || empty($product_desc)) {
        $error = "Invalid product data. Check all fields and try again.";
        include('errors/error.php'); break;
    } else {
        add_product($weight_id, $code, $name, $price, $product_desc);
		include('helpers/insert_image.php');
		include('helpers/resize_image.php');
		// Display the Product List page for the current category
        header("Location: .?weight_id=$weight_id"); break;
    }
	break;
	
	
	case 'list_weights':
    $weights = get_weights();
    include('view/weight_list.php');
	break;
	
 	case 'add_weight':
    $name = $_POST['name'];
	// Validate inputs
    if (empty($name)) {
        $error = "Invalid category name. Check name and try again.";
        include('errors/error.php'); break;
    } else {
        add_weight($name);
        header('Location: .?action=list_weights'); break;  // display the Category List page
    }
	break;
	
	case 'edit_weight_form':
    $weight_id = $_POST['weight_id'];
	$weights = get_weights();
	$weight = get_weight($weight_id);
    include('view/weight_edit.php');      
	break;
	
	case 'edit_weight':
    $weight_id = $_POST['weight_id'];
	$weight = $_POST['weight'];
    if (empty($weight_id)) {
	  $error = "Field empty. Please enter data";
	  include('errors/error.php'); break;
	} 
	else {
	edit_weight($weight_id, $weight);
	if(!empty($blog_image)) 
	{
	  include('helpers/insert_cat_image.php');
	  include('helpers/resize_cat_image.php');
	}
	// Display the Product List page for the current category
    header('Location: .?action=list_weights'); break;
	}
	break;
	
	case 'delete_weight':
    $weight_id = $_POST['weight_id'];
    delete_weight($weight_id);
    header('Location: .?action=list_weights');      // display the Category List page
	break;
	
	
	case 'list_entries':
	// Get the current tag ID
    $tag_id = $_GET['tag_id'];
    if (!isset($tag_id)) {
        $tag_id = 1;
    }
	$tag_name = get_tag_name($tag_id);
	$tags = get_tags();
	$entries = get_entries_by_tag($tag_id);
	// Display the entries list
    include('view/entries_list.php');
	break;
	
	case 'entry_add_form':
    $tags = get_tags();
    include('view/entry_add.php');
	break;
	
	case 'add_entry':
	$tag_id = $_POST['tag_id'];
	$entry_name = $_POST['entry_name'];
	$entry_desc = $_POST['entry_desc'];
	$entry_desc_full = $_POST['entry_desc_full'];
	if (empty($entry_name) || empty($entry_desc) || empty($entry_desc_full)) {
		$error = "Invalid data. Check all fields and try again.";
	} else {
		add_entry($tag_id, $entry_name, $entry_desc, $entry_desc_full);
		if(!empty($blog_image)) 
		{
		  include('helpers/insert_blog_image.php');
		  include('helpers/resize_blog_image.php');
		}
		// Display the Entries List page for the current category
        header("Location: .?tag_id=$tag_id&action=list_entries"); break;
    }
	break;

	
	case 'entry_edit_form':
	$entry_id = $_POST['entry_id'];
    $tag_id = $_POST['tag_id'];
	$entry = get_entry($entry_id);
	$tag = get_tag($tag_id);
    $tags = get_tags();
    include('view/entry_edit.php');
	break;
	
	case 'edit_entry':
    $tag_id = $_POST['tag_id'];
	$entry_id = $_POST['entry_id'];
	$entry_name = $_POST['entry_name'];
	$entry_desc = $_POST['entry_desc'];
	$entry_desc_full = $_POST['entry_desc_full'];
	// Validate the inputs
	if (empty($entry_id)) {
		$error = "Field empty. Please enter data";
		include('errors/error.php'); break;
	} else {
        edit_entry($tag_id, $entry_id, $entry_name, $entry_desc, $entry_desc_full);
			if(!empty($blog_image)) 
			{
		include('helpers/insert_blog_image.php');
		include('helpers/resize_blog_image.php');
			}
		// Display the Product List page for the current category
        header("Location: .?tag_id=$tag_id&action=list_entries"); break;
    }
	break;
	
	case 'delete_entry':
    // Get the IDs
    $entry_id = $_POST['entry_id'];
    $tag_id = $_POST['tag_id'];
	// Delete the product
    delete_entry($entry_id);
	// Display the Product List page for the current category
    header("Location: .?tag_id=$tag_id&action=list_entries");
	break;
	
	case 'list_tags':
    $tags = get_tags();
    include('view/tag_list.php');
	break;
	
 	case 'add_tag':
    $new_tag = $_POST['new_tag'];
	// Validate inputs
    if (empty($new_tag)) {
        $error = "Invalid category name. Check name and try again.";
        include('errors/error.php'); break;
    } else {
        add_tag($new_tag);
        header('Location: .?action=list_tags'); break;  // display the Category List page
    }
	break;
	
	case 'edit_tag_form':
    $tag_id = $_POST['tag_id'];
	$tags = get_tags();
	$tag = get_tag($tag_id);
    include('view/tag_edit.php');      
	break;
	
	case 'edit_tag':
    $tag_id = $_POST['tag_id'];
	$tag_name = $_POST['tag_name'];
    if (empty($tag_id)) {
    $error = "Field empty. Please enter data";
    include('errors/error.php'); break;
	} 
	else {
	edit_tag($tag_id, $tag_name);
	 // display the Tag List page
    header('Location: .?action=list_tags'); break;
	}
	break;
	
	case 'delete_tag':
    $tag_id = $_POST['tag_id'];
    delete_tag($tag_id);
	 // display the Tag List page
    header('Location: .?action=list_tags');     
	break;
	
	case 'user_list':
    $users = get_users();
    include('view/user_list.php'); 
	break;
	
	case 'show_user_add':
	$users = get_users();
	include('view/user_add.php');
	break;
	
	case 'add_user':
    if (isset($_POST['frm_password']) && isset($_POST['frm_email'])) 
	{
	$user_email = $_POST['frm_email'];
	$user_password = $_POST['frm_password'];
	$sha1_password = sha1($user_password);
	add_user($user_email, $sha1_password);
	}
	$users = get_users();
	include('view/user_list.php');    
	break;
	
	case 'show_user_edit':
	$email = $_POST['email'];
	$userid = $_POST['userid'];
	include('view/user_edit.php');
	break;
	
	case 'edit_user':
	$user_email = $_POST['frm_email']; 
	$user_password = $_POST['frm_password'];
	$userid = $_POST['frm_userid'];
	$sha1_password = SHA1($user_password);
	edit_user($user_email, $sha1_password, $userid);
	$users = get_users();
	include('view/user_list.php');    
	break;
	
	
	case 'delete_user':
    $userid = $_POST['userid'];
    delete_user($userid);
	$users = get_users();
    include('view/user_list.php');    
	break;

	case 'logout':
	include('view/logout.php');
	break;
}
?>