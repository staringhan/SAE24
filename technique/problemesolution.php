<?php
    //check session to see if the user is connected as an administrator with the right login and password
    session_start();
    if (!isset($_SESSION['admin']) || $_SESSION['admin'] !== true) {
            // sebd ab alert saying that the user is not connected and redirect to index.php;
            echo "<script>alert('Vous n\'êtes pas connecté en tant qu\'administrateur')</script>";
            header('Location: ../index.html');
        }
    ?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>SAE 24 - Problemes/solutions</title>
        <meta charset="utf-8">
        <meta name="author" content="IcpOcc">
        <meta name="description" content="SAE 24">
        <meta name="keywords" content="HTML, CSS" >
        <link rel="stylesheet" type="text/css" href="../styles/projet.css" media="screen">
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <link rel="shortcut icon" href="../media/VLOGOgreen.ico" type="image/x-icon">
    </head>
    <body>
        <nav class="navbar">
            <div class="logo">
                <a href="../media/vitaltouchblack.png">
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
            <h1 class="titre">Synthèse des problèmes rencontrés et solutions apportées</h1>
            <article class="texte">
                <h3>Difficultés + solutions lors de la mise en place du réseau</h3>
                <p>
                    L'installation du réseau n'a pas présenté de difficultés particulières. 
                    La mise en place du NAT (Network Address Translation) a été une nouvelle expérience qui s'est déroulée sans problèmes.
                </p>
            </article>
            <article class="texte">
                <h3>Difficultés + solutions lors de la mise en place des services</h3>
                <p>
                    La majorité des services ont pu être mis en place sans trop de difficultés, mais il y a quand même eu quelques problèmes,
                    notamment pour le service de messagerie. En effet, nous avons rencontré plusieurs problèmes de configuration qui ont 
                    entraîné une perte de temps, mais nous avons réussi à les résoudre sans difficultés.
                </p>
            </article>
            <article class="texte">
                <h3>Difficultés + solutions lors de la mise en place de la téléphonie</h3>
                <p>Au moment de mettre en place Thunderbird, le service de messagerie, nous avons rencontré 
                    plusieurs problèmes pour le faire fonctionner. Bien que EXIM4 et POP3 aient déjà été configurés 
                    et mis en place, Thunderbird refusait de se connecter et de récupérer les e-mails. Le problème 
                    provenait du fait que je n'avais pas créé les utilisateurs sur la machine. Une fois que les
                    utilisateurs ont été créés, Thunderbird a fonctionné correctement.
                </p>
            </article>
            <article class="texte">
                <h3>Difficultés + solutions lors de la mise en place du site WEB</h3>
                <p>Nous avons rencontré des problèmes lors de la validation du site car nous avons 
                    utilisé un grand nombre de sections sans titre. En effet, pour créer les conteneurs
                    de cartes de présentation du personnel, nous avons utilisé des sections alors 
                    qu'il aurait été plus approprié d'utiliser des div. Si l'on se réfère à la 
                    définition d'une section, on constate qu'elle devrait contenir une idée distincte, 
                    tandis que les conteneurs en question n'en comportent aucune. En utilisant des balises
                    "article", nous rencontrons le même problème, il est donc préférable d'utiliser 
                    définitivement des balises "div". Malheureusement, il n'existe pas de balise
                    sémantique spécifique pour définir ces conteneurs de manière à ce que le navigateur
                    comprenne précisément leur nature. Pour remédier à ces problèmes de balises, 
                    nous avons utilisé des classes HTML afin que les modifications de la balise 
                    n'affectent pas l'apparence visuelle. Dans la feuille de style CSS, 
                    nous faisons référence aux classes en utilisant le symbole "." devant le nom (par exemple : .titre). 
                </p>
            </article>
            <article class="texte">
                <h3>Difficultés + solutions lors de la gestion du projet de la SAé 24</h3>
                <p>
                    La gestion de projet présente quelques défis, notamment en ce qui concerne la répartition des tâches. 
                    Réfléchir à qui doit faire quoi peut parfois être compliqué, mais avec une bonne organisation, cela devient facile.
                </p>
            </article>
        </section>
    </body>
</html>
