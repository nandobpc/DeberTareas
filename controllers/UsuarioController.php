<?php
include_once("../config/conexion.php");
include_once("../models/Usuario.php");

class UsuarioController {
    // Función para registrar un nuevo usuario
    public function registrarUsuario($nombre, $correoElectronico, $contrasena, $rolID) {
        global $conn;

        $nombre = mysqli_real_escape_string($conn, $nombre);
        $correoElectronico = mysqli_real_escape_string($conn, $correoElectronico);
        $contrasena = mysqli_real_escape_string($conn, $contrasena);
        $rolID = mysqli_real_escape_string($conn, $rolID);

        $sql = "INSERT INTO Usuarios (Nombre, CorreoElectronico, Contraseña, RolID) VALUES ('$nombre', '$correoElectronico', '$contrasena', '$rolID')";

        if ($conn->query($sql) === TRUE) {
            return true;
        } else {
            return false;
        }
    }

    // Función para listar todos los usuarios
    public function listarUsuarios() {
        global $conn;
        $usuarios = array();

        $sql = "SELECT * FROM Usuarios";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $usuario = new Usuario($row["UserID"], $row["Nombre"], $row["CorreoElectronico"], $row["Contraseña"], $row["RolID"]);
                array_push($usuarios, $usuario);
            }
        }

        return $usuarios;
    }


}
?>








