<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\grados;

class grado extends BaseController
{
	public function index()
	{ 
		$session = \Config\Services::session();    // instancia de la libreria SESSION
        $session->start(); // Inicio de varibles SESSION
      
		if($_SESSION['login_in']==true) //si no existe una sesion No ingresa
		{
			
			$grados = new grados();
			$data = [
				'grados' => $grados->paginate(10), //retorna los datos de la tabla grados() con su paginacion
				'pager' => $grados->pager
			];
			return view('/Grado/index.blade.php',$data);// retorna vista y se envian datos
		}
		else
		{
			return view('login.blade.php');
		}
		
    }
}