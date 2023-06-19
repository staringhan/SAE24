<?php
//connexion with form to connect to the database
include 'connect.php';
//get the data from the form
$login = $_POST['login'];
$password = $_POST['password'];



//check for sql injection
$login = mysqli_real_escape_string($con, $login);
$password = mysqli_real_escape_string($con, $password);

//ash the password
//$password = hash('sha256', $password);

//make the request
$sql = "SELECT * FROM `users` WHERE `login` = '$login' AND `mdp` = '$password'";

$result = mysqli_query($con, $sql);
//check if the request is correct
if (mysqli_num_rows($result) > 0) {
  echo "You are connected as an administrator";
  //open session 
    session_start();
    $_SESSION['login'] = $login;
    $_SESSION['password'] = $password;
    $_SESSION['admin'] = true;

    header('Location: ../web/projet.html');
} else {
        echo "<script type='text/javascript'>alert('Wrong login or password');</script>";
        // Redirect to the login page after a brief delay
        echo "<script type='text/javascript'> window.location.href = 'connexion.php'; </script>";
        exit;
    }


//close the connection
$con->close();
?>