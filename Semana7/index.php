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
$rangos = range(1,100);
print_r($rangos);

echo '<br>';

$letras = range('a','p');
print_r($letras);

echo '<br>';

$directorios = scandir('C:\xampp\htdocs');
print_r($directorios);



/*
foreach($animales as $item)
{
    echo $item,'<br>';
    
}
    */



?>