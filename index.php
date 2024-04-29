<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administración de Tareas</title>
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
        h2 {
            color: #4CAF50;
            margin-bottom: 20px;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            margin-bottom: 15px;
        }
        a {
            display: inline-block;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        a:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Administración de Tareas</h1>

        <div class="row">
            <div class="six columns">
                <h2>Usuarios</h2>
                <ul>
                    <li><a href="views/usuario/registro.php">Registrar Nuevo Usuario</a></li>
                    <li><a href="views/usuario/listar.php">Ver Lista de Usuarios</a></li>
                    <li><a href="views/usuario/editar.php">Editar Usuario</a></li>
                    <li><a href="views/usuario/eliminar.php">Eliminar Usuario</a></li>
                </ul>
            </div>
            <div class="six columns">
                <h2>Roles</h2>
                <ul>
                    <li><a href="views/rol/crear.php">Crear Nuevo Rol</a></li>
                    <li><a href="views/rol/listar.php">Ver Lista de Roles</a></li>
                    <li><a href="views/rol/editar.php">Editar Rol</a></li>
                    <li><a href="views/rol/eliminar.php">Eliminar Rol</a></li>
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="twelve columns">
                <h2>Tareas</h2>
                <ul>
                    <li><a href="views/tarea/crear.php">Crear Nueva Tarea</a></li>
                    <li><a href="views/tarea/listar.php">Ver Lista de Tareas</a></li>
                    <li><a href="views/tarea/editar.php">Editar Tarea</a></li>
                    <li><a href="views/tarea/eliminar.php">Eliminar Tarea</a></li>
                    <li><a href="views/tarea/asignar.php">Asignar Tarea</a></li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>
