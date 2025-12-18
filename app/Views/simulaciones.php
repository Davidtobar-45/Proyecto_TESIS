<?= view('layout/header') ?>

<div class="row">
    <div class="col-md-5">
        <div class="card shadow">
            <div class="card-header bg-primary text-white">
                Nueva Simulación
            </div>
            <div class="card-body">
                <form method="post" action="<?= base_url('simulaciones/guardar') ?>">
                    <div class="mb-3">
                        <label class="form-label">Usuario</label>
                        <input type="text" name="usuario" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Escenario Social</label>
                        <input type="text" name="escenario" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Resultado</label>
                        <input type="text" name="resultado" class="form-control" required>
                    </div>

                    <button class="btn btn-success w-100">Guardar</button>
                </form>
            </div>
        </div>
    </div>

    <div class="col-md-7">
        <div class="card shadow">
            <div class="card-header bg-secondary text-white">
                Historial de Simulaciones
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Usuario</th>
                            <th>Escenario</th>
                            <th>Resultado</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($simulaciones as $s): ?>
                        <tr>
                            <td><?= esc($s['usuario']) ?></td>
                            <td><?= esc($s['escenario']) ?></td>
                            <td><?= esc($s['resultado']) ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?= view('layout/footer') ?>
