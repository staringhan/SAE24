<?php
    //check session to see if the user is connected as an administrator with the right login and password
    session_start();
    if (!isset($_SESSION['admin']) ){
            // sebd ab alert saying that the user is not connected and redirect to index.php;
            echo "<script>alert('Vous n\'êtes pas connecté en tant qu\'administrateur')</script>";
            echo "<script type='text/javascript'> window.location.href = '../index.html'; </script>";
          }
    ?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>SAE 24 - Validation HTML CSS</title>
        <meta charset="utf-8">
        <meta name="author" content="IcpOcc">
        <meta name="description" content="SAE 24, projet">
        <meta name="keywords" content="HTML, CSS">
        <link rel="stylesheet" type="text/css" href="../styles/projet.css" media="screen">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <link rel="shortcut icon" href="../media/VLOGOgreen.ico" type="image/x-icon">
        <meta content="width=device-width, initial-scale=1" name="viewport">
    </head>
    <body>
        <nav class="navbar">
            <div class="logo">
                <a href="../index.html">
                <img class="iconelogo" src="../media/vitaltouchblack.png" alt="Logo">
                </a>
            </div>
            <ul class="nav-liste" id="navi-liste">
                <li class="element-liste">
                    <a href="../web/projet.php">Retour</a>
                </li>
                <li class="element-liste">
                    <a href="../../php/deconnexion.php">Déconnexion</a>
                </li>
            </ul>
        </nav>
        <section class="contenu">
            <h1 class="titre">Validation des pages HTML et des feuilles de style</h1>
            <article class="texte">
                <h3>Validation HTML</h3>
                <p>La page <a href="../index.html">d'accueil</a> du site est validée en HTML</p>
                <img class="validation" src="../media/validation/validhtml.jpeg" alt="Validation de la page accueil html ">
                <p>La page de <a href="../web/connexion.php">connexion</a> du site est validée en HTML</p>
                <img class="validation" src="../media/validation/validhtml2.jpeg" alt="Validation de la page connexion html ">
            </article>
            <article class="texte">
                <h3>Validation CSS</h3>
                <p>La page <a href="../index.html">d'accueil</a> du site est validée en CSS</p>
                <img class="validation" src="../media/validation/validcss.jpeg" alt="Validation de la page accueil css ">
                <p>La page de <a href="../web/connexion.php">connexion</a> du site est validée en HTML</p>
                <img class="validation" src="../media/validation/validcss2.jpeg" alt="Validation de la page connexion css ">
            </article>
            <article class="texte">
                <h3>Validation des autres pages (projet)</h3>
                <p>L'ensemble des pages projets sont également validées, cependant vu que le site n'est pas hébergé en ligne, on ne 
                    peut pas mettre de lien direct vers la verification de chaque pages.
                </p>
            </article>
        </section>
    </body>
</html>
