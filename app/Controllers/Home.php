<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Home extends BaseController
{
	public function index()
	{

		//Correcion a varible de session NUNCA destruir la varible SESSION solo asignarle valor FALSE a login_in

	    $session = \Config\Services::session();    // instancia de la libreria SESSION
		$session->start(); // Inicio de varibles SESSION
	    /* $data = array( // asigna los valores del arreglo a la varible de SESSION
			'login_in' => false
		  ); 
		  
		  $session->set($data); */
	/* 	$session->destroy(); //Elimina una SESSION */ 
	

		return view('login.blade.php');
	}
	public function inicio()
	{
		
		$session = \Config\Services::session();    // instancia de la libreria SESSION
        $session->start(); // Inicio de varibles SESSION
      
		if($_SESSION['login_in']==true) //si no existe una sesion No ingresa
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
