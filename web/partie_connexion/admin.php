<?php
//check session to see if the user is connected as an administrator with the right login and password
session_start();
if (!isset($_SESSION['administrator']) || $_SESSION['administrator'] !== true) {
    // if the user is not connected and redirect to index.php;
 
    header('Location: index.php');
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ADMIN</title>
</head>
<body>

<h1>Bienvenue sur la page de l'administrateur</h1>
	

</body>
</html>