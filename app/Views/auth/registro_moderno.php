<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Registro</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{
background: linear-gradient(135deg,#43cea2,#185a9d);
height:100vh;
}
.card{
border-radius:20px;
max-width:450px;
}
</style>
</head>

<body class="d-flex justify-content-center align-items-center">

<div class="card shadow-lg p-4">
<h3 class="text-center fw-bold mb-3">Crear Cuenta</h3>

<form method="post">
<input name="nombre" class="form-control form-control-lg mb-3" placeholder="Nombre completo">
<input name="usuario" class="form-control form-control-lg mb-3" placeholder="Usuario">
<input name="email" type="email" class="form-control form-control-lg mb-3" placeholder="Correo">
<input name="password" type="password" class="form-control form-control-lg mb-3" placeholder="Contraseña">

<button class="btn btn-success btn-lg w-100">Registrarse</button>
</form>

<a href="<?= base_url('login') ?>" class="d-block text-center mt-3 text-decoration-none">
← Volver al login
</a>

</div>

</body>
</html>
