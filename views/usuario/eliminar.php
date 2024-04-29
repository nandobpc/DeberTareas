<?php
// Incluir el archivo de conexión y la clase Usuario
require_once '../../config/conexion.php';
require_once '../../models/Usuario.php';

// Verificar si se recibió un ID de usuario a eliminar
if (isset($_GET['id'])) {
    $idUsuario = $_GET['id'];

    // Verificar si la conexión está establecida
    if ($conexion) {
        // Obtener el usuario por su ID
        $usuario = Usuario::obtenerUsuarioPorId($conexion, $idUsuario);

        // Verificar si se encontró el usuario
        if ($usuario) {
            // Aquí puedes ejecutar la lógica para eliminar el usuario
            // Por ejemplo, puedes mostrar un mensaje de confirmación o ejecutar una consulta SQL para eliminar el usuario de la base de datos
            echo "Usuario encontrado: " . $usuario->getNombre();
        } else {
            echo "Usuario no encontrado.";
        }
    } else {
        echo "La conexión ha fallado.";
    }
} else {
    echo "No se proporcionó un ID de usuario.";
}
?>
