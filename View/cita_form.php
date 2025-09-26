<?php include "header.php"; ?>
<h1>Registrar Cita</h1>
<form method="POST" action="index.php?action=crear">
  <label>Paciente:</label><br>
  <input type="text" name="paciente" required><br><br>

  <label>Especialidad:</label><br>
  <select name="especialidad">
    <option>Cardiología</option>
    <option>Pediatría</option>
    <option>Medicina General</option>
  </select><br><br>

  <label>Fecha:</label><br>
  <input type="datetime-local" name="fecha" required><br><br>

  <button type="submit" class="btn btn-primary">Guardar</button>
</form>
<?php include "footer.php"; ?>
