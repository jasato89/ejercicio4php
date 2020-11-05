<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>


<h1>Soluciones de los ejercicios</h1>
<h2>Ejercicio 15</h2>

<div class="main">
    <div>
 
        <p>15. Escribe un script PHP que elimine todos los
             ceros a la izquierda de una cadena:</p>

    </div>
    <div>
        <?php
        $str = "000Hola qué tal";
        $char;
        $counter = 0;
        
        if (substr($str, $counter, 1) == "0" ) {
            do {
                $char = substr($str, $counter, 1);
                $counter++;
            } while ($char == "0");
            $char =substr($str, $counter - 1);
        } else {
            $char = substr($str, $counter);
        }

        echo $char;

        
         ?>
    </div>

    <div class="innerDiv">
        <h3>Código fuente:</h3>
        
    </div>
    <img src="15.png" alt="">
    <li><a class="button goback" href="index.php">Volver a los ejercicios</a></li>

 
    

</div>


</body>

</html>