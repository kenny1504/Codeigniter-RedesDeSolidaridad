<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\oficios;

class oficio extends BaseController
{
	public function index()
	{ 
		$session = \Config\Services::session();    // instancia de la libreria SESSION
        $session->start(); // Inicio de varibles SESSION
      
		if(isset($_SESSION['Nombre']) && !empty($_SESSION['Nombre'])) //si no existe una sesion No ingresa
		{
			
			$oficios = new oficios();
			$data = [
				'oficios' => $oficios->paginate(10), //retorna los datos de la tabla oficios con su paginacion
				'pager' => $oficios->pager
			];
			return view('/Oficio/index.blade.php',$data);// retorna vista y se envian datos
		}
		else
		{
			return view('login.blade.php');
		}
		
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