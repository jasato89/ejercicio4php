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
            <p>
                9. Escribe un script PHP que encuentre el primer caracter diferente comparando dos cadenas.
                <br> cadena1 : 'football'
                <br> cadena2 : 'footboll'
                <br> Resultado esperado : La primera diferencia entre las dos cadenas está en la posición 5: "a" <> "o"

            </p>
        </div>
        <div>
            <?php
        $str1 = "football";
        $str2 = "footboll";
        $char1;
        $char2;
        $counter = 0;

        do {
            $char1 = substr($str1, $counter, 1);
            $char2 = substr($str2, $counter, 1);
            $counter++;
            
        } while ($char1 == $char2);

        echo 'La primera diferencia entre las dos cadenas está en la posición ' . $counter . ': '. $char1.' <> ' . $char2;

         ?>
        </div>

        <div class="innerDiv">
            <h3>Código fuente:</h3>

        </div>
        <img src="09.png" alt="">
        <li><a class="button goback" href="index.php">Volver a los ejercicios</a></li>




    </div>


</body>

</html>