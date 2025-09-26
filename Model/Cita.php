<?php
class Cita {
    public $id;
    public $paciente;
    public $especialidad;
    public $fecha;
    public $estado;

    public function __construct($id, $paciente, $especialidad, $fecha, $estado = "Pendiente") {
        $this->id = $id;
        $this->paciente = $paciente;
        $this->especialidad = $especialidad;
        $this->fecha = $fecha;
        $this->estado = $estado;
    }
}
