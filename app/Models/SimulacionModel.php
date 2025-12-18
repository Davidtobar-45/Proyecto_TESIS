<?php
namespace App\Models;
use CodeIgniter\Model;

class SimulacionModel extends Model
{
    protected $table = 'simulaciones';
    protected $allowedFields = [
        'escenario_id','pregunta','opcion_a','opcion_b','opcion_c','correcta'
    ];
}
