<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Condicional IF</h1>
    <?php
    $a = 8;
    $b = 3;
    echo "Valor de a: ",$a," y el valor de b:",$b,"<br>";
    if ($a<$b)
    {
    echo "a es menor que b";
    }
    else
    {
    echo " a no es menor que b";
    }
    ?> 
</body>
</html>
<!--¿Qué hace la sentencia IF…ELSE?
    1.Establece una condicion, que al evaluarla nos da
    dos posibles alternativas, cuando es verdadero
    realiza ciertas acciones y-->