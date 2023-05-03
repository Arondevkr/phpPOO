<?php 
    class miClase{
        public $atributo1 = "Hola mundo";

        public function miMetodo(){
            return $this->atributo1;
        }
    }
    class miClase2{
        public $atributo1 = "Hola mundo";

        public function miMetodo(){
            return $this->atributo1;
        }
    }

    $objeto1 = new miClase();
    $objeto2 = new miClase2();

    echo $objeto1->miMetodo()."<br>";
    echo $objeto2->miMetodo();
?>