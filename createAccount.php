<?php
// Infos de connexion MySQL
$servername = "localhost";
$db_user = "louisducourneau_user-db-social";
$db_password = "haMyuHr8Oa";
$dbname = "louisducourneau_mini-social";

// Connexion
$conn = new mysqli($servername, $db_user, $db_password, $dbname);

// Données du formulaire
$username = $_POST['user'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

// Requête préparée
$stmt = $conn->prepare("INSERT INTO `users` (username, email, password) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $username, $email, $password);

// Exécution
if ($stmt->execute()) {
    header("Location: login.php");
    exit();
} else {
    echo "Erreur lors de l'inscription";
}

// Fermeture
$stmt->close();
$conn->close();
?>