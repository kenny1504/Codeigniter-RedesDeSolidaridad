<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\asignaturas;

class asignatura extends BaseController
{
	public function index()
	{
		$asignaturas = new asignaturas();
		$data = [
            'asignaturas' => $asignaturas->paginate(5), //retorna los datos de la tabla asignaturas con su paginacion
            'pager' => $asignaturas->pager
        ];
		return view('/Materia/index.blade.php',$data);// retorna vista y se envian datos
	}
	//--------------------------------------------------------------------

}
