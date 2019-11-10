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
		// echo "la fecha actual es " . date("d") . " del " . date("m") . " de " . date("Y");
		$session = \Config\Services::session();    // uso de varibles de session
        $session->start();
	
		if($_SESSION['login_in']==true) //si no existe una sesion No ingresa
		{			
			$asignaturas = new asignaturas();
			$data = [
				'asignaturas' => $asignaturas->paginate(10), //retorna los datos de la tabla asignaturas con su paginacion
				'pager' => $asignaturas->pager
			];
			return view('/Materia/index.blade.php',$data);// retorna vista y se envian datos 
		}
		else
		{
			return view('login.blade.php');
		}
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
