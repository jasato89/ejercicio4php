<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>


<h1>Soluciones de los ejercicios</h1>
<h2>Ejercicio 9</h2>

<div class="main">
    <div>
        <p>
        // 8. Escribe un script PHP que remplace la palabra "lugar" por "planeta"
// Cadena de ejemplo : 'En un lugar de la mancha de cuyo nombre.'
// Resultado esperado : En un planeta de la mancha de cuyo nombre..
        </p>
    </div>
    <div>
        <?php
        $cadena = "En un lugar de la mancha de cuyo nombre.";
        echo str_replace("lugar", "planeta", $cadena);
         ?>
    </div>

    <div class="innerDiv">
        <h3>Código fuente:</h3>
        
    </div>
    <img src="08.png" alt="">
    <li><a class="button goback" href="index.php">Volver a los ejercicios</a></li>

 
    

</div>


</body>

</html>