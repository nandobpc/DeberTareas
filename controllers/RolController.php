<?php
include_once("../config/conexion.php");
include_once("../models/Rol.php");

class RolController {
    // Función para listar todos los roles
    public function listarRoles() {
        global $conn;
        $roles = array();

        // Verificar si la conexión está establecida
        if ($conn) {
            $sql = "SELECT * FROM Roles";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $rol = new Rol($row["RolID"], $row["NombreRol"]);
                    array_push($roles, $rol);
                }
            }
        }

        return $roles;
    }

    // Función para crear un nuevo rol
    public function crearRol($nombre) {
        global $conn;

        $nombre = mysqli_real_escape_string($conn, $nombre);

        $sql = "INSERT INTO Roles (NombreRol) VALUES ('$nombre')";

        if ($conn->query($sql) === TRUE) {
            return true;
        } else {
            return false;
        }
    }

    // Función para obtener información de un rol por su ID
    public function obtenerRolPorId($id) {
        global $conn;

        $id = mysqli_real_escape_string($conn, $id);

        $sql = "SELECT * FROM Roles WHERE RolID = '$id'";
        $result = $conn->query($sql);

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            $rol = new Rol($row["RolID"], $row["NombreRol"]);
            return $rol;
        } else {
            return null;
        }
    }

    // Función para actualizar un rol
    public function actualizarRol($id, $nombre) {
        global $conn;

        $id = mysqli_real_escape_string($conn, $id);
        $nombre = mysqli_real_escape_string($conn, $nombre);

        $sql = "UPDATE Roles SET NombreRol = '$nombre' WHERE RolID = '$id'";

        if ($conn->query($sql) === TRUE) {
            return true;
        } else {
            return false;
        }
    }

    // Función para eliminar un rol
    public function eliminarRol($id) {
        global $conn;

        $id = mysqli_real_escape_string($conn, $id);

        $sql = "DELETE FROM Roles WHERE RolID = '$id'";

        if ($conn->query($sql) === TRUE) {
            return true;
        } else {
            return false;
        }
    }
}
?>

