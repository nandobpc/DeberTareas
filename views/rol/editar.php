<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Rol</title>
</head>
<body>
    <h1>Editar Rol</h1>
    <?php
    // Obtener el ID del rol a editar
    $rolId = $_GET['id'];

    // Incluir el controlador
    include_once("../../controllers/RolController.php");

    // Instanciar el controlador de rol
    $rolController = new RolController();

    // Obtener información del rol por su ID
    $rol = $rolController->obtenerRolPorId($rolId);

    // Verificar si se encontró el rol
    if ($rol) {
        echo "<form action='editar.php' method='POST'>";
        echo "<input type='hidden' name='id' value='" . $rol->getId() . "'>";
        echo "<label for='nombre'>Nombre del Rol:</label>";
        echo "<input type='text' id='nombre' name='nombre' value='" . $rol->getNombre() . "' required>";
        echo "<button type='submit'>Guardar Cambios</button>";
        echo "</form>";
    } else {
        echo "<p>No se encontró el rol.</p>";
    }
    ?>
</body>
</html>

