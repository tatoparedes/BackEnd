<h1>Empezando clase Semana 6</h1>
<?php
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

?>