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
    <h2>Ejercicio 10</h2>

    <div class="main">
        <div>

            <p> 10. Escribe un script PHP que separe una cadena y su resultado sea un array.
                <br>Cadena de ejemplos : "Uno, dos, tres, cuatro";
                <br>Resultado esperado : ["Uno", "dos", "tres", "cuatro"]
            </p>

        </div>
        <div>
            <?php
        $str = "Uno, dos, tres, cuatro";
        $arr = explode(', ', $str);
        echo '<pre>'. var_dump($arr) . '</pre>';

         ?>
        </div>

        <div class="innerDiv">
            <h3>Código fuente:</h3>

        </div>
        <img src="10.png" alt="">
        <li><a class="button goback" href="index.php">Volver a los ejercicios</a></li>




    </div>


</body>

</html>