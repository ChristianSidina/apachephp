<?php
//debug
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Définissez les informations de connexion à la base de données
$host = "db"; // Utilisez le nom du conteneur MySQL (dans ce cas, 'db') au lieu de 'localhost'
$dbname = "mysqldb";
$username = "root";
$password = "mysqlrootpass";

// Créez une nouvelle connexion à la base de données
$conn = new mysqli($host, $username, $password, $dbname);

// Vérifiez si la connexion a réussi
if ($conn->connect_error) {
    die("Erreur de connexion à la base de données : " . $conn->connect_error);
}

// Définissez les options de connexion si nécessaire (par exemple : $conn->set_charset("utf8"))

// Retournez la connexion
return $conn;
?>
