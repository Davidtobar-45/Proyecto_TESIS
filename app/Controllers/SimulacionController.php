<?php
namespace App\Controllers;

use App\Models\SimulacionModel;
use App\Models\ResultadoModel;
use App\Models\ProgresoModel;

class SimulacionController extends BaseController
{
    public function index()
    {
        $model = new SimulacionModel();
        $data['simulaciones'] = $model->findAll();
        return view('simulaciones/index', $data);
    }

    public function responder()
    {
        $resultado = new ResultadoModel();
        $progreso = new ProgresoModel();

        $puntaje = ($this->request->getPost('respuesta') ==
                    $this->request->getPost('correcta')) ? 10 : 0;

        $resultado->insert([
            'usuario_id' => 1,
            'simulacion_id' => $this->request->getPost('simulacion_id'),
            'respuesta' => $this->request->getPost('respuesta'),
            'puntaje' => $puntaje
        ]);

        $progreso->save([
            'usuario_id' => 1,
            'nivel' => 1,
            'porcentaje' => rand(60,100)
        ]);

        return redirect()->to('/feedback/'.$puntaje);
    }

    public function feedback($puntaje)
    {
        return view('simulaciones/feedback', ['puntaje'=>$puntaje]);
    }
}
