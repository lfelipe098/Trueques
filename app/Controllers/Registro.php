<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Modelo;
use App\Models\Admins;

class Registro extends Controller{

    /*public function NuevoUsuario(){
        $model = new Modelo();
        crearUsuario();
    }*/

    public function crearUsuario(){
        $model = new Modelo();
        
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
            return view('paginas/feed');
        }
        else{
            echo"<script> alert('Completa todos los campos') </script>";
            return view('paginas/inicio');
        }
    }

    /*public function entrar(){
        $modelo = new Modelo();
        $modelo->logging();
    }*/
    //
    public function matrizInversa($matriz) {
        $det=1/$this->determinante($matriz);
        $nmatriz=$this->matrizAdjunta($matriz);
        $this->multiplicarMatriz($det,$nmatriz);
        return $nmatriz;
    }
     
    public function multiplicarMatriz($n, $matriz) {
        for($i=0; $i<count($matriz); $i++)
            for($j=0;$j<count($matriz);$j++)
            $matriz[$i][$j]= $matriz[$i][$j]*$n;
    }
     
    public function matrizAdjunta($matriz){
        return $this->matrizTranspuesta($this->matrizCofactores($matriz));
    }
     
    public function matrizCofactores($matriz){
        //double[][] nm=new double[matriz.length][matriz.length];
        for($i=0; $i<count($matriz); $i++) {
            for($j=0;$j<count($matriz); $j++) {
                //double[][] det=new double[matriz.length-1][matriz.length-1];
                $detValor=0;
                for($k=0; $k<count($matriz); $k++) {
                    if($k!=$i) {
                        for($l=0; $l<count($matriz); $l++) {
                            if($l!=$j) {
                            $indice1=$k<$i ? $k : $k-1 ;
                            $indice2=$l<$j ? $l : $l-1 ;
                            $det[$indice1][$indice2]=$matriz[$k][$l];
                            }
                        }
                    }
                }
                $detValor=$this->determinante($det);
                $nm[$i][$j]=$detValor * pow(-1, $i+$j+2);
            }
        }
        return $nm;
    }
     
    public function matrizTranspuesta($matriz){
        //double[][]nuevam=new double[matriz[0].length][matriz.length];
        for($i=0; $i<count($matriz); $i++)
        {
            for($j=0; $j<count($matriz); $j++)
                $nuevam[$i][$j]=$matriz[$j][$i];
        }
        return $nuevam;
    }
     
    public function determinante($matriz)
    {
        $det=0;
        if(count($matriz)==2)
        {
            $det=($matriz[0][0]*$matriz[1][1])-($matriz[1][0]*$matriz[0][1]);
            return $det;
        }
        $suma=0;
        for($i=0; $i<count($matriz); $i++){
        //double[][] nm=new double[matriz.length-1][matriz.length-1];
            for($j=0; $j<count($matriz); $j++){
                if($j!=$i){
                    for($k=1; $k<count($matriz); $k++){
                    $indice=-1;
                    if($j<$i)
                        $indice=$j;
                    else if($j>$i)
                        $indice=$j-1;
                        $nm[$indice][$k-1]=$matriz[$j][$k];
                    }
                }
            }
            if($i%2==0)
            $suma+=$matriz[$i][0] * $this->determinante($nm);
            else
            $suma-=$matriz[$i][0] * $this->determinante($nm);
        }
        return $suma;
    }
    
	//	
    public function indexOfChar($c){
        $allChar="ABCDEFGHIJKLMNÑOPQRSTUVWXYZ <>/¿?!,.@";
        $vari = mb_strpos($allChar, $c);
        if ($vari !== false){
            return $vari;
        }
        else{
            $vari = -1;
            return $vari;
        }
    }
    
    public function charAtIndex($pos){
        $allChar="ABCDEFGHIJKLMNÑOPQRSTUVWXYZ <>/¿?!,.@";
    	return mb_substr($allChar, $pos, 1);
    }
 
    
    public function encryptBlock($plain){
        $allChar="ABCDEFGHIJKLMNÑOPQRSTUVWXYZ <>/¿?!,.@";
        $key = array(array(3,10,20), array(20,19,17), array(23, 78,17));

        $block = count($key[0]);
        
    	$sum=0;
    	$plain= mb_strtoupper($plain);
        $cipher="";
       
        for($i=0; $i<$block; $i++)
        {
            $a[$i][0]=$this->indexOfChar(mb_substr($plain, $i, 1));
        }
   
       
        for($i=0; $i<$block; $i++){
       	 for($j=0; $j<1; $j++){
       	 	for($k=0; $k<$block; $k++){
       	 		$sum=$sum+$key[$i][$k]*$a[$k][$j];
       	 	}
       		$cipherMatrix[$i][$j] = $sum % mb_strlen($allChar);
			$sum = 0;
       	 }
        }       
       
        for($i=0; $i<$block; $i++){
       	 $cipher= ($cipher . $this->charAtIndex($cipherMatrix[$i][0]));
        }
        return $cipher;
    }
    
    public function encrypt($plainText){
        $allChar="ABCDEFGHIJKLMNÑOPQRSTUVWXYZ <>/¿?!,.@";

        $key = array(array(3,10,20), array(20,19,17), array(23, 78,17));

        $block = count($key[0]);

    	$cipherText="";
        //keyInsert(block);
           
        $plainText= mb_strtoupper($plainText);
            
       	$len= mb_strlen($plainText);
          // System.out.println(plainText.substring(1,2+1));
        while($len%$block!==0){
        	$plainText= ($plainText."X");
            //System.out.println(len);
            $len= mb_strlen($plainText);
        }

       for($i=0; $i<$len-1;$i=$i+$block){
       	$cipherText=($cipherText . $this->encryptBlock(mb_substr($plainText, $i, $block)));
        //$cipherText=($cipherText." ");
       }
       return $cipherText;
    }

    //
    public function decryptBlock($cipher){
        $allChar="ABCDEFGHIJKLMNÑOPQRSTUVWXYZ <>/¿?!,.@";
        //$key = array(array(5,15,18), array(20,0,11), array(4, 26,0));
        //$keyin = array(array(23,9,21), array(11,9,2), array(22, 23,6));
        $key = array(array(3,10,20), array(20,19,17), array(23, 78,17));
        $keyin = array(array(8,32,13), array(9,4,5), array(11,8,27));
        //$keyin = $this->matrizInversa($key);
        $block = count($keyin[0]);

        
        $cipher= mb_strtoupper($cipher);
        $sum=0;
        $plain="";
        
        for($i=0; $i<$block; $i++)
        {
            $a[$i][0]=$this->indexOfChar(mb_substr($cipher, $i, 1));
        }
       
           
        for($i=0; $i<$block; $i++){
            for($j=0; $j<1; $j++){
                for($k=0; $k<$block; $k++){
                    $sum=$sum+$keyin[$i][$k]*$a[$k][$j];
                }
                $plainMatrix[$i][$j] = $sum % mb_strlen($allChar);
                $sum = 0;
            }
        }
          
           
        for($i=0; $i<$block; $i++){
            $plain=($plain . $this->charAtIndex($plainMatrix[$i][0]));
        }
        return $plain;
       }
       
       public function decrypt($cipherText){
           $allChar="ABCDEFGHIJKLMNÑOPQRSTUVWXYZ <>/¿?!,.@";
           //$key = array(array(5,15,18), array(20,0,11), array(4, 26,0));
           $key = array(array(3,10,20), array(20,19,17), array(23, 78,17));
           $block = count($key[0]);

           $plainText="";
           //$cipherText=cipherText.replaceAll(" ", "");
           
            $cipherText=mb_strtoupper($cipherText);
            
            $len= mb_strlen($cipherText);
         
           for($i=0; $i<$len-1; $i=$i+$block)
           {
            $plainText=($plainText . $this->decryptBlock(mb_substr($cipherText, $i, $block)));
            //$plainText=($plainText." ");
           }
           return $plainText;
       }
    //

    public function logging(){
        $model = new Modelo();
        $modelAdmin = new Admins();

        if ($this->request->getMethod() === 'post' && $this->validate([
            'email'  => 'required',
            'password'  => 'required|min_length[6]|max_length[255]',
        ])){
            
            $condicion = ['correo'=> $this->request->getPost('email'), 'contraseña'=>$this->request->getPost('password')];
            $pase = $model->asArray()->where($condicion)->findAll();            

            
            #$pase = $model->asArray()->where('correo', $this->request->getPost('email'))->findAll();

            if($pase != null ){
                $usersesion = ['id'=> $pase[0]['id'],'correo'=> $this->request->getPost('email'), 'contraseña'=>$this->request->getPost('password')];
                $sesion=session();
		        $sesion->set($usersesion);
                $encriptado = $this->encrypt($this->request->getPost('password'));
                echo($encriptado."</br>");
                $desencriptado = $this->decrypt($encriptado);
                echo($desencriptado);
                return view('paginas/feed');
        
            }
            else{
                
                $paseAdmin = $modelAdmin->asArray()->where($condicion)->findAll();
                if($paseAdmin != null ){

                    $sesion=session();
                    $sesion->set($condicion);
                    return view('admin/adminpo');
    
                }
                else{
                    echo"<script> alert('Contraseña incorrecta') </script>";
                    return view('paginas/inicio');
                }
            }
            
        }
    }

    public function recupera_contrasena(){
        return view('paginas/rec_contra');
    }

    public function loggout(){
        $sesion = session();
        $sesion->destroy();
        return view('paginas/inicio');
    }
    
}