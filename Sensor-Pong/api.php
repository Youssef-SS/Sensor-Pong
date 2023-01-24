<?php
header("Content-Type: application/json; charset=UTF-8");

// Connexion à la base de données
$host = "hostname";
$user = "username";
$password = "password";
$dbname = "dbname";
$con = mysqli_connect($host, $user, $password, $dbname);

// Vérification de la connexion
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Requête pour récupérer les informations
$sql = "SELECT * FROM table_name";
$result = mysqli_query($con, $sql);

// Stockage des résultats dans un tableau
$rows = array();
while($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
}

// Encodage des résultats en JSON et envoi de la réponse
echo json_encode($rows);

// Fermeture de la connexion
mysqli_close($con);
?>
