<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\usuarios;
class usuario extends BaseController
{

   public function autenticacion() //validacion de inicio de sesion
	{       
      $valor=0;
      $usuari= $this->request->getPost('username'); //captura los datos en el input usuario
      $clave= $this->request->getPost('password'); //captura los datos en el input contraseña

            $usuario = new usuarios(); //instancia del modelo Usuarios
            $result = $usuario->where('NombreDeUsuario',$usuari)->find(); //busca si el usuario existe
            $result2 = $usuario->where('ClaveDeUsuario',$clave)->find();  //busca si la contraseña existe
            if (count($result) > 0 && count($result2) > 0) // si los 2 existen entonces retorna 1 de o contrario 0
            {
               $valor=1;
            }
         return json_encode($valor);
	}
	//--------------------------------------------------------------------

}
