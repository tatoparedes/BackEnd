

<h1>Empezando clase Semana 6</h1>
<?php
include ('funciones.php');
//crear funcion
function Saludar()
{
echo "Hola Mundo";    

}
//llamar funcion
Saludar();

echo "<br>";    

//funcion con parametros
function Sumar($num1,$num2)
{
$suma = $num1+$num2;
echo "La suma es $suma";    
}

Sumar(1,2);

echo "<br>";    

//funcion con return 

function Multiplicar($num1,$num2)
{
return $num1*$num2;
}

$resultado = Multiplicar(3,4);
echo "El resultado de la multiplicacion es $resultado";

echo "hola alumnos";

function test()
{
$nombre = "Juan";
}
//echo $nombre;

//Variables globales

echo "<br>";

$contador = 1;
function incrementar()
{
    global $contador;
    $contador++;
}
incrementar();
echo $contador;

$resultadoresta = restar(9,8);
echo "<br>";
echo 'La resta es' ,$resultadoresta;
?>