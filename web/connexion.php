<!DOCTYPE html>
<html lang="fr">

<?php
//verification of the existing connection, if the user is already connected, redirect to admin.php or gestionnaire.php depending on the user type
session_start();
if (isset($_SESSION['admin']) && $_SESSION['admin'] === true) {
  header('Location: projet.html');
}


?>

<head>
  <meta charset="utf-8">
  <title>SAE 24 - Page de connexion</title>
  <meta name="author" content="IcpOcc">
  <meta name="description" content="SAE 24, Accueil">
  <meta name="keywords" content="HTML, CSS">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <link rel="stylesheet" type="text/css" href="../styles/connexion.css" media="screen">
  <link rel="stylesheet" type="text/css" href="../styles/style.css" media="screen">
  <link rel="shortcut icon" href="../media/favicon.ico" type="image/x-icon">
</head>

<body>

  <header>

    <nav class="navbar"> 
    <section class="logo">
      <a href="../index.html">
        <img class="iconelogo" src="../media/vitaltouchblack.png" alt="Logo">
      </a>
    </section>

    <ul class="nav-liste" id="navi-liste">
      <li class="element-liste">
        <a href="#">Rendez-Vous</a>
      </li>
    </ul>
  </nav>

  </header>

  <section class="wrapper">
    <section id="formContenu">
      <h2 class="active">Se connecter</h2>

      <section class="image">
        <img src="../media/VLOGOgreen.png" id="icon" alt="Logo VitalTouch">
      </section>

      <form action="../php/login.php" method="post">
        <input type="text" id="login" name="login" placeholder="Identifiant">
        <input type="password" id="password" name="password" placeholder="Mot de passe">
        <input type="submit" class="submit" value="Connexion">
      </form>

    </section>
  </section>
  
</body>

</html>
