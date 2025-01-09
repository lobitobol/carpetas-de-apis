<?php
$host = "bmarzf1a8kkowhzkfljx-mysql.services.clever-cloud.com"; // Tu host de Clever Cloud
$db_name = "TU_NOMBRE_DE_BASE_DE_DATOS"; // Nombre de la base de datos
$username = "TU_USUARIO"; // Usuario de la base de datos
$password = "TU_CONTRASEÑA"; // Contraseña de la base de datos

try {
    $conn = new PDO("mysql:host=$host;dbname=$db_name;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error al conectar: " . $e->getMessage());
}
?>
