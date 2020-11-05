<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 12</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>


<h1>Soluciones de los ejercicios</h1>
<h2>Ejercicio 4</h2>

<div class="main">
    <div>
    <p>12. Escribe un script PHP que imprima el siguiente 
        caracter de un caracter dado:</p>
    </div>
    <div>
        <?php
        $str = 'Buscando el carácter zeta';
        $char = 'z';
        $charPos = strpos($str, $char);
        $nextChar = substr($str, $charPos + 1, 1);
        echo $nextChar;
         ?>
    </div>

    <div class="innerDiv">
        <h3>Código fuente:</h3>
        
    </div>
    <img src="12.png" alt="">
    <li><a class="button goback" href="index.php">Volver a los ejercicios</a></li>

 
    

</div>


</body>

</html>