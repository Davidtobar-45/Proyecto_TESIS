<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */

$routes->get('/login', 'AuthController::login');
$routes->post('/login', 'AuthController::auth');

$routes->get('/registro', 'AuthController::registro');
$routes->post('/registro', 'AuthController::guardarRegistro');

$routes->get('/auth/google', 'AuthController::google');
$routes->get('/auth/googleCallback', 'AuthController::googleCallback');

$routes->get('/logout', 'AuthController::logout');

$routes->get('/', 'DashboardController::index');
$routes->get('/simulaciones', 'SimulacionController::index');
$routes->get('/microcursos', 'MicrocursoController::index');
$routes->get('/minijuegos', 'MinijuegoController::index');
$routes->get('/escenarios', 'EscenarioController::index');
$routes->get('/reportes', 'ReporteController::index');
