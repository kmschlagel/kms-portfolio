<?php
function get_tags() {
    global $db;
    $query = 'SELECT * FROM tags
              ORDER BY tagID';
    $result = $db->query($query);
    return $result;
}

function get_tag_name($tag_id) {
    global $db;
    $query = "SELECT * FROM tags
              WHERE tagID = $tag_id";
    $tag = $db->query($query);
    $tag = $tag->fetch();
    $tag_name = $tag['tagName'];
	return $tag_name;
}

function get_tag($tag_id) {
    global $db;
    $query = "SELECT * FROM tags
              WHERE tagID = $tag_id";
    $tags = $db->query($query);  //object
    $tag = $tags->fetch();  //array
    return $tag;
}



function add_tag($new_tag) {
    global $db;
     $query = "INSERT INTO tags (tagName)
              VALUES ('$new_tag')";
    $db->exec($query);
}


function edit_tag($tag_id, $tag_name) {
    global $db;
    $query = "update tags
	set tagName = '$tag_name'
	where tagID = '$tag_id'";
    $db->exec($query);
}


function delete_tag($tag_id) {
    global $db;
    $query = "DELETE FROM tags
              WHERE tagID = '$tag_id'";
    $db->exec($query);
}


?>