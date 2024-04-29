<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Nuevo Usuario</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css">
</head>
<body>
    <div class="container">
        <h1>Registrar Nuevo Usuario</h1>
        <form action="../../controllers/usuario_controller.php?action=crear" method="POST">
            <label for="nombre">Nombre:</label><br>
            <input type="text" id="nombre" name="nombre" required><br><br>
            <label for="correo">Correo Electrónico:</label><br>
            <input type="email" id="correo" name="correo" required><br><br>
            <label for="contrasena">Contraseña:</label><br>
            <input type="password" id="contrasena" name="contrasena" required><br><br>
            <label for="rol">Rol:</label><br>
            <select id="rol" name="rol" required>
                <option value="1">Rol 1</option>
                <option value="2">Rol 2</option>
                <!-- Agregar más opciones según los roles disponibles -->
            </select><br><br>
            <button type="submit">Registrar Usuario</button>
        </form>
    </div>
</body>
</html>

