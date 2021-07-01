<?php

namespace App\Controllers;
use App\Models\Modelo;

class Home extends BaseController
{
	public function index()
	{
		return view('paginas/inicio');
	}

	   
}
