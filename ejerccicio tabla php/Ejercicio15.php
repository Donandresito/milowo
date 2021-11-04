<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Condicional Switch. Ejemplo</h1>
<?php
    /*Declaramos una variable con un valor de muestra */
    $posicion = "arriba";
    echo "La variable posicion es ",$posicion;
    echo "<br>";
    
    switch($posicion){
        case "arriba": // Primer condicion si es arriba
        echo "La variable contiene el valor de arriba";
        break;
        case "abajo": //Segunda condicion del supuesto
        echo "La variable contiene el valor de abajo";
        break;
        default: //Condicion por default o si no es ninguna
        echo "La variable contiene otro valor distinto arriba y abajo";
    }
?> 
</body>
</html>
<!--¿Cuál es la diferencia de la instrucción SWITCH
    con la instrucción IF? 
    1.Cuando tenemos multiples opciones (mas de 2) es
    mas sencillo de utiilzar que la instrucción IF. De lo
    contrario necesitariamos hacer IF anidados -->
