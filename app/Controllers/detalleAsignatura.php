<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\gradoaasignaturas;

class detalleAsignatura extends BaseController
{
	public function index()
	{ 
		
	}
	
	public function guardar() //funcion para guardar en la tabla detalleAsignatura
	{
        $gradoasignatura = new gradoaasignaturas();
        $idmateria=$this->request->getPost('Asignaturas');   //variable que recive los valores de input idmateria
        $idgrado=$this->request->getPost('Grados');   //variable que recive los valores del idgrado
    
        $data = array (
            'Gradoid' => $idgrado,
            'Asignaturaid' => $idmateria		
		);
        $result = $gradoasignatura->insert($data);// peticion para insertar en la tabla detalleAsignatura
      
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