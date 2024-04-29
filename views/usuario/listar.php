<?php
// Incluir el archivo de conexión y la clase Usuario
require_once '../../config/conexion.php';
require_once '../../models/Usuario.php';

// Verificar si la variable $conexion está definida y no es null
if ($conexion) {
    // Obtener todos los usuarios
    $usuarios = Usuario::obtenerTodosLosUsuarios($conexion);

    // Verificar si se encontraron usuarios
    if ($usuarios) {
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuarios</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            padding: 40px;
        }
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 40px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:hover {
            background-color: #f5f5f5;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Lista de Usuarios</h1>
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Correo Electrónico</th>
                    <th>RolID</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Iterar sobre la lista de usuarios
                foreach ($usuarios as $usuario) {
                    echo "<tr>";
                    echo "<td>{$usuario->getNombre()}</td>";
                    echo "<td>{$usuario->getCorreoElectronico()}</td>";
                    echo "<td>{$usuario->getRolId()}</td>"; // Agregar esta línea para mostrar el RolID
                    echo "<td>
                            <a href='editar.php?id={$usuario->getId()}'>Editar</a>
                            <a href='eliminar.php?id={$usuario->getId()}'>Eliminar</a>
                        </td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
<?php
    } else {
        // Si no se encontraron usuarios, mostrar un mensaje
        echo "<p>No se encontraron usuarios.</p>";
    }
} else {
    // Si la conexión no está establecida, mostrar un mensaje de error
    echo "<p>La conexión ha fallado.</p>";
}
?>


