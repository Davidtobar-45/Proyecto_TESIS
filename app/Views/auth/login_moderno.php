<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Login</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{
background: linear-gradient(135deg,#667eea,#764ba2);
height:100vh;
}
.card{
border-radius:20px;
max-width:420px;
}
</style>
</head>

<body class="d-flex justify-content-center align-items-center">

<div class="card shadow-lg p-4 text-center">
<h2 class="fw-bold">Bienvenido</h2>
<p class="text-muted">IA para habilidades sociales</p>

<form method="post">
<input name="usuario" class="form-control form-control-lg mb-3" placeholder="Usuario">
<input name="password" type="password" class="form-control form-control-lg mb-3" placeholder="Contraseña">

<button class="btn btn-primary btn-lg w-100 mb-2">Ingresar</button>
</form>

<a href="<?= base_url('registro') ?>" class="btn btn-outline-light w-100 mb-3">
Registrarse
</a>

<hr>

<a href="<?= base_url('auth/google') ?>" class="btn btn-light w-100 shadow-sm">
<img src="https://developers.google.com/identity/images/g-logo.png" width="20">
 Continuar con Google
</a>

</div>

</body>
</html>
