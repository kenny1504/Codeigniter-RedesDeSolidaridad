<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\gradoacademico;

class grado extends BaseController
{
	public function index()
	{ 
		$session = \Config\Services::session();    // instancia de la libreria SESSION
        $session->start(); // Inicio de varibles SESSION
      
		if(isset($_SESSION['Nombre']) && !empty($_SESSION['Nombre'])) //si no existe una sesion No ingresa
		{
			
			$gradoacademico = new gradoacademico();
			$data = [
				'gradoacademico' => $gradoacademico->paginate(10), //retorna los datos de la tabla gradoacademico() con su paginacion
				'pager' => $gradoacademico->pager
			];
			return view('/Grado/index.blade.php',$data);// retorna vista y se envian datos
		}
		else
		{
			return view('login.blade.php');
		}
		
    }
}