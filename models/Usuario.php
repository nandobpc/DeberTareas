<?php

class Usuario
{
    private $id;
    private $nombre;
    private $correoElectronico;
    private $contrasena;
    private $rolId;

    public function __construct($id, $nombre, $correoElectronico, $contrasena, $rolId)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->correoElectronico = $correoElectronico;
        $this->contrasena = $contrasena;
        $this->rolId = $rolId;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getCorreoElectronico()
    {
        return $this->correoElectronico;
    }

    public function getContrasena()
    {
        return $this->contrasena;
    }

    public function getRolId()
    {
        return $this->rolId;
    }

    public static function obtenerTodosLosUsuarios($conexion)
    {
        // Consulta SQL para obtener todos los usuarios
        $query = "SELECT * FROM Usuarios";

        // Preparar la consulta
        $statement = $conexion->prepare($query);

        // Ejecutar la consulta
        $statement->execute();

        // Obtener el resultado de la consulta
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);

        // Verificar si se obtuvieron resultados
        if ($result) {
            $usuarios = array();
            // Iterar sobre los resultados y crear objetos Usuario
            foreach ($result as $row) {
                $usuario = new Usuario($row["UserID"], $row["Nombre"], $row["CorreoElectronico"], $row["Contraseña"], $row["RolID"]);
                // Agregar el usuario al array
                $usuarios[] = $usuario;
            }
            return $usuarios;
        } else {
            // Si no se encontraron usuarios, retornar null
            return null;
        }
    }
}
?>




