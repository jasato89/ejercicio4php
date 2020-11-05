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
<h2>Ejercicio 4</h2>

<div class="main">
    <div>
    <p>19. Escribe un script PHP que seleccione las primera
         cinco palabras:
        <br>Cadena de ejemplo : 'En un lugar de la de cuyo nombre'</p>
    </div>
    <div>
        <?php
        $str = 'En un lugar de la de cuyo nombre';
        $newStr = "";

        $arr = explode(" ", $str);

        for ($i=0; $i < 5; $i++) { 
            $newStr = $newStr . $arr[$i] . " ";
        }
        echo $newStr;

         ?>
    </div>

    <div class="innerDiv">
        <h3>Código fuente:</h3>
        
    </div>
    <img src="04.png" alt="">
    <li><a class="button goback" href="index.php">Volver a los ejercicios</a></li>

 
    

</div>


</body>

</html>