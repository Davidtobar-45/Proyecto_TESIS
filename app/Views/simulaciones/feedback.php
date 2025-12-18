<?= view('layout/header') ?>

<div class="alert <?= $puntaje > 0 ? 'alert-success':'alert-danger' ?>">
    <?= $puntaje > 0 ? 'Buena respuesta 👏':'Debes mejorar 😐' ?>
</div>

<div class="progress">
  <div class="progress-bar bg-success" style="width: <?= rand(50,100) ?>%"></div>
</div>

<?= view('layout/footer') ?>
