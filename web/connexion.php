<!DOCTYPE html>
<html lang="fr">
    <?php
        //verification of the existing connection, if the user is already connected, redirect to admin.php or gestionnaire.php depending on the user type
        session_start();
        if (isset($_SESSION['admin']) && $_SESSION['admin'] === true) {
          header('Location: projet.php');
        }   
        ?>
    <head>
        <meta charset="utf-8">
        <title>VitalTouch - Page de connexion</title>
        <meta name="author" content="IcpOcc">
        <meta name="description" content="SAE 24, Accueil">
        <meta name="keywords" content="HTML, CSS">
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
        <link rel="stylesheet" type="text/css" href="../styles/connexion.css" media="screen">
        <link rel="stylesheet" type="text/css" href="../styles/style.css" media="screen">
        <link rel="shortcut icon" href="../media/VLOGOgreen.ico" type="image/x-icon">
    </head>
    <body>
        <header>
            <nav class="navbar">
                <div class="logo">
                    <a href="../index.html">
                    <img class="iconelogo" src="../media/vitaltouchblack.png" alt="Logo">
                    </a>
                </div>
                <ul class="nav-liste" id="navi-liste">
                    <li class="element-liste">
                        <a href="../index.html">Retour</a>
                    </li>
                </ul>
            </nav>
        </header>
        <div class="wrapper">
            <div id="formContenu">
                <h2 class="active">Se connecter</h2>
                <div class="image">
                    <img src="../media/VLOGOgreen.png" id="icon" alt="Logo VitalTouch">
                </div>
                <form action="../php/login.php" method="post">
                    <input type="text" id="login" name="login" placeholder="Identifiant">
                    <input type="password" id="password" name="password" placeholder="Mot de passe">
                    <input type="submit" class="submit" value="Connexion">
                </form>
            </div>
        </div>
    </body>
</html>
