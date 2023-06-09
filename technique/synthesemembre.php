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
        <title>SAE 24 - Synthèse membres</title>
        <meta charset="utf-8">
        <meta name="author" content="IcpOcc">
        <meta name="description" content="SAE 24">
        <meta name="keywords" content="HTML, CSS" >
        <link rel="stylesheet" type="text/css" href="../styles/projet.css" media="screen">
        <link rel="stylesheet" type="text/css" href="../styles/tableau.css" media="screen">
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <link rel="shortcut icon" href="../media/VLOGOgreen.ico" type="image/x-icon">
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
        <main>
            <section class="contenu">
                <h1 class="titre">Synthèse personnelle de chaque membre</h1>
                <table>
                    <tr>
                        <th>Membre</th>
                        <th>Tache</th>
                    </tr>
                    <tr>
                        <td>Jean-Noël BONVENT</td>
                        <td>Réseau</td>
                    </tr>
                    <tr>
                        <td>Raphaël GIRARD</td>
                        <td>Services</td>
                    </tr>
                    <tr>
                        <td>Daniel HALIDI</td>
                        <td>Site WEB</td>
                    </tr>
                    <tr>
                        <td>Axel BESSAIAH</td>
                        <td>Téléphonie</td>
                    </tr>
                    <tr>
                        <td>Evann BELOT</td>
                        <td>PHP et gestion de projet</td>
                    </tr>
                </table>
                <article class="texte">
                    <h3>Daniel Halidi</h3>
                    <p>
                        Pour voir la synthèse personnelle de Daniel Halidi à propos du projet, veuillez cliquer ci-dessous:<br>
                    </p>
                    <a class="button" href="syntheses/HALIDI.pdf" target="_blank">Synthèse HALIDI</a>
                </article>
                <article class="texte">
                    <h3>Axel Bessaiah</h3>
                    <p>
                        Pour voir la synthèse personnelle de Axel Bessaiah à propos du projet, veuillez cliquer ci-dessous:<br> 
                    </p>
                    <a class="button" href="syntheses/BESSAIAH.pdf" target="_blank">Synthèse BESSAIAH</a>
                </article>
                <article class="texte">
                    <h3>Raphaël Girard</h3>
                    <p>
                        Pour voir la synthèse personnelle de Raphael Girard à propos du projet, veuillez cliquer ci-dessous:<br>
                    </p>
                    <a class="button" href="syntheses/GIRARD.pdf" target="_blank">Synthèse GIRARD</a>
                </article>
                <article class="texte">
                    <h3>Jean-Noël Bonvent</h3>
                    <p>
                        Pour voir la synthèse personnelle de Jean-Noel Bonvent à propos du projet, veuillez cliquer ci-dessous:
                    </p>
                    <a class="button" href="syntheses/BONVENT.pdf" target="_blank">Synthèse BONVENT</a>
                </article>
                <article class="texte">
                    <h3>Evann Belot</h3>
                    <p>
                        Pour voir la synthèse personnelle de Evann Belot à propos du projet, veuillez cliquer ci-dessous:<br> 
                    </p>
                    <a class="button" href="syntheses/BELOT.pdf" target="_blank">Synthèse BELOT</a> 
                </article>
            </section>
        </main>
    </body>
</html>
