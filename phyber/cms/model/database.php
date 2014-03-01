<?php
    $dsn = 'mysql:host=db470967886.db.1and1.com;dbname=db470967886';
    $username = 'dbo470967886';
    $password = 'p0pc0rnE2';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
	
	define('DB_HOST', 'db470967886.db.1and1.com');
  	define('DB_USER', 'dbo470967886');
 	define('DB_PASSWORD', 'p0pc0rnE2');
  	define('DB_NAME', 'db470967886');

?>

