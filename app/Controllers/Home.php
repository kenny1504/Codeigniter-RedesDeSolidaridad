<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Home extends BaseController
{
	public function index()
	{
		$request = \Config\Services::request();
		return view('login.blade.php');
	}
	public function inicio()
	{
		return view('inicio.blade.php');
	}
	//--------------------------------------------------------------------

}
