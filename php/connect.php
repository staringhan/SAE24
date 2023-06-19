<?php
// purpose: connect to the database 

// define the variables
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "SAE24";

// create the connection
$con = mysqli_connect($servername, $username, $password, $dbname);

// check the connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
?>
