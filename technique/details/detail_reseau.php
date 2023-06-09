<?php
    //check session to see if the user is connected as an administrator with the right login and password
    session_start();
    if (!isset($_SESSION['admin']) ){
            // sebd ab alert saying that the user is not connected and redirect to index.php;
            echo "<script>alert('Vous n\'êtes pas connecté en tant qu\'administrateur')</script>";
            echo "<script type='text/javascript'> window.location.href = '../../index.html'; </script>";
          }
    ?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>SAE 24 - Detail réseau</title>
        <meta charset="utf-8">
        <meta name="author" content="IcpOcc">
        <meta name="description" content="SAE 24, projet">
        <meta name="keywords" content="HTML, CSS">
        <link rel="stylesheet" type="text/css" href="../../styles/projet.css" media="screen">
        <link rel="stylesheet" type="text/css" href="../styles/tableau.css" media="screen">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <link rel="shortcut icon" href="../media/VLOGOgreen.ico" type="image/x-icon">
        <meta content="width=device-width, initial-scale=1" name="viewport">
    </head>
    <body>
        <nav class="navbar">
            <div class="logo">
                <a href="../../index.html">
                <img class="iconelogo" src="../../media/vitaltouchblack.png" alt="Logo">
                </a>
            </div>
            <ul class="nav-liste" id="navi-liste">
                <li class="element-liste">
                    <a href="../reseau.php">Retour</a>
                </li>
                <li class="element-liste">
                    <a href="../../php/deconnexion.php">Déconnexion</a>
                </li>
            </ul>
        </nav>
        <section class="contenu">
            <h1 class="titre">Présentation détaillée du réseau du système d'information</h1>
            <article class="texte">
                <h3>Configiuration du Switch</h3>
                <p>Le switch est un équipement réseau qui permet de connecter plusieurs ordinateurs entre eux au sein d'un réseau local (LAN). 
                    Il permet de faire communiquer les ordinateurs entre eux et de partager des ressources (imprimantes, scanners, etc.).
                    Nous avons donc configuré le switch pour définir les différents VLANs et les ports associés à ces VLANs.  
                </p>
                <img class="schema" src="../../media/capture_switch_routeur/Capture.PNG" alt="plan du réseau ">
            </article>
            <article class="texte">
                <h3>Configiuration du routeur</h3>
                <p>
                    Le routeur est un équipement réseau qui permet de connecter plusieurs réseaux entre eux. 
                    Nous avons donc configuré le routeur pour définir les différentes sous interfaces ainsi que le NAT permettant l'accès à internet.
                </p>
                <img class="schema" src="../../media/capture_switch_routeur/Capture2_routeur.PNG" alt="plan du réseau ">
            </article>
        </section>
    </body>
</html>
