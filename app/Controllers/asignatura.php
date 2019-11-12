<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\asignaturas;
use Tests\Support\Models\ValidErrorsModel;

class asignatura extends BaseController
{
	public function index()
	{ 
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
		$id=$this->request->getPost('id_materia');   //varible que recive los valores de input ID_MATERIA
		$valor=0;  
		$asignaturas = new asignaturas();
		$result = $asignaturas->where('id',$id)->delete();
		if(!empty($result))
		{
			$valor=1;
		}
		return  json_decode($valor);
	}

	public function actualizar()
	{
		$asignaturas = new asignaturas();
		$id=$this->request->getPost('idmateria');   //varible que recive los valores de input PASSWORD
		$nombre=$this->request->getPost('Nombre-Materia');   //varible que recive los valores de input PASSWORD	
		
		$data = array (
			'Nombre' => $nombre		
		);
		$result = $asignaturas->update($id,$data);
		if($result==true)
		{
			$datos = array (
				'id'=>$id,
				'Nombre' => $nombre		
			);
		}

		return json_encode($datos);
	}


	//--------------------------------------------------------------------

}
