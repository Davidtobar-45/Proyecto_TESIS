<?php
namespace App\Models;
use CodeIgniter\Model;

class ResultadoModel extends Model
{
    protected $table = 'resultados';
    protected $allowedFields = [
        'usuario_id','simulacion_id','respuesta','puntaje'
    ];
}
