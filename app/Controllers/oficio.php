<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\oficios;
use Tests\Support\Models\ValidErrorsModel;

class oficio extends BaseController
{
	public function index()
	{ 
		$session = \Config\Services::session();    // instancia de la libreria SESSION
        $session->start(); // Inicio de varibles SESSION
      
		if($_SESSION['login_in']==true) //si no existe una sesion No ingresa
		{
			
			$oficios = new oficios();
			$data = [
				'oficios' => $oficios->paginate(10), //retorna los datos de la tabla oficios con su paginacion
				'pager' => $oficios->pager
			];
			return view('/Oficio/index.blade.php',$data);// retorna vista y se envian datos
		}
		else
		{
			return view('login.blade.php');
		}
		
	}
	public function eliminar()
	{
		$id=$this->request->getPost('valor_id_oficio');   //varible que recive los valores de input valor_id_oficio
		$valor=0;  
		$oficios = new oficios();
		$result = $oficios->where('id',$id)->delete();
		if(!empty($result))
		{
			$valor=1;
		}
		return  json_decode($valor);
	}

	public function actualizar()
	{
		$oficios = new oficios();
		$id=$this->request->getPost('idoficio');   //varible que recive los valores de input PASSWORD
		$nombre=$this->request->getPost('Nombre-Oficio');   //varible que recive los valores de input PASSWORD	
		
		$data = array (
			'Nombre' => $nombre		
		);

		$result = $oficios->update($id,$data);// pedicion para validar el dato
		if($result==true) // si actualiza los datos
		{
			$datos = array (
				'id'=>$id,
				'Nombre' => $nombre,
				'msg'=> true	// si el dato es actualizado la variable de retorna TRUE	
			);
			return json_encode($datos); //retorna el arreglo con los nuevos valores
		}
		else
		{
			$errors = $oficios->errors(); //recuperar errores de validacion
			return json_encode( $errors); // retorna los errores
		}		
	}
	
}