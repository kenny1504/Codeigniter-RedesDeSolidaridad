<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\asignaturas;

class asignatura extends BaseController
{
	public function index()
	{ 
	/*	$session = \Config\Services::session();    // uso de varibles de session
		$session->start();

		$newdata = array(
			'Nombre'  => 'kenny',
			'email'     => 'johndoe@some-site.com',
			'logged_in' => TRUE
	);
	
	$session->set($newdata);

		$usuario= $_SESSION['Nombre'];
		var_dump($usuario); */
		$asignaturas = new asignaturas();
		$data = [
            'asignaturas' => $asignaturas->paginate(10), //retorna los datos de la tabla asignaturas con su paginacion
            'pager' => $asignaturas->pager
        ];
		return view('/Materia/index.blade.php',$data);// retorna vista y se envian datos
	}
	public function eliminar()
	{
	/*	$asignaturas = new asignaturas();
		$data = [
            'asignaturas' => $asignaturas->paginate(10), //retorna los datos de la tabla asignaturas con su paginacion
            'pager' => $asignaturas->pager
        ];
		return view('/Materia/index.blade.php',$data);// retorna vista y se envian datos */
	}



	//--------------------------------------------------------------------

}