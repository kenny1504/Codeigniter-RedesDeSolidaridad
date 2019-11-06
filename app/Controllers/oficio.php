<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\oficios;

class oficio extends BaseController
{
	public function index()
	{ 
		$oficios = new oficios();
		$data = [
            'oficios' => $oficios->paginate(10), //retorna los datos de la tabla oficios con su paginacion
            'pager' => $oficios->pager
        ];
		return view('/Oficio/index.blade.php',$data);// retorna vista y se envian datos
	}
	public function eliminar()
	{
	/*	$oficios = new oficios();
		$data = [
            'oficios' => $oficios->paginate(10), //retorna los datos de la tabla oficios con su paginacion
            'pager' => $oficios->pager
        ];
		return view('/Materia/index.blade.php',$data);// retorna vista y se envian datos */
	}



	//--------------------------------------------------------------------

}