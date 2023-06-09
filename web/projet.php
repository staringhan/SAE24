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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
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
                    <a href="../php/deconnexion.php">Déconnexion</a>
                </li>
            </ul>
        </nav>
        <section class="animate__animated animate__fadeIn contenu">
            <h1 class="titre">Bienvenue sur la partie projet "SAE 24"</h1>
            <article class="texte">
                <h2>Contexte de la SAé 24</h2>
                <p>
                Dans cette SAE, nous sommes chargés de mettre en place un réseau pour un cabinet médical. 
                Ce cabinet est composé de six personnes : trois kinésithérapeutes, un dentiste et un médecin généraliste. 
                Pour mener à bien ce projet, nous devrons mobiliser toutes les ressources que nous avons acquises jusqu'à présent.
                </p>
            </article>
            <article class="texte">
                <h2>Qu'est ce qu'IcpOcc?</h2>
                <p>La société IcpOcc est spécialisée dans la fourniture (conception, installation, configuration
                    et maintenance) du système d'information des cabinets paramédicaux d'Occitanie. VitalTouch à fait
                    appel à la IcpOcc afin de mettre en place tout le système d'information (S.I.) du cabinet. De plus, la 
                    société intervient également en tant qu'expert/conseiller sur la cybersécurité du S.I.
                    Vous trouverez ici tous les éléments sur la configuration et la mise en place du réseau sur le parc informatique,
                    la mise en place du réseau téléphonique du cabinet ainsi que quelques éléments utiles à la réalisation
                    du projet.
                    Afin de réaliser le site Web du cabinet paramédical Vital Touch, la société IcpOcc  à eu recours à 
                    plusieurs éléments techniques tels que : 
                </p>
                <ul>
                    <li>la réalisation d'un diagramme de Gantt et d'un tableau Trello pour la gestion de projet </li>
                    <li>L'utilisation de GitHub afin de permettre le travail en collaboration pour les membres de l'équipe</li>
                    <li>La création d'un plan pour le réseau du système d'information</li>
                    <li>La mise en plage d'un plan d'adressage pour la téléphonie</li>
                    <li>La conception d'une base de données pour les informations de connexion</li>
                </ul>
            </article>
            <div class="rectangleconteneur">
                <div class="rectangle">
                    <img class="schema" src="../media/logophone.jpeg" alt="logo téléphone ">
                    <section class="rectangletexte">
                        <h3>Téléphonie</h3>
                        <a href="../technique/telephonie.php"  >Téléphonie</a>
                    </section>
                </div>
                <div class="rectangle">
                  <img class="schema" src="../media/logoservices.jpeg" alt="logo services ">
                  <section class="rectangletexte">
                      <h3>Services</h3>
                      <a href="../technique/services.php">Détails des services implémentés</a>
                  </section>
              </div>
                <div class="rectangle">
                    <img class="schema" src="../media/logonetwork.jpeg" alt="logo reseau ">
                    <section class="rectangletexte">
                        <h3>Réseau</h3>
                        <a href="../technique/reseau.php" >Réseau du système d'information</a>
                    </section>
                </div>
                <div class="rectangle">
                    <img class="schema" src="../media/logogantt.jpeg" alt="logo gannt ">
                    <section class="rectangletexte">
                        <h3>Diagramme de Gantt</h3>
                        <a href="../technique/gantt.php">Diagramme de GANTT</a>
                    </section>
                </div>
                <div class="rectangle">
                    <img class="schema" src="../media/logotrello.jpeg" alt="Logo trelle ">
                    <section class="rectangletexte">
                        <h3>Tableau Trello</h3>
                        <a href="https://trello.com/invite/b/8ZsIuYQj/ATTId7e9aee2d8d2492e9474aa7f486e10a45003CF5C/sae-24" target="_blank">Lien vers le tableau Trello</a>
                    </section>
                </div>
                <div class="rectangle">
                    <img class="schema" src="../media/logogithub.jpeg" alt="logo github ">
                    <section class="rectangletexte">
                        <h3>Outil collaboratif utilisé</h3>
                        <a href="https://github.com/staringhan/SAE24" target="_blank">Accès au GitHub</a>
                    </section>
                </div>
                <div class="rectangle">
                    <img class="schema" src="../media/logomembres.jpeg" alt="logo membres ">
                    <section class="rectangletexte">
                        <h3>Synthèse par membre</h3>
                        <a href="../technique/synthesemembre.php">Travail réalisé par chaque membre de l'équipe</a>
                    </section>
                </div>
                <div class="rectangle">
                    <img class="schema" src="../media/logoprobleme.jpeg" alt="logos problemes ">
                    <section class="rectangletexte">
                        <h3>Problèmes + Solutions</h3>
                        <a href="../technique/problemesolution.php" >Problèmes rencontrés et solutions rencontrées</a>
                    </section>
                </div>
                <div class="rectangle">
                    <img class="schema" src="../media/logoconclusion.jpeg" alt="logo conclusion ">
                    <section class="rectangletexte">
                        <h3>Conclusion</h3>
                        <a href="../technique/conclusion.php" >Conclusion sur la SAE et retour sur la satisfaction du cahier des charges</a>
                    </section>
                </div>
                <div class="rectangle">
                    <img class="schema" src="../media/logovalidation.jpeg" alt="logo Validation ">
                    <section class="rectangletexte">
                        <h3>Validation</h3>
                        <a href="../technique/validation.php" >Validation des pages HTML et CSS</a>
                    </section>
                </div>
            </div>
        </section>
    </body>
</html>
