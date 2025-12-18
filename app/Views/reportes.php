<?= view('layout/header') ?>

<h3>Reporte Cuantitativo</h3>

<table class="table table-bordered">
<tr>
    <th>Usuario</th>
    <th>Tipo</th>
    <th>Puntaje</th>
</tr>
<?php foreach($datos as $d): ?>
<tr>
    <td><?= $d['usuario_id'] ?></td>
    <td><?= $d['tipo'] ?></td>
    <td><?= $d['puntaje'] ?></td>
</tr>
<?php endforeach; ?>
</table>

<?= view('layout/footer') ?>
