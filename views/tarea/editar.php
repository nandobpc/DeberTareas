<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Tarea</title>
</head>
<body>
    <h1>Editar Tarea</h1>
    <form action="actualizar.php" method="POST">
        <label for="descripcion">Descripción:</label><br>
        <textarea id="descripcion" name="descripcion" rows="4" cols="50" required><?php echo $tarea->getDescripcion(); ?></textarea><br><br>
        <label for="fechaVencimiento">Fecha de Vencimiento:</label><br>
        <input type="date" id="fechaVencimiento" name="fechaVencimiento" value="<?php echo $tarea->getFechaVencimiento(); ?>" required><br><br>
        <label for="asignadoA">Asignado a:</label><br>
        <select id="asignadoA" name="asignadoA" required>
            <option value="1" <?php if ($tarea->getAsignadoA() == 1) echo 'selected'; ?>>Usuario 1</option>
            <option value="2" <?php if ($tarea->getAsignadoA() == 2) echo 'selected'; ?>>Usuario 2</option>
            <!-- Agregar más opciones según los usuarios disponibles -->
        </select><br><br>
        <input type="hidden" name="id" value="<?php echo $tarea->getId(); ?>">
        <input type="submit" value="Actualizar Tarea">
    </form>
</body>
</html>
