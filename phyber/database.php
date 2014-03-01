<?php
    $dsn = 'mysql:host=db470967886.db.1and1.com;dbname=db470967886';
    $username = 'dbo470967886';
    $password = 'p0pc0rnE2';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
?>