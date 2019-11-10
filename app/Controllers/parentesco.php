<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\parentescos;

class parentesco extends BaseController
{
	public function index()
	{ 
        $session = \Config\Services::session();    // instancia de la libreria SESSION
        $session->start(); // Inicio de varibles SESSION
      
		if($_SESSION['login_in']==true) //si no existe una sesion No ingresa
		{
			
            $parentescos = new parentescos();
            $data = [
                'parentescos' => $parentescos->paginate(10), //retorna los datos de la tabla parentescos con su paginacion
                'pager' => $parentescos->pager
            ];
            return view('/Parentesco/index.blade.php',$data);// retorna vista y se envian datos
		}
		else
		{
			return view('login.blade.php');
		}
		
    }
    
    public function guardar(Request $request){
        $rules = array( //reglas de validaciones
            'Nombre' => 'required|max:50|unique:parentescos,Parentesco,', // regla de validacion del campo Nombre "Tabla Parentesco"
          );
        $validator = Validator::make ( Input::all(), $rules);
        if ($validator->fails()) // si la regla de validacion no es cumplida retorna los errores
        return Response::json(array('errors'=> $validator->getMessageBag()->toarray()));
        else {
            $parentesco = new parentescos();
            $parentesco->Parentesco = $request->Nombre;
            $parentesco->save();
            return response()->json($parentesco); // si el dato es guardado, retorna el dato guardado
        }
    }
	public function eliminar()
	{
	/*	$parentescos = new parentescos();
		$data = [
            'parentescos' => $parentescos->paginate(10), //retorna los datos de la tabla parentescos con su paginacion
            'pager' => $parentescos->pager
        ];
		return view('/Materia/index.blade.php',$data);// retorna vista y se envian datos */
	}



	//--------------------------------------------------------------------

}