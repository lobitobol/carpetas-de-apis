<?php
$host = "bmarzf1a8kkowhzkfljx-mysql.services.clever-cloud.com"; // Tu host de Clever Cloud
$db_name = "bmarzf1a8kkowhzkfljx"; // Nombre de la base de datos
$username = "ubapbyqa0bspmix0"; // Usuario de la base de datos
$password = "7THw0vE3QnUdCOcZJRjF"; // Contraseña de la base de datos

try {
    $conn = new PDO("mysql:host=$host;dbname=$db_name;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error al conectar: " . $e->getMessage());
}
?>
