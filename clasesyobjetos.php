<?php
    class Persona{
        //Atributos
        public $nombre = "pedro";
        
        //Metodos
        public function hablar($mensaje){
            echo $mensaje;
        }
    }
//instanciar una clase
$persona = new Persona();

//objetos
echo $persona->nombre;
$persona->hablar("Saludos");

?>