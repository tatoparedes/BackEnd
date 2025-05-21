<?php
class Estudiante
{
    private $nombre;
    private $nota1;
    private $nota2;
    private $nota3;

    public function __construct($nombre)    
    {
        $this->nombre =  $nombre;
        $this->nota1= 0;
        $this->nota2= 0;
        $this->nota3= 0;
    }

    public function |($Nota1) //: void
    {
        $this->nota1= $Nota1;
    }

    public function IngresaNota2($Nota2) //: void
    {
        $this->nota2= $Nota2;
    }

    public function IngresaNota3($Nota3) //: void
    {
        $this->nota3= $Nota3;
    }

    public function IngresaNotas($Array) //: void
    {
        $this->nota1= $Array[0];
        $this->nota2= $Array[1];
        $this->nota3= $Array[2];
        //print_r($Array);
    }

    public function Presentacion ()
    {
        return "Mi nombre es $this->nombre";
    }

    public function DevolverCalificacion()
    {
        $promedio = ($this->nota1 + $this->nota2 + $this->nota3)/3;
        return "Sr $this->nombre su promedio es $promedio";
    }
}

$miEstudiante = new Estudiante("Edwin");
$miEstudiante->IngresaNota1(10);
$miEstudiante->IngresaNota2(15);
$miEstudiante->IngresaNota3(20);
$miEstudiante->IngresaNotas([15,14,13]);
echo $miEstudiante->Presentacion();
echo "<br>";
echo $miEstudiante->DevolverCalificacion();

?>