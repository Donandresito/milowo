<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Tabla condicional 1</h1>
<?php
 /* Crearemos una tabla de valores de seno y coseno de 0 a 2
 en incrementos de 0.01. Los valores negativos que resulten los queremos
 mostrar en rojo, y los valores positivos en azul */
 /* En primer lugar vamos a crear una funcion con las condicionales 
 Aqui estamos usando la sentencion de FUNCTION al que le pasamos un valor
 dependiendo de este valor, ejecutamos una condicion IF..ELSE...
 y asignamos un color al tipo de letra para generar la tabla
 */
function muestra($valor) {
    if ($valor < 0.5)
    $color = "red";
    else
    $color = "blue";
    echo "<td><font color='$color'>$valor</font></td>\n";
    }
   ?>
   <table border="1">
   <?
    for ($x=0; $x<=2; $x+=0.01){
    echo "<tr>";
    muestra($x);
    muestra(sin($x));
    muestra(cos($x));
    echo "</tr>";
    }
   ?> 
</body>
</html>
<!--Explica que es lo que hace el
    script.
    1.  Utiliza las funciones sin() y cos() de php, asi como una funcion
    definida por el usuario llamada muestra
    Todas se ejecutan dentro de un ciclo desde 0 hasta 2, mediante un
    FOR y va mostrando los valores en una tabla usando etiquetas
    En la funcion muestra() se pasa el valor de la variable que va
    cambiando para cambiar colores de los resultados negativos en
    rojo de acuerdo a una condicion, usando las instrucciones IF.
    Tambien usamos algunas etiquetas HTML para dar esos colores-->



