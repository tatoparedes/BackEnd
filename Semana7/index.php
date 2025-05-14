<?php
$animales = ['perro','gato','cuy'];
print_r($animales);

echo '<br>';

$futbol = array('cristal','universitario','alianza');
print_r($futbol);

echo '<br>';

$asociativo = [1 => 'Edwin','0' => 'Paredes Vásquez','Edad' => 39];
print_r($asociativo);

echo '<br>';
echo $animales[0];

echo '<br>';
echo $futbol[0];

echo '<br>';
echo $asociativo['Edad'];

list($siemprecampeona, $alvecescampenoana , $nosabecampeonar) = $futbol;

echo '<br>';
echo 'Siempre campeona: ', $siemprecampeona;

echo '<br>';
echo 'A veces campeona: ',$alvecescampenoana;

echo '<br>';
echo 'No sabe campeonar: ', $nosabecampeonar;

echo '<br>';
$cadena = 'Esta clase no me aburre';
$arreglocadena = explode(' ',$cadena);
print_r($arreglocadena);

echo '<br>';
$rangos = range(1,5);
print_r($rangos);

echo '<br>';

$letras = range('a','p');
print_r($letras);

echo '<br>';

$directorios = scandir('C:\xampp\htdocs');
print_r($directorios);

echo '<br>';
echo '<br>';

$futbol2 = array('cristal','universitario','alianza');

if (in_array('cristal',$futbol2))
{
    echo 'Si esta';
}
else
{
    echo 'No esta';
}

unset($futbol2[2]);
echo '<br>';
print_r($futbol2);
echo '<br>';
 $frutas = ['manzana','uva','mandarina','platano']; 
echo current($frutas);
next($frutas);
next($frutas);
echo '<br>';
echo current($frutas);
echo '<br>'; 
$frutas = array_reverse($frutas);
print_r($frutas);
shuffle($frutas);
echo '<br>'; 
print_r($frutas);
echo '<br>'; 

echo '<h1>pilas</h1>'; 
array_push($frutas, "Pera"); //agregar al final
echo '<br>'; 
print_r($frutas);
array_pop($frutas); //elimina el final
echo '<br>'; 
print_r($frutas);

echo '<h1>colas</h1>'; 

array_unshift($frutas, "Fresa"); //agregar al inicio
echo '<br>'; 
print_r($frutas);
$eliminado = array_shift($frutas); //elimina el inicio
echo '<br>'; 
print_r($frutas);
echo '<br>'; 
echo $eliminado;


echo '<h1>Ordenado</h1>'; 
sort($frutas);
echo '<br>'; 
print_r($frutas);


?>