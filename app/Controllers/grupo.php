<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\grupos;

class grupo extends BaseController
{
	public function index()
	{ 
		$session = \Config\Services::session();    // instancia de la libreria SESSION
        $session->start(); // Inicio de varibles SESSION
      
		if($_SESSION['login_in']==true) //si no existe una sesion No ingresa
		{
			
			$grupos = new grupos();
			$data = [
				'grupos' => $grupos->paginate(10), //retorna los datos de la tabla grupos con su paginacion
				'pager' => $grupos->pager
			];
			return view('/Grupo/index.blade.php',$data);// retorna vista y se envian datos
		}
		else
		{
			return view('login.blade.php');
		}
		
	}
	public function eliminar()
	{
		$id=$this->request->getPost('valor_id_grupo');   //varible que recive los valores de input valor_id_oficio
		$valor=0;  
		$grupos = new grupos();
		$result = $grupos->where('id',$id)->delete();
		if(!empty($result))
		{
			$valor=1;
		}
		return  json_decode($valor);
	}
}