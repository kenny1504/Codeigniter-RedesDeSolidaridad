<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\usuarios;
class usuario extends BaseController
{

   public function autenticacion() //validacion de inicio de sesion
	{       

      $db = \Config\Database::connect(); // concexion con la basse de datos
      $valor=0; //varible de contro (0=denegado 1=aceptado)
      $nombre=$this->request->getPost('username');  //varible que recive los valores de input USERNAME
      $clave=$this->request->getPost('password');   //varible que recive los valores de input PASSWORD



      ////////////// CONSULTA A ENVIAR A MYSQL
		$consulta= "SELECT Usuarios.ClaveDeUsuario, Usuarios.NombreDeUsuario, Usuarios.Nombre, Usuarios.Cedula, FuncionesDeAcceso.Descripcion, FuncionesAsignada.FechaDeVencimiento FROM FuncionesAsignada 
		INNER JOIN FuncionesDeAcceso ON FuncionesAsignada.Id_FuncionAcceso = FuncionesDeAcceso.Id_FuncionAcceso 
		INNER JOIN Usuarios ON FuncionesAsignada.Id_Usuarios = Usuarios.Id_Usuarios WHERE (Usuarios.ClaveDeUsuario ='".$clave."' && Usuarios.NombreDeUsuario = '".$nombre."')";
         
         $result = $db->query($consulta); //Envia la consulta a la base de datos
        
         $session = \Config\Services::session();    // uso de varibles de session
         $session->start();// Inicio de varibles SESSION
      
         if(!empty($result->getResultArray())) // si el arreglo no esta vacio entra y retorna el valor 1 
         {
            foreach ($result->getResultArray() as $student) { // 
               $newdata = array( // asigna los valores del arreglo a la varible de SESSION
                  'NombreDeUsuario'=> $student['NombreDeUsuario'],
                  'Nombre'  => $student['Nombre'],
                  'Cedula'     => $student['Cedula'],
                  'Descripcion'     => $student['Descripcion'],
                  'FechaDeVencimiento'     => $student['FechaDeVencimiento'],
                  'login_in' =>  TRUE
                ); 
                $session->set($newdata); //Guarda valores en la variable SESSION 
             }
             $valor=1; // rertona 1 si el usuario existe 
        } 
   
         return json_encode($valor);
   }
   
   public function index() //
	{       
   
      $usuario= new usuarios();
      

		$data = [
         'usuarios' => $usuario->paginate(10), //retorna los datos de la tabla asignaturas con su paginacion
         'pager' => $usuario->pager
      ];
      return view('/Usuario/index.blade.php',$data);// retorna vista y se envian datos 


	}

}
