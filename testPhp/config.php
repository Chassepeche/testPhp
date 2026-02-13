<?php
//connection BDD

$db_name = "louisducourneau_testPHP";
$db_username = "louisducourneau_phpUser";
$db_password = "t%^Rw{NFfC0;";
$db_servername = "localhost";

//connexion BDD
$conn = new mysqli($db_servername, $db_username, $db_password, $db_name);

/*
//ecriture de la requete sql
$sql = "SELECT ID, username, password, sudo FROM users";

//envoi de la requete
$result = $conn->query($sql);

//decomposition de la reponse dans un tableau
$row = $result->fetch_assoc();

//affichage d'un element du tableau
echo $row['username'];
*/
?>