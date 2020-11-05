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
    <h2>Ejercicio 20</h2>

    <div class="main">
        <div>
            <p>20. Escribe un script PHP que borre la(s) comas(s) de la siguiente cadena
                <br>Cadena de ejemplo : '2,543.12'
                <br>Valor esperado : 2543.12
                <br>Cadena de ejemplo : '345,102,543.12'
                <br>Valor esperado : 3451022543.12
            </p>

        </div>
        <div>
            <?php
        $str = "2,543.12";
        echo str_replace(",", "", $str);
         ?>
        </div>

        <div class="innerDiv">
            <h3>Código fuente:</h3>

        </div>
        <img src="20.png" alt="">
        <li><a class="button goback" href="index.php">Volver a los ejercicios</a></li>




    </div>


</body>

</html>