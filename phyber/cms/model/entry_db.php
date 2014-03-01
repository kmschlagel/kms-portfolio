<?php
function get_entries() {
    global $db;
    $query = 'SELECT * FROM entries
              ORDER BY entryID';
    $entries = $db->query($query);
    return $entries;
}

function get_entries_by_tag($tag_id) {
    global $db;
    $query = "SELECT * FROM entries
              WHERE entries.tagID = '$tag_id'
              ORDER BY entryID";
    $entries = $db->query($query);
    return $entries;
}

function get_entry($entry_id) {
    global $db;
    $query = "SELECT * FROM entries
              WHERE entryID = '$entry_id'";
    $entry = $db->query($query); //database object
    $entry = $entry->fetch(); //array
    return $entry; 
}

function delete_entry($entry_id) {
    global $db;
    $query = "DELETE FROM entries
              WHERE entryID = '$entry_id'";
    $db->exec($query);
}

function add_entry($tag_id, $entry_name, $entry_desc, $entry_desc_full) {
    global $db;
    $query = "INSERT INTO entries
                 (tagID, entryName, entryDesc, entryDescFull)
              VALUES
                 ('$tag_id', '$entry_name', '$entry_desc', '$entry_desc_full')";
    $db->exec($query);
}

function edit_entry($tag_id, $entry_id, $entry_name, $entry_desc, $entry_desc_full) {
    global $db;
    $query = "update entries
	set entryName = '$entry_name', 
		entryDesc = '$entry_desc',
		entryDescFull = '$entry_desc_full',
		tagID = '$tag_id'
	where entryID = '$entry_id'";
    $db->exec($query);
}
?>