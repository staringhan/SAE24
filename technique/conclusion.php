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
        <title>SAE 24 - Conclusion</title>
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
        <section class="contenu">
            <h1 class="titre">Conclusion et retours sur la SAE</h1>
            <article class="texte">
                <h3>Conclusion sur la SAE</h3>
                <p>Nous nous accordons sur le fait que cette Saé à été très instructive et divertissante car nous avons 
                    passé de bons moments, de réflexion et de travail et nous sommes fiers du travail que nous avons produit.
                    Le cahier des charges à été respecté et le projet finalisé.
                </p>
            </article>
            <table>
                <caption>satisfaction du cahier des charges</caption>
                <tr>
                    <th>Exigence</th>
                    <th>Statut</th>
                </tr>
                <tr>
                    <td>Machine virtuelle Windows Server 2019</td>
                    <td>Validé</td>
                </tr>
                <tr>
                    <td>Machine virtuelle Ubuntu</td>
                    <td>Validé</td>
                </tr>
                <tr>
                    <td>Active Directory Domain Services</td>
                    <td>Validé</td>
                </tr>
                <tr>
                    <td>Serveur Asterisk + communication</td>
                    <td>Validé</td>
                </tr>
                <tr>
                    <td>Différents types de téléphones</td>
                    <td>Validé</td>
                </tr>
                <tr>
                    <td>DHCP/DNS</td>
                    <td>Validé</td>
                </tr>
                <tr>
                    <td>Autres services(Web/FTP...)</td>
                    <td>Validé</td>
                </tr>
                <tr>
                    <td>Comptes utilisateurs</td>
                    <td>Validé</td>
                </tr>
                <tr>
                    <td>Packet Tracer</td>
                    <td>Validé</td>
                </tr>
                <tr>
                    <td>Point d'accès Wi-Fi</td>
                    <td>Validé</td>
                </tr>
                <tr>
                    <td>Mise en place du réseau</td>
                    <td>Validé</td>
                </tr>
                <tr>
                    <td>Hyperviseur de type 1</td>
                    <td>Validé</td>
                </tr>
                <tr>
                    <td>Supervision réseau</td>
                    <td>Validé</td>
                </tr>
                <tr>
                    <td>Service Mail</td>
                    <td>Validé</td>
                </tr>
                <tr>
                    <td>Interconnexion entre sites</td>
                    <td>Validé</td>
                </tr>
                <tr>
                    <td>Site vitrine du cabinet</td>
                    <td>Validé</td>
                </tr>
                <tr>
                    <td>Partie privée du site</td>
                    <td>Validé</td>
                </tr>
                <tr>
                    <td>Php d'authentification</td>
                    <td>Validé</td>
                </tr>
                <tr>
                    <td>Base de données (identifiants)</td>
                    <td>Validé</td>
                </tr>
                <tr>
                    <td>Sécurité globale</td>
                    <td>Partiellement validé</td>
                </tr>
                <tr>
                    <td>Gestion du projet (GANTT/TRELLO)</td>
                    <td>Validé</td>
                </tr>
            </table>
        </section>
    </body>
</html>
