<?php
include_once '../../controlador/TareaController.php';
include_once '../../conexion.php';

$tarea_controller = new TareaController($conexion);

if ($_SERVER["REQUEST_METHOD"] == "POST" || $_SERVER["REQUEST_METHOD"] == "GET") {
    // Verifica si se han enviado los datos del formulario
    if (isset($_REQUEST['id_tarea']) && isset($_REQUEST['id_usuario'])) {
        // Obtiene los datos del formulario
        $id_tarea = $_REQUEST['id_tarea'];
        $id_usuario = $_REQUEST['id_usuario'];

        // Verifica si los datos recibidos son válidos
        if (!empty($id_tarea) && !empty($id_usuario)) {
            // Intenta asignar la tarea al usuario
            $resultado = $tarea_controller->asignarTarea($id_tarea, $id_usuario);

            if ($resultado) {
                // Tarea asignada correctamente
                echo "Tarea asignada correctamente.";
            } else {
                // Error al asignar la tarea
                echo "Error al asignar la tarea.";
            }
        } else {
            // Muestra un mensaje de error si faltan datos
            echo "Error: Debes completar todos los campos del formulario.";
        }
    } else {
        // Si no se han enviado los datos del formulario, muestra un mensaje de error
        echo "Error: Debes enviar los datos del formulario.";
    }
} else {
    // Si el método de solicitud no es POST o GET, muestra un mensaje de error
    echo "Error: Método de solicitud no válido.";
}
?>
