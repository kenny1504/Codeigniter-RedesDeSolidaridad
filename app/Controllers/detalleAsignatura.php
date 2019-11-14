<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\gradoaasignaturas;

class detalleAsignatura extends BaseController
{
	public function index()
	{ 
		
	}
	
	public function guardar()
	{
        $gradoasignatura = new gradoaasignaturas();
        $idmateria=$this->request->getPost('Asignaturas');   //varible que recive los valores de input idgrado
        $idgrado=$this->request->getPost('Grados');   //varible que recive los valores de input idmateria
    
        $data = array (
            'Gradoid' => $idgrado,
            'Asignaturaid' => $idmateria		
		);
        $result = $gradoasignatura->insert($data);// pedicion para insertar nueva asignatura
       if($result!=true)
       {
             return   json_encode(0);
       }
       else
       {
               return   json_encode(1);
       }
       

        
	}
}