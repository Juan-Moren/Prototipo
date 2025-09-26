<?php
require_once "Controller/CitaController.php";

$controller = new CitaController();
$action = $_GET['action'] ?? '';

if ($action == 'nueva') {
    include "View/cita_form.php";
} elseif ($action == 'crear') {
    $paciente = $_POST['paciente'];
    $especialidad = $_POST['especialidad'];
    $fecha = $_POST['fecha'];
    $controller->crearCita($paciente, $especialidad, $fecha);
    $citas = $controller->listarCitas();
    include "View/cita_lista.php";
} else {
    $citas = $controller->listarCitas();
    include "View/cita_lista.php";
}
