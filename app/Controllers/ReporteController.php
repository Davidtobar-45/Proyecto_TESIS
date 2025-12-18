<?php
namespace App\Controllers;
use App\Models\EvaluacionModel;

class ReporteController extends BaseController
{
    public function index()
    {
        $model = new EvaluacionModel();
        return view('reportes', ['datos'=>$model->findAll()]);
    }
}
