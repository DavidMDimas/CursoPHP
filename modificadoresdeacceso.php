<?php 
    class Facebook{
        //Atributos
        public $nombre;
        public $edad;
        private $pass;
        
        //Metodos
        public function __construct($nombre, $edad, $pass){
            $this->nombre = $nombre;
            $this->edad = $edad;
            $this->pass = $pass;
        }
        public function verInformacion(){
            echo "Nombre: " . $this->nombre . "<br>";
            echo "Edad: " . $this->edad . "<br>";
            self::cambiarPass("54321");
            echo "Password: " . $this->pass . "<br>";
        }
        private function cambiarPass($pass){
            $this->pass = $pass;
        }
    }
$facebook = new Facebook("Andres Manuel", 52, "1234");
$facebook->verInformacion();


?>