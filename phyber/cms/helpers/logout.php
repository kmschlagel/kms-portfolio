<?php
    session_start();
    $_SESSION['loggedIn'] = false;
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>
<p>You have logged out</p>
<p><a href="index.php">Log Back In</a></p>
</body>
</html>