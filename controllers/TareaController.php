<?php
include_once("../config/conexion.php");
include_once("../models/Tarea.php");

class TareaController {
    // Función para listar todas las tareas
    public function listarTareas() {
        global $conn;
        $tareas = array();

        $sql = "SELECT * FROM Tareas";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $tarea = new Tarea($row["TareaID"], $row["Descripcion"], $row["FechaCreacion"], $row["FechaVencimiento"], $row["Estado"], $row["AsignadoA"], $row["Creador"]);
                array_push($tareas, $tarea);
            }
        }

        var_dump($tareas); // Agregar esta línea para verificar el contenido de $tareas

        return $tareas;
    }

    // Función para crear una nueva tarea
    public function crearTarea($descripcion, $fechaCreacion, $fechaVencimiento, $estado, $asignadoA, $creador) {
        global $conn;

        $descripcion = mysqli_real_escape_string($conn, $descripcion);
        $fechaCreacion = mysqli_real_escape_string($conn, $fechaCreacion);
        $fechaVencimiento = mysqli_real_escape_string($conn, $fechaVencimiento);
        $estado = mysqli_real_escape_string($conn, $estado);
        $asignadoA = mysqli_real_escape_string($conn, $asignadoA);
        $creador = mysqli_real_escape_string($conn, $creador);

        $sql = "INSERT INTO Tareas (Descripcion, FechaCreacion, FechaVencimiento, Estado, AsignadoA, Creador) VALUES ('$descripcion', '$fechaCreacion', '$fechaVencimiento', '$estado', '$asignadoA', '$creador')";

        if ($conn->query($sql) === TRUE) {
            return true;
        } else {
            return false;
        }
    }
}
?>
