<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 13</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>


<h1>Soluciones de los ejercicios</h1>
<h2>Ejercicio 4</h2>

<div class="main">
    <div>
    <p>13. Escribe un script PHP que inserte en una especificada 
        posición una cadena dada:</p>
    </div>
    <div>
        <?php
            $str = "Hola, qué tal?";
            $str2 = "Maria";
            $pos = 4;
            $finalStr = substr($str, 0, $pos) . $str2 . substr($str, $pos);    
            echo $finalStr;
         ?>
    </div>

    <div class="innerDiv">
        <h3>Código fuente:</h3>
        
    </div>
    <img src="13.png" alt="">
    <li><a class="button goback" href="index.php">Volver a los ejercicios</a></li>

 
    

</div>


</body>

</html>