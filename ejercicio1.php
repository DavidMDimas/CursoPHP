<?php 

class HolaMundo{
    
    //Atributos
    public $mensaje = "Hola";
    public $nombre = "Pepe";
    
    //Metodos
    public function saludo($mensaje, $nombre){
        echo $this->mensaje . " , " . $this->nombre;
    }
    
    
}

$holamundo = new HolaMundo();
$holamundo->saludo("", "");


?>