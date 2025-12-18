<?php
namespace App\Models;
use CodeIgniter\Model;

class ProgresoModel extends Model
{
    protected $table = 'progreso';
    protected $allowedFields = [
        'usuario_id','nivel','porcentaje'
    ];
}
