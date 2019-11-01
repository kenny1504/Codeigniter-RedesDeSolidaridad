<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Home extends BaseController
{
	public function index()
	{
		return view('login.blade.php');
	}
	public function inicio()
	{
		return view('inicio.blade.php');
	}
	//--------------------------------------------------------------------

}
