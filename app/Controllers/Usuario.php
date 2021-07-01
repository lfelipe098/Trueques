<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Modelo;
use App\Models\Publicaciones;

class Usuario extends Controller{
    public function feed(){
        return view('paginas/feed');
    }

    public function nuevoPost(){
        return view('paginas/crear_post');
    }

    public function misArticulos(){
        return view('paginas/articulos');
    }


    public function crearPost(){

        $session = session();
        $modeloP = new Publicaciones();
        
        if ($this->request->getMethod() === 'post' && $this->validate([
            'articulo' => 'required',
            'antiguedad'  => 'required',
            'descripcion'  => 'required',
            
        ]))
        {
                $file_name = $_FILES['image']['name'];
                $file_size = $_FILES['image']['size'];
                $file_tmp = $_FILES['image']['tmp_name'];
                $file_type = $_FILES['image']['type'];

                $fp = fopen($file_tmp, 'r+b');
                $binario = fread($fp, filesize($file_tmp));
                fclose($fp);
                
            $modeloP->save([
                'id_usuario' => $session->get('id'),
                'titulo' => $this->request->getPost('articulo'),
                'fecha'  => $this->request->getPost('antiguedad'),
                'descripcion'  => $this->request->getPost('descripcion'),
                'imagen'  => $binario,
            ]);
            echo"<script> alert('Articulo publicado') </script>";
            return view('paginas/feed');
        }
        else{
            echo"<script> alert('Completa todos los campos') </script>";
            return view('paginas/crear_post');
        }
    }

}