<?php
// Incluir la conexión
require 'db_connection.php';

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
