<?= view('layout/header') ?>

<div class="container mt-4">

<div class="p-5 text-white rounded mb-4"
style="background:url('https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjKA4TLG83ilNEJM6jGPMt5DUGUa9zOiwwwqqeKxjMrSSCAIG_i_hqOALD1hyHOKfW5lDLkMO8Iec8zmxIH1GPLsT3RcIQsWT4Mn-d8j-frNHjmVToDTlitsQ2siC-dk0nEsBBtNDhhggNhWP-wiiP5lzUwYw3lj5Y2hKquZOJ0Mm9p4nrOUlPAiwNidA/s1920/COOL-ANIME-GIRL-STYLE-WALLPAPER-WITH-A-GIANT-SMILE-EMOJI-PAINTING.webp');
background-size:cover;">
<h2>Bienvenido <?= session('nombre') ?></h2>
<p>Entrenamiento de habilidades sociales con IA</p>
</div>

<div class="row g-4 text-center">

<?php
$items=[
['Simulaciones','chat-dots','primary','simulaciones'],
['Microcursos','book','success','microcursos'],
['Minijuegos','controller','warning','minijuegos'],
['Escenarios','globe','info','escenarios'],
['Reportes','bar-chart','danger','reportes']
];
foreach($items as $i):
?>
<div class="col-md-4">
<a href="<?= base_url($i[3]) ?>" class="text-decoration-none">
<div class="card shadow border-0 rounded-4 p-4">
<i class="bi bi-<?= $i[1] ?> fs-1 text-<?= $i[2] ?>"></i>
<h6 class="mt-2"><?= $i[0] ?></h6>
</div>
</a>
</div>
<?php endforeach; ?>

</div>
</div>

<?= view('layout/footer') ?>
