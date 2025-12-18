<?php
namespace App\Controllers;
use App\Models\MicrocursoModel;

class MicrocursoController extends BaseController
{
    public function index()
    {
        $model = new MicrocursoModel();
        return view('microcursos', ['cursos'=>$model->findAll()]);
    }
}
