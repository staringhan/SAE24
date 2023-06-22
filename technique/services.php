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
        <title>SAE 24 - Services</title>
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
            <h1 class="titre">Présentation des services implémentés</h1>
            <article class="texte">
                <h3>DHCP</h3>
                <p>
                    le service DHCP (Dynamic Host Configuration Protocol). 
                    Le DHCP permet l'allocation automatisée d'adresses IP à partir de pools définis par 
                    l'administrateur réseau. Nous avons utilisé cette fonctionnalité en tandem avec les 
                    VLANs pour créer différents sous-réseaux au sein de notre réseau local (LAN).
                </p>
                <p>
                    Nous avons décidé de mettre en place trois pools d'adresses IP, 
                    chacun répondant à des besoins spécifiques de notre réseau. 
                    Ces trois pools d'adresses ont été nommés : "DATA", "PHONES" et "WIFI".
                </p>
                <p>
                    Le pool "DATA" est conçu pour tous les ordinateurs clients du LAN. 
                    Il permet à chaque machine d'avoir une adresse IP unique dans le réseau, 
                    ce qui facilite la gestion et le suivi des clients sur le réseau. 
                    Les adresses IP de ce pool proviennent de la plage 192.168.180.0/24, 
                    l'adresse 192.168.180.254 étant réservée pour le routeur.
                </p>
                <p>
                    Le pool "PHONES" est dédié aux téléphones IP de notre réseau. 
                    Le fait d'avoir un pool séparé pour les téléphones IP nous permet d'isoler 
                    le trafic téléphonique du reste du réseau, offrant ainsi une meilleure qualité 
                    de service pour les appels voix sur IP. Les adresses IP de ce pool sont issues 
                    de la plage 192.168.190.0/24, l'adresse 192.168.190.254 étant réservée pour le routeur.
                </p>
                <p>
                    Enfin, le pool "WIFI" est spécifiquement réservé aux utilisateurs du 
                    point d'accès Wi-Fi. Cette configuration permet une gestion plus aisée du 
                    trafic Wi-Fi et une meilleure performance du réseau. Les adresses de ce pool 
                    sont dans la plage 192.168.4.0/24, l'adresse 192.168.4.1 étant réservée pour 
                    le point d'accès Wi-Fi.
                </p>
                <p>La mise en place de plusieurs pools d'adresses IP a plusieurs avantages.
                    Premièrement, elle permet une gestion plus granulaire du réseau,
                    chaque type d'appareil ayant sa propre plage d'adresses. Deuxièmement, 
                    elle facilite l'identification des problèmes réseau, car on peut rapidement 
                    déterminer quel type d'appareil est impliqué en fonction de l'adresse IP. 
                    Enfin, elle permet de contrôler le trafic réseau en assignant chaque type 
                    d'appareil à son propre sous-réseau, réduisant ainsi les risques d'interférences 
                    et améliorant la performance du réseau.
                </p>
                <img class="schema" src="../media/capture_serv/1Capture_Services_WS2019.PNG" alt="capture de services ">  
            </article>
            <article class="texte">
                <h3>DNS</h3>
                <p>
                    Après avoir configuré le DHCP, nous nous sommes penchés sur la mise en 
                    place du service DNS (Domain Name System), qui est tout aussi crucial pour 
                    le bon fonctionnement du réseau.
                </p>
                <p>
                    Le DNS est un service qui permet de traduire les adresses IP en noms, 
                    facilitant ainsi la navigation et la gestion du réseau. En d'autres termes, 
                    au lieu de mémoriser des adresses IP potentiellement complexes,
                    on peut simplement utiliser des noms de domaine ou des noms d'hôtes pour identifier 
                    les différents équipements du réseau.
                </p>
                <p>
                    Nous avons configuré plusieurs zones dans notre service DNS pour répondre 
                    aux besoins spécifiques de notre réseau. Plus précisément, nous avons établi 
                    une "Reverse Lookup Zone" et deux "Forward Lookup Zones".
                </p>
                <p>
                    La "Reverse Lookup Zone" a été mise en place pour effectuer la traduction inverse, 
                    c'est-à-dire convertir les adresses IP en noms d'hôtes. Cette zone est particulièrement 
                    utile pour la résolution de problèmes de réseau, car elle permet d'identifier rapidement
                    et facilement les machines à partir de leurs adresses IP. Dans notre cas, la "Reverse Lookup Zone"
                    a été configurée pour traduire toutes les adresses des équipements dans la plage 192.168.180.0/24 
                    en noms d'hôtes.
                </p>
                <p>
                    Les deux "Forward Lookup Zones" ont été configurées pour effectuer la traduction directe, 
                    c'est-à-dire convertir les noms d'hôte en adresses IP. Cette configuration facilite 
                    l'accès aux ressources réseau, car il est généralement plus facile pour les utilisateurs 
                    de se souvenir des noms d'hôtes que des adresses IP. Dans notre configuration, une "Forward
                    Lookup Zone" a été établie pour traduire l'adresse 192.168.1.2 en "sae24", et une autre pour 
                    traduire l'adresse 192.168.1.1 en "bbbgh.fr".
                </p>
                <p>
                    Dans l'ensemble, le DNS joue un rôle crucial dans la simplification de la navigation sur le réseau et la résolution de problèmes de réseau. 
                    La configuration précise des zones DNS contribue grandement à la gestion efficace du réseau. 
                    C'est en raison de l'importance de ces zones que nous avons veillé à une configuration soigneuse et précise pour 
                    répondre aux besoins spécifiques de notre réseau.
                </p>
                <img class="schema" src="../media/capture_serv/2Capture_DHCP_all.PNG" alt="dhcp ">  
            </article>
            <article class="texte">
                <h3>Supervision réseau</h3>
                <p>
                    Au-delà de la mise en place des services DNS et DHCP, j'ai également travaillé à l'installation 
                    et à l'utilisation d'un outil de surveillance et de gestion du réseau appelé Atera. Cet outil 
                    fournit une visibilité en temps réel sur l'état du réseau et offre une variété de fonctionnalités 
                    qui facilitent la gestion du réseau.
                </p>
                <p>
                    <strong>Surveillance à distance :</strong> Avec Atera, il est possible de surveiller et de gérer notre réseau 
                    à partir de n'importe quel endroit disposant d'une connexion Internet. Cette flexibilité est 
                    essentielle, notamment lorsque des interventions sur le réseau sont nécessaires en dehors 
                    des heures de travail normales ou en situation de télétravail.
                </p>
                <p>
                    <strong>Alertes en temps réel : </strong>Atera dispose d'un système d'alertes en temps réel qui 
                    nous informe immédiatement en cas de problèmes potentiels sur le réseau. Ces alertes peuvent 
                    concerner diverses situations, telles que des défaillances d'équipement, une utilisation 
                    excessive de la bande passante ou la détection d'activités suspectes, ce qui nous permet de 
                    réagir rapidement pour résoudre ces problèmes.
                </p>
                <p>
                    <strong>Rapports détaillés : </strong>Atera peut générer une variété de rapports sur l'état du réseau. 
                    Ces rapports peuvent inclure des informations sur l'utilisation de la bande passante, 
                    l'état des équipements, l'historique des alertes et bien d'autres données pertinentes. 
                    Ces informations peuvent être utiles pour comprendre les tendances à long terme, planifier
                    les mises à niveau du réseau et identifier les domaines qui nécessitent une attention particulière.
                </p>
                <p>
                    <strong>Gestion des correctifs et des mises à jour : </strong>Atera offre la possibilité de gérer 
                    les correctifs et les mises à jour des systèmes et des applications à partir d'une interface unique. 
                    Cela simplifie grandement le processus de maintenance des équipements et garantit que tous les 
                    systèmes sont toujours à jour.
                </p>
                <p>
                    <strong>Automatisation des tâches : </strong>Enfin, Atera peut automatiser une variété de tâches, 
                    telles que la réinitialisation des mots de passe, la création de tickets de support et 
                    l'installation de logiciels. Cela permet de gagner un temps précieux et d'assurer une gestion plus efficace du réseau.
                </p>
                <p>
                    Dans l'ensemble, Atera est un outil puissant qui facilite grandement la gestion et la surveillance de notre réseau. 
                    Son utilisation nous a permis de maintenir notre réseau en bon état de fonctionnement et d'identifier et de résoudre 
                    rapidement les problèmes potentiels.
                </p>
                <img class="schema" src="../media/capture_serv/4Atera_supervision.PNG" alt="image Atera supervision ">  
            </article>
            <article class="texte">
                <h3>Active Directory Domain System</h3>
                <p>
                    L'une des autres tâches importantes que j'ai menées pendant cette période a été l'installation et la configuration des 
                    Services de domaine Active Directory (ADDS). L'ADDS est un service de Microsoft qui permet une gestion centralisée des 
                    ressources et des utilisateurs dans un réseau. Cette configuration a impliqué plusieurs tâches clés, y compris la gestion
                    des utilisateurs, des groupes et des profils.
                </p>
                <p>
                    <strong>Gestion des utilisateurs : </strong>La première étape dans la mise en place de l'ADDS a été la création et 
                    la gestion des comptes utilisateurs. Cela implique la définition des identifiants de connexion pour chaque utilisateur, 
                    la mise en place de mots de passe sécurisés et la définition des permissions appropriées pour chaque utilisateur. 
                    Cette gestion centralisée des utilisateurs facilite l'administration du réseau, car tous les comptes utilisateurs 
                    peuvent être gérés à partir d'un emplacement central.
                </p>
                <p>
                    <strong>Configuration des profils : </strong>Les profils d'utilisateurs sont une autre composante clé de l'ADDS. 
                    Un profil d'utilisateur contient des informations sur les préférences et les configurations spécifiques d'un 
                    utilisateur, telles que les paramètres de bureau, les connexions réseau, les scripts de démarrage, etc. 
                    J'ai travaillé à la configuration de ces profils pour chaque utilisateur, assurant ainsi une expérience 
                    utilisateur personnalisée et cohérente, peu importe sur quel poste de travail l'utilisateur se connecte
                </p>
                <p>
                    L'installation et la configuration de l'ADDS ont joué un rôle crucial dans la gestion efficace de notre réseau. 
                    Cette configuration a permis une administration centralisée du réseau, une meilleure gestion des permissions 
                    et une expérience utilisateur cohérente et personnalisée pour chaque utilisateur.
                </p>
                <img class="schema" src="../media/capture_serv/5Capture_User.PNG" alt=" capture des users ">  
                <img class="schema" src="../media/capture_serv/6Capture_computer.PNG" alt="capture des ordis ">  
                <img class="schema" src="../media/capture_serv/7Capture_profile_file.PNG" alt="capture des dossiers de profil ">  
                <img class="schema" src="../media/capture_serv/8Capture_profile.PNG" alt="capture des profils ">  
            </article>
            <article class="texte">
                <h3>xampp</h3>
                <p> Nous avons utilisé Xampp pour mettre en place plusieurs servicess.</p>
                <h4>FTP</h4>
                <p>
                    Le service FTP est un service de transfert de fichiers. Il permet de transférer des fichiers d'un ordinateur à un autre via un réseau TCP/IP. 
                    Pour mettre en place ce service, nous avons utilisé XAMPP et son service ProFTPD.
                </p>
                <img class="schema" src="../media/capture_switch_routeur/ftpuse.PNG" alt="capture ftp filezilla ">  
                <h4>WEB</h4>
                <p>
                    Nous avons mis en place un serveur web avec le service Apache. Ce service permet de créer un site web. Nous l'utilisons notamment pour héberger notre site web. 
                    De la même manière qu'avec le FTP, nous avons utilisé XAMPP pour mettre en place ce service.
                </p>
                <img class="schema" src="../media/capture_switch_routeur/xampp.PNG" alt="capture xampp start">  
            </article>
        </section>
    </body>
</html>
