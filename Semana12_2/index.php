    <?php
if (!isset($_GET['num1']) or empty($_GET['num1'])   )
{
   $num1 =  0;
}
else
{
  $num1 =  $_GET['num1'];            
}


if (!isset($_GET['num2']) or empty($_GET['num2'])   )
{
    $num2 =  0;
}
        else
        {
        $num2 =  $_GET['num2'];            
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
   Numero 1 : <input type="number" name = "num1" required>
   Numero 2 : <input type="number" name = "num2" required>

<button type="submit" name="Sumar">Sumar</button>  
<button type="submit" name="Restar">Restar</button>  
<button type="submit" name="Multiplicar">Multiplicar</button>  
<button type="submit" name="Dividir">Dividir</button>  


</form>

<?php
echo "La suma es $resultado";
?>
    
</body>
</html>