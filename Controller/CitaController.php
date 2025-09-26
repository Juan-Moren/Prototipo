<?php
require_once __DIR__ . "/../Model/Cita.php";

class CitaController {
    private $citas = [];

    public function __construct() {
        // Datos de ejemplo
        $this->citas[] = new Cita(1, "Juan Pérez", "Cardiología", "2025-09-30 10:00 AM");
        $this->citas[] = new Cita(2, "Ana Torres", "Pediatría", "2025-09-30 11:30 AM");
    }

    public function listarCitas() {
        return $this->citas;
    }

    public function crearCita($paciente, $especialidad, $fecha) {
        $id = count($this->citas) + 1;
        $nueva = new Cita($id, $paciente, $especialidad, $fecha);
        $this->citas[] = $nueva;
        return $nueva;
    }
}
