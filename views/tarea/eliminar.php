<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Tarea</title>
</head>
<body>
    <h1>Eliminar Tarea</h1>
    <?php
    // Verifica si se ha enviado el ID de la tarea a eliminar
    if (isset($_GET['id'])) {
        $tareaId = $_GET['id'];

        // Requiere el archivo de conexión y la clase Tarea
        require_once '../../config/conexion.php';
        require_once '../../models/Tarea.php';

        // Obtiene la tarea por su ID
        $tarea = Tarea::obtenerTareaPorId($tareaId);

        // Verifica si se encontró la tarea
        if ($tarea) {
            // Verifica si se ha confirmado la eliminación de la tarea
            if (isset($_POST['confirmar']) && $_POST['confirmar'] === 'SI') {
                // Elimina la tarea de la base de datos
                $tarea->eliminar();
                echo '<p>La tarea se eliminó correctamente.</p>';
            } else {
                // Muestra un mensaje de confirmación antes de eliminar
                echo '<p>¿Estás seguro de que deseas eliminar la tarea "' . $tarea->getDescripcion() . '"?</p>';
                echo '<form action="" method="POST">';
                echo '<input type="submit" name="confirmar" value="SI">';
                echo '<input type="button" value="NO" onclick="window.location=\'listar.php\'">';
                echo '</form>';
            }
        } else {
            echo '<p>No se encontró la tarea especificada.</p>';
        }
    } else {
        echo '<p>No se ha especificado un ID de tarea.</p>';
    }
    ?>
</body>
</html>
