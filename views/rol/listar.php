<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Roles</title>
</head>
<body>
    <h1>Lista de Roles</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre del Rol</th>
        </tr>
        <?php
        include_once("../../controllers/RolController.php");
        $rolController = new RolController();
        $roles = $rolController->listarRoles();
        foreach ($roles as $rol) {
            echo "<tr>";
            echo "<td>" . $rol->getId() . "</td>";
            echo "<td>" . $rol->getNombre() . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
