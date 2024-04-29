<?php
// Establecer las credenciales de conexión a la base de datos
$host = 'localhost';
$dbname = 'sistemagestiontareas';
$username = 'root';
$password = '123454321';

// Intentar establecer la conexión a la base de datos
try {
    $conexion = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Otras configuraciones opcionales, si las necesitas
} catch (PDOException $e) {
    // Si la conexión falla, mostrar un mensaje de error
    echo "La conexión ha fallado: " . $e->getMessage();
    // Detener la ejecución del script
    exit();
}
?>

