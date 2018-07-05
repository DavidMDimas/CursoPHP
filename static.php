<?php 
    class Pagina{
        //Atributos
        public $nombre = "Codigo Facilito";
        public static $url = "www.codigo.com";
        
        //Metodos
        public function bienvenidos(){
            echo "Bienvenidos a <b>" . $this->nombre . "</b> La pagina es <b>" . Pagina::$url . "</b><br>";
        }
        public static function bienvenida2(){
            echo "Bienvenidos  a" . self::$url;
        }
    }
class Web extends Pagina{
    
}

$pagina = new Pagina;
$pagina->bienvenidos();

Web::bienvenida2();


?>