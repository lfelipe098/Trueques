<?php namespace App\Models;

use CodeIgniter\Model;

class Modelo extends Model
{
    protected $table = 'usuarios';
    protected $primaryKey = 'id';

    protected $allowedFields = ['nombre', 'contraseña', 'correo', 'telefono', 'edad'];

    public function crearUsuario(){
        #$model = new Modelo();
        
        if ($this->request->getMethod() === 'post' && $this->validate([
            'text' => 'required|min_length[3]|max_length[255]',
            'email'  => 'required',
            'password'  => 'required|min_length[6]|max_length[255]',
            'tel'  => 'required|min_length[7]|max_length[10]',
            'date'  => 'required',
            'checkbox'  => 'required'
        ]))
        {
            $model->save([
                'nombre' => $this->request->getPost('text'),
                'correo'  => $this->request->getPost('email'),
                'contraseña'  => $this->request->getPost('password'),
                'telefono'  => $this->request->getPost('tel'),
                'edad'  => $this->request->getPost('date'),
            ]);
            #echo ('Usuario creado con éxito');
            return view('welcome_message');
        }
        else{
            return view('paginas/inicio');
        }
        
    }


    public function logging(){
        #$model = new Modelo();

        if ($this->request->getMethod() === 'post' && $this->validate([
            'email'  => 'required',
            'password'  => 'required|min_length[6]|max_length[255]',
        ])){
            
            $condicion = ['correo'=> $this->request->getPost('email'), 'contraseña'=>$this->request->getPost('password')];
            $pase = $model->asArray()->where($condicion)->findAll();
            

        #$pase = $model->asArray()->where('correo', $this->request->getPost('email'))->findAll();

        if($pase != null ){
            #return redirect()->to('/home');
            return view('welcome_message');
            #echo('usuario encontrado');
        }
        else{
            #echo('usuario no existente');
            return view('paginas/inicio');
            #return redirect()->to('/otro/cv');
        }
            
    }
}
}