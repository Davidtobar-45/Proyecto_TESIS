<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Simulaciones</title>
</head>
<body>
    <h2>Nueva Simulación</h2>

    <form method="post" action="<?= base_url('simulaciones/guardar') ?>">
        <input type="text" name="usuario" placeholder="Usuario" required>
        <input type="text" name="escenario" placeholder="Escenario Social" required>
        <input type="text" name="resultado" placeholder="Resultado" required>
        <button type="submit">Guardar</button>
    </form>

    <h2>Historial</h2>
    <ul>
        <?php foreach ($simulaciones as $s): ?>
            <li><?= $s['usuario'] ?> - <?= $s['escenario'] ?> - <?= $s['resultado'] ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
