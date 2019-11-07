<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\secciones;

class seccion extends BaseController
{
	public function index()
	{ 
		$session = \Config\Services::session();    // instancia de la libreria SESSION
        $session->start(); // Inicio de varibles SESSION
      
		if(isset($_SESSION['Nombre']) && !empty($_SESSION['Nombre'])) //si no existe una sesion No ingresa
		{
			
			$secciones = new secciones();
			$data = [
				'secciones' => $secciones->paginate(10), //retorna los datos de la tabla secciones con su paginacion
				'pager' => $secciones->pager
			];
			return view('/Seccion/index.blade.php',$data);// retorna vista y se envian datos
		}
		else
		{
			return view('login.blade.php');
		}
		
    }
}