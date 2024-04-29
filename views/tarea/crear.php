<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Tarea</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css">
</head>
<body>
    <div class="container">
        <h1>Crear Tarea</h1>
        <form>
            <label for="description">Descripción:</label>
            <textarea id="description" name="description" required></textarea><br><br>
            <label for="dueDate">Fecha de Vencimiento:</label>
            <input type="date" id="dueDate" name="dueDate" required><br><br>
            <label for="assignedTo">Asignado a:</label>
            <select id="assignedTo" name="assignedTo" required>
                <option value="1">Usuario 1</option>
                <option value="2">Usuario 2</option>
                <!-- Agregar más opciones según los usuarios disponibles -->
            </select><br><br>
            <button type="button" onclick="createTask()">Crear Tarea</button>
        </form>
    </div>

    <!-- Incluir el archivo JavaScript de tareas -->
    <script src="views/tarea/tarea.js"></script>
</body>
</html>

