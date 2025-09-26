<?php include "header.php"; ?>
<h1>Listado de Citas</h1>
<a href="index.php?action=nueva" class="btn btn-primary">+ Nueva Cita</a>
<table>
  <tr>
    <th>ID</th><th>Paciente</th><th>Especialidad</th><th>Fecha</th><th>Estado</th>
  </tr>
  <?php foreach ($citas as $c): ?>
  <tr>
    <td><?= $c->id ?></td>
    <td><?= $c->paciente ?></td>
    <td><?= $c->especialidad ?></td>
    <td><?= $c->fecha ?></td>
    <td><?= $c->estado ?></td>
  </tr>
  <?php endforeach; ?>
</table>
<?php include "footer.php"; ?>
