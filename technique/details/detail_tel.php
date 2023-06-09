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
        <title>SAE 24 - Detail téléphonie</title>
        <meta charset="utf-8">
        <meta name="author" content="IcpOcc">
        <meta name="description" content="SAE 24, projet">
        <meta name="keywords" content="HTML, CSS">
        <link rel="stylesheet" type="text/css" href="../../styles/projet.css" media="screen">
        <link rel="stylesheet" type="text/css" href="../styles/tableau.css" media="screen">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <link rel="shortcut icon" href="../../media/VLOGOgreen.ico" type="image/x-icon">
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
                    <a href="../telephonie.php">Retour</a>
                </li>
                <li class="element-liste">
                    <a href="../../php/deconnexion.php">Déconnexion</a>
                </li>
            </ul>
        </nav>
        <section class="contenu">
            <h1 class="titre">Présentation détaillée de la partie téléphonie</h1>
            <article class="texte">
                <h3>Extensions.conf</h3>
                <p>Afin de pouvoir réaliser des appels et ainsi qu’une mise en attente ou un t
                    ransfert d’appel il faut modifier le fichier sur le serveur asterisk intitulé 
                    “extensions.conf” dans lequel on va rajouter autant de numéros avec les 
                    fonctionnalités que de téléphone présent dans le réseau.

                </p>
                <img class="schema" src="../../media/capture_tel/1Capture.PNG" alt="config telephone ">
            </article>
            <article class="texte">
                <h3>SIP.conf</h3>
                <p>Afin de pouvoir ensuite ajouter un téléphone dans le serveur asterisk avec un 
                    numéro, mdp, codec etc il faut rajouter une configuration de téléphone dans le 
                    fichier SIP.conf dans le serveur asterisk.
 
                </p>
                <img class="schema" src="../../media/capture_tel/2SIP.PNG" alt="config telephone ">
            </article>
            <article class="texte">
                <h3>SIP SHOW PEERS</h3>
                <p>Une fois les modifications apportées sur les différents fichiers ainsi que 
                    chaque téléphone et bien configurés il faut redémarrer le serveur afin que 
                    les changements soient bien appliqués puis à l'aide de la commande Sip Show 
                    Peers vous pourrez vérifier que chaque téléphone est bien connecté au serveur asterisk.
 
                </p>
                <img class="schema" src="../../media/capture_tel/3sipshowpeer.PNG" alt="config telephone ">
            </article>
            <article class="texte">
                <h3>Groupement</h3>
                <p>Afin de réaliser un groupement d’appel il faut créer d'autres numéros en 
                    modifiant les fichier SIP.conf et extensions.conf dans lesquels il faut 
                    préciser que lors d’un appel ,ici des numéros 210 et 211, plusieurs téléphones 
                    doivent sonner ou en même temps ou dans un certain ordre.
                </p>
                <img class="schema" src="../../media/capture_tel/4groupement.PNG" alt="config telephone ">
            </article>
            <article class="texte">
                <h3>IVR</h3>
                <p>L’IVR va permettre de créer un standard lorsque l’on appelle le numéro 221 ou une voix
                     va nous indiquer sur quelle chiffre appuyer afin de pouvoir appeler une certaine personne. 
                     La configuration de l’IVR se fait une fois de plus sur les fichiers SIP.conf et extensions.conf .  
                </p>
                <img class="schema" src="../../media/capture_tel/5IVR.PNG" alt="config telephone ">
                <img class="schema" src="../../media/capture_tel/6IVR2.PNG" alt="config telephone ">

            </article>
            
        </section>
    </body>
</html>
