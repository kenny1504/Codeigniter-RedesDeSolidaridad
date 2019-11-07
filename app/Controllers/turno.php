<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\turnos;

class turno extends BaseController
{
	public function index()
	{ 
        $session = \Config\Services::session();    // instancia de la libreria SESSION
        $session->start(); // Inicio de varibles SESSION
      
		if(isset($_SESSION['Nombre']) && !empty($_SESSION['Nombre'])) //si no existe una sesion No ingresa
		{
			
            $turnos = new turnos();
            $data = [
                'turnos' => $turnos->paginate(10), //retorna los datos de la tabla turnos con su paginacion
                'pager' => $turnos->pager
            ];
            return view('/Turno/index.blade.php',$data);// retorna vista y se envian datos
		}
		else
		{
			return view('login.blade.php');
		}
		
    }
}