

<h1>Empezando clase Semana 6</h1>
<?php
require ('funciones.php');
//require ('funciones2.php');
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

$cadena = "Hola soy una cadena";

echo 'la longitud de esta cadena es ',strlen($cadena);
echo "<br>";
echo 'Esta cadena ahora esta en mayusculas ',strtoupper($cadena);
echo "<br>";
echo 'Esta cadena ahora esta en minusculas ',strtolower($cadena);
echo "<br>";
echo 'Cambio cadena por string ', str_replace ('cadena','string',$cadena);

echo "<br>";

$es = is_numeric(58);
if($es)
{
echo 'es numerico';
}

echo "<br>";

$es = is_numeric('a');
if($es)
{
echo 'es numerico';
}
else
{
    echo 'no es numerico';
}

echo "<br>";
//echo ini_get("display_errors");
echo ini_set("display_errors",0);
//echo ini_get("display_errors");

$otra =9;
echo $otra2;
?>