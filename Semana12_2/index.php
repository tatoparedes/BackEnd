<?php
if isset($_GET['num1'])
{
$num1 =  $_GET['num1'];
}
else
{
$num1 =  0;
}

if isset($_GET['num2'])
{
$num2 =  $_GET['num2'];
}
else
{
$num2 =  0;
}
$resultado = $num1 + $num2;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="GET" >
   Numero 1 : <input type="number" name = "num1" >
   Numero 2 : <input type="number" name = "num2" >
<button type="submit" name="Sumar">Sumar</button>  
</form>

<?php
echo "La suma es $resultado";
?>
    
</body>
</html>