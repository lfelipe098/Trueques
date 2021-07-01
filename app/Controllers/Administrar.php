<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Modelo;
use App\Models\Publicaciones;

class Administrar extends Controller{

    public function post(){
        return view("paginas/hill");
    }

    public function user(){
        return view("admin/adminde");
    }
    
}