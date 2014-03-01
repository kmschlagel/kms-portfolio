<?php
function get_users() {
    global $db;
    $query = 'select * FROM users
              order by email';
    $result = $db->query($query);
	return $result;
}


function add_user($user_email, $sha1_password) {
    global $db;
     $query = "INSERT INTO users
                 (email, password)
              VALUES
                 ('$user_email', '$sha1_password')";
    $db->exec($query);
}


function edit_user($user_email, $sha1_password, $userid) {
    global $db;
     $query = "UPDATE users
              SET email = '$user_email',
               	  password = '$sha1_password'
               WHERE userID = '$userid'";
    $db->exec($query);
}

function delete_user($userid) {
    global $db;
    $query = "DELETE FROM users
          WHERE userID = '$userid'";
	$db->exec($query);
}



?>