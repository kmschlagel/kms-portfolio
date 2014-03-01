<?php
function get_weights() {
    global $db;
    $query = 'SELECT * FROM weights
              ORDER BY weightID';
    $result = $db->query($query);
    return $result;
}

function get_weight_name($weight_id) {
    global $db;
    $query = "SELECT * FROM weights
              WHERE weightID = $weight_id";
    $weight = $db->query($query);  //object
    $weight = $weight->fetch();  //array
    $weight_name = $weight['weight']; //string
    return $weight_name;
}


function get_weight($weight_id) {
    global $db;
    $query = "SELECT * FROM weights
              WHERE weightID = $weight_id";
    $weights = $db->query($query);  //object
    $weight = $weights->fetch();  //array
    return $weight;
}


function add_weight($name) {
    global $db;
    $query = "INSERT INTO weights (weight)
              VALUES ('$name')";
    $db->exec($query);
}


function edit_weight($weight_id, $weight) {
    global $db;
    $query = "update weights
	set weight = '$weight'
	where weightID = '$weight_id'";
    $db->exec($query);
}


function delete_weight($weight_id) {
    global $db;
    $query = "DELETE FROM weights
              WHERE weightID = '$weight_id'";
    $db->exec($query);
}


?>