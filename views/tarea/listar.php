<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tareas</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        a {
            text-decoration: none;
            color: blue;
        }
    </style>
</head>
<body>
    <h1>Lista de Tareas</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Descripción</th>
                <th>Fecha de Creación</th>
                <th>Fecha de Vencimiento</th>
                <th>Estado</th>
                <th>Asignado a</th>
                <th>Creador</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Verificar si se encontraron tareas
            if (isset($tareas)) {
                // Iterar sobre la lista de tareas
                foreach ($tareas as $tarea) {
                    echo "<tr>";
                    echo "<td>{$tarea->getId()}</td>";
                    echo "<td>{$tarea->getDescripcion()}</td>";
                    echo "<td>{$tarea->getFechaCreacion()}</td>";
                    echo "<td>{$tarea->getFechaVencimiento()}</td>";
                    echo "<td>{$tarea->getEstado()}</td>";
                    echo "<td>{$tarea->getAsignadoA()}</td>";
                    echo "<td>{$tarea->getCreador()}</td>";
                    echo "<td>";
                    echo "<a href='editar.php?id={$tarea->getId()}'>Editar</a>";
                    echo "<a href='eliminar.php?id={$tarea->getId()}'>Eliminar</a>";
                    echo "</td>";
                    echo "</tr>";
                }
            } else {
                // Si no se encontraron tareas, mostrar un mensaje
                echo "<tr><td colspan='8'>No se encontraron tareas.</td></tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
