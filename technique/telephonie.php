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
        <title>SAE 24 - Projet</title>
        <meta charset="utf-8">
        <meta name="author" content="IcpOcc">
        <meta name="description" content="SAE 24, projet">
        <meta name="keywords" content="HTML, CSS">
        <link rel="stylesheet" type="text/css" href="../styles/projet.css" media="screen">
        <link rel="stylesheet" type="text/css" href="../styles/tableau.css" media="screen">
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
                    <a href="../php/deconnexion.php">Déconnexion</a>
                </li>
            </ul>
        </nav>
        <section class="contenu">
            <h1 class="titre">Présentation globale du réseau téléphonique</h1>
            <article class="texte">
                <h3>Téléphonie</h3>
                <p>
                    Nous avons mis en place la téléphonie réseau avec un switch Netgear qui contient 6 téléphones IP 
                    reliés par des câbles Ethernet, ainsi qu'un smartphone connecté via le Wi-Fi. 
                    Tous les téléphones sont connectés à un serveur Asterisk. La représentation de l'architecture est la suivante :
                </p>
                <img class="schema" src="../media/schematel.jpeg" alt="photo représentative de la téléphonie réseau ">
                <a class="button" href="./details/detail_tel.php">
                Cliquez pour plus de détails sur l'installation
                </a>
            </article>
            <table>
                <caption>Plan de numérotation des téléphones</caption>
                <tr>
                    <th>Nom du Téléphone</th>
                    <th>Numéro de tél.</th>
                </tr>
                <tr>
                    <td>Secrétaire</td>
                    <td>202 / 206</td>
                </tr>
                <tr>
                    <td>Dentiste</td>
                    <td>201</td>
                </tr>
                <tr>
                    <td>Généraliste</td>
                    <td>203</td>
                </tr>
                <tr>
                    <td>Kiné 1</td>
                    <td>204</td>
                </tr>
                <tr>
                    <td>Kiné 2</td>
                    <td>205</td>
                </tr>
                <tr>
                    <td>Kiné 3</td>
                    <td>200</td>
                </tr>
                <tr>
                    <td>Les kinés</td>
                    <td>210</td>
                </tr>
                <tr>
                    <td>Secrétaire/ Medecin généraliste/ dentiste </td>
                    <td>211</td>
                </tr>
                <tr>
                    <td>I.V.R.</td>
                    <td>221</td>
                </tr>
            </table>
        </section>
    </body>
</html>
