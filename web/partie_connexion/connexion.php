<?php
// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sae24";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Erreur de connexion à la base de données : " . mysqli_connect_error());
}

// Vérification du formulaire de connexion
if (isset($_POST['username']) && isset($_POST['password'])) {
    $login = $_POST['username'];
    $password = $_POST['password'];

    // Requête pour vérifier si les données correspondent à la table 'batiments'
    $query = "SELECT * FROM login WHERE log = '$login' AND mdp = '$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result)  > 0 ) {
        // Utilisateur de type 'gestionnaire' identifié
        session_start();
        $_SESSION['admin'] = true;
        header('Location: admin.php');
        
    }

}

// Fermeture de la connexion à la base de données
mysqli_close($conn);
?>
