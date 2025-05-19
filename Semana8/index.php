<?php
//creacion de clase
class Persona
    {
        private $nombre;
        public $edad;
        public static $cantidad = 0;  
        //constructor 
        public function __construct($nombre){
            $this->nombre = $nombre;            
        }        
        public function saludar()
        {
            echo "Hola soy $this->nombre";
        }
        public function presentacion()
        {
            echo "Mi nombre es $this->nombre y tengo $this->edad años de edad";
        }
    }
//creacion de objeto
$miPersona = new Persona("Edwin");
$miPersona->edad = "39";
$miPersona->saludar();
echo "<br>";
$miPersona->presentacion();
//$Persona->cantidad;
//$miPersona2 = new Persona("Estuardo");
//$miPersona2->edad = "15";
//$miPersona2->presentacion();


//Mi nombre es Edwin Paredes y tengo 39 años"



    




?>