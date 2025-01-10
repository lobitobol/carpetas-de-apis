<?php
// Incluir la conexión
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



// Verificar si el parámetro id_usuario está presente en la solicitud
if (isset($_POST['id_user'])) {
    $id_user = $_POST['id_user'];



    try {
        // Preparar la consulta
        $stmt = $conn->prepare("INSERT INTO usuarios (id_user) VALUES (:id_user)");
        $stmt->bindParam(':id_user', $id_user);

        // Ejecutar la consulta
        if ($stmt->execute()) {
            echo json_encode(["status" => "success", "message" => "Usuario insertado con éxito"]);
        } else {
            echo json_encode(["status" => "error", "message" => "No se pudo insertar el usuario"]);
        }
    } catch (PDOException $e) {
        echo json_encode(["status" => "error", "message" => "Error: " . $e->getMessage()]);
    }
} else {
    echo json_encode(["status" => "error", "message" => "Parámetro 'id_usuario' no recibido"]);
}
?>
