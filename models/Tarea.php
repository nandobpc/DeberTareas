<?php
class Tarea {
    private $id;
    private $descripcion;
    private $fechaCreacion;
    private $fechaVencimiento;
    private $estado;
    private $asignadoA;
    private $creador;

    // Constructor
    public function __construct($id, $descripcion, $fechaCreacion, $fechaVencimiento, $estado, $asignadoA, $creador) {
        $this->id = $id;
        $this->descripcion = $descripcion;
        $this->fechaCreacion = $fechaCreacion;
        $this->fechaVencimiento = $fechaVencimiento;
        $this->estado = $estado;
        $this->asignadoA = $asignadoA;
        $this->creador = $creador;
    }

    // Getters
    public function getId() {
        return $this->id;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function getFechaCreacion() {
        return $this->fechaCreacion;
    }

    public function getFechaVencimiento() {
        return $this->fechaVencimiento;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function getAsignadoA() {
        return $this->asignadoA;
    }

    public function getCreador() {
        return $this->creador;
    }
}
?>
