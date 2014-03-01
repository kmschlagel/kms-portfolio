<?php
require('database.php');

//get category from weights page
$weight_id = $_GET['weight_id'];
$product_id = $_GET['product_id'];
$tag_id = $_GET['tag_id'];
$entry_id = $_GET['entry_id'];


// get all weights
$query = 'SELECT * from weights order by weightID';
$weights_menu = $db->query($query);


//prepare statement for getting current weight for header
$weight = $db->prepare('SELECT * from weights
		  where weightID = :weight_id
		  order by weight');
$weight->execute(array(':weight_id' => $weight_id));
$weight_row = $weight->fetch(); //array (one row in record set)
$weight_name = $weight_row['weight']; // string (one column in array)


//prepare statement for getting products by category
$products = $db->prepare('SELECT * from products
		  where weightID = :weight_id
		  order by productName');
$products->execute(array(':weight_id' => $weight_id));


//prepare statement for INNER JOIN between weights and products, get selected product
$products_single = $db->prepare('SELECT * from weights
		  INNER JOIN products
		  ON weights.weightID = products.weightID
		  where productID = :product_id');
$products_single->execute(array(':product_id' => $product_id));
$product_single = $products_single->fetch(); //array (one row in record set)


// get all tags
$query = 'SELECT * from tags order by tagName';
$tags_menu = $db->query($query);

//prepare statement for getting current tag for header
$tag = $db->prepare('SELECT * from tags
		  where tagID = :tag_id
		  order by tagName');
$tag->execute(array(':tag_id' => $tag_id));
$tag_row = $tag->fetch(); //array (one row in record set)
$tag_name = $tag_row['tagName']; // string (one column in array)


//prepare statement for getting entries by tag
$entries = $db->prepare('SELECT * from entries
		  where tagID = :tag_id
		  order by entryName');
$entries->execute(array(':tag_id' => $tag_id));


//prepare statement for INNER JOIN between tags and entries, get selected entry
$entries_single = $db->prepare('SELECT * from tags
		  INNER JOIN entries
		  ON tags.tagID = entries.tagID
		  where entryID = :entry_id');
$entries_single->execute(array(':entry_id' => $entry_id));
$entry_single = $entries_single->fetch(); //array (one row in record set)

/************Original Queries************

// get current weight for header
$query = "SELECT * from weights
		  where weightID = '$weight_id'";
$weights = $db->query($query);  //record set
$weight = $weights->fetch(); //array (one row in record set)
$weight_name = $weight['weight']; // string (one column in array)


//get products by category
$query = "SELECT * from products
		  where weightID = '$weight_id'
		  order by productName";
$products = $db->query($query);


// get selected product
$query = "SELECT * from weights 
		  INNER JOIN products
		  ON weights.weightID = products.weightID
		  where productID = '$product_id'";
$products_single = $db->query($query);  //record set
$product_single = $products_single->fetch(); //array (one row in record set)

// get all tags
$query = 'SELECT * from tags order by tagName';
$tags_menu = $db->query($query);


// get current tag for header
$query = "SELECT * from tags
		  where tagID = '$tag_id'";
$tags = $db->query($query);  //record set
$tag = $tags->fetch(); //array (one row in record set)
$tag_name = $tag['tagName']; // string (one column in array)


// get entries by tag
$query = "SELECT * from entries
		  where tagID = '$tag_id'
		  order by entryName";
$entries = $db->query($query);


// get selected entry
$query = "SELECT * from tags 
		  INNER JOIN entries
		  ON tags.tagID = entries.tagID
		  where entryID = '$entry_id'";
$entries_single = $db->query($query);  //record set
$entry_single = $entries_single->fetch(); //array (one row in record set)
*/

?>

<!DOCTYPE HTML>
<html>
<head>
<meta name="viewport"  content="initial-scale=1, width=device-width">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Phyber</title>

<link rel="stylesheet" type="text/css" href="css/phyberstyle.css">
<link rel="stylesheet" type="text/css" href="fonts/Josefin-fontfacekit/stylesheet.css">
<link rel="stylesheet" type="text/css" href="fonts/webfontkit-20121005-165056/stylesheet.css">

<script type="text/javascript" src="scripts/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="scripts/validate.js" ></script>
<script type="text/javascript" src="scripts/InFieldLabels/src/jquery.infieldlabel.min.js"></script>


<script type="text/javascript">
$(document).ready(function(){
  $("label").inFieldLabels();
  
});
</script>

<script type="text/javascript" >
function swap(myimg,myid)
{
	document.getElementById(myid).src = myimg;

}
</script>
</head>

<body>

<!--possible colors: green: #CCCC66, dark teal: #339999, light blue: #3399CC, lightest blue: #66CCCC -->

  	<div id="header_container">
   		<div id="header">
			<a href="index.php"><img src="img/Banner/phyber_logo2.gif" alt="Phyber logo" width="350" height="70"></a>
          
            <div id="nav"> <!--nav starts here-->
                <ul>
                    <li><a href="about.php">about</a></li>
                    <li><a href="weights.php">yarn</a></li>
                    <li><a href="classes.php">classes</a></li>
                    <li><a href="blog.php">blog</a></li>
                    <li><a href="contact.php">contact</a></li>
                </ul>
            </div> <!--/nav-->
   		</div> <!--/#header-->
   </div> <!--/#header_container-->

   
