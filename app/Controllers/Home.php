<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Home extends BaseController
{
	public function index()
	{
	    $session = \Config\Services::session();    // instancia de la libreria SESSION
		$session->start();// Inicio de varibles SESSION
		$session->destroy(); //Elimina una SESSION

		return view('login.blade.php');
	}
	public function inicio()
	{
		
		$session = \Config\Services::session();    // instancia de la libreria SESSION
        $session->start(); // Inicio de varibles SESSION
      
		if(isset($_SESSION['Nombre']) && !empty($_SESSION['Nombre'])) //si no existe una sesion No ingresa
		{
			
		   return view('inicio.blade.php');
		}
		else
		{
			return view('login.blade.php');
		}
		
	}
	//--------------------------------------------------------------------

}
