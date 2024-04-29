<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Rol</title>
</head>
<body>
    <h1>Eliminar Rol</h1>
    <?php
    // Obtener el ID del rol a eliminar
    $rolId = $_GET['id'];

    // Incluir el controlador
    include_once("../../controllers/RolController.php");

    // Instanciar el controlador de rol
    $rolController = new RolController();

    // Verificar si se ha enviado el formulario de confirmación
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Verificar si se ha confirmado la eliminación
        if ($_POST['confirmacion'] == 'si') {
            // Eliminar el rol
            if ($rolController->eliminarRol($rolId)) {
                echo "<p>Rol eliminado correctamente.</p>";
            } else {
                echo "<p>Error al eliminar el rol.</p>";
            }
        } else {
            echo "<p>Eliminación cancelada.</p>";
        }
    } else {
        // Mostrar el formulario de confirmación
        echo "<p>¿Estás seguro de que deseas eliminar este rol?</p>";
        echo "<form action='eliminar.php?id=$rolId' method='POST'>";
        echo "<input type='hidden' name='confirmacion' value='si'>";
        echo "<button type='submit'>Sí, eliminar</button>";
        echo "</form>";
    }
    ?>
</body>
</html>
