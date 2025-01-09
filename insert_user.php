<?php
// Incluir la conexión
require 'db_connection.php';

// Verificar si el parámetro id_usuario está presente en la solicitud
if (isset($_POST['id_usuario'])) {
    $id_usuario = $_POST['id_usuario'];

    try {
        // Preparar la consulta
        $stmt = $conn->prepare("INSERT INTO usuarios (id_usuario) VALUES (:id_usuario)");
        $stmt->bindParam(':id_usuario', $id_usuario);

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
