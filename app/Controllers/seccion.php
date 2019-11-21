<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\secciones;

class seccion extends BaseController
{
	public function index()
	{ 
		$session = \Config\Services::session();    // instancia de la libreria SESSION
        $session->start(); // Inicio de varibles SESSION
      
		if($_SESSION['login_in']==true) //si no existe una sesion No ingresa
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
	public function eliminar()
	{
		$id=$this->request->getPost('valor_id_seccion');   //varible que recive los valores de input valor_id_seccion
		$valor=0;  
		$secciones = new secciones();
		$result = $secciones->where('id',$id)->delete();
		if(!empty($result))
		{
			$valor=1;
		}
		return  json_decode($valor);
	}
}