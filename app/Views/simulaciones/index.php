<?= view('layout/header') ?>

<h3>Simulación de Conversación</h3>

<?php foreach($simulaciones as $s): ?>
<form method="post" action="<?= base_url('simulaciones/responder') ?>" class="card p-3 mb-3">
    <p><strong><?= $s['pregunta'] ?></strong></p>

    <input type="hidden" name="simulacion_id" value="<?= $s['id'] ?>">
    <input type="hidden" name="correcta" value="<?= $s['correcta'] ?>">

    <button name="respuesta" value="A" class="btn btn-outline-primary mb-1">
        <?= $s['opcion_a'] ?>
    </button>
    <button name="respuesta" value="B" class="btn btn-outline-primary mb-1">
        <?= $s['opcion_b'] ?>
    </button>
    <button name="respuesta" value="C" class="btn btn-outline-primary">
        <?= $s['opcion_c'] ?>
    </button>
</form>
<?php endforeach; ?>

<?= view('layout/footer') ?>
