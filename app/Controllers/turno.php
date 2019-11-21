<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\turnos;

class turno extends BaseController
{
	public function index()
	{ 
        $session = \Config\Services::session();    // instancia de la libreria SESSION
        $session->start(); // Inicio de varibles SESSION
      
        if($_SESSION['login_in']==true) //si no existe una sesion No ingresa
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
    public function eliminar()
	{
		$id=$this->request->getPost('valor_id_turno');   //varible que recive los valores de input valor_id_turno
		$valor=0;  
		$turnos = new turnos();
		$result = $turnos->where('id',$id)->delete();
		if(!empty($result))
		{
			$valor=1;
		}
		return  json_decode($valor);
	}
}