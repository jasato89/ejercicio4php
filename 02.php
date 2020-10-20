<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>


<h1>Soluciones de los ejercicios</h1>
<h2>Ejercicio 2</h2>

<div class="main main2">

    <div>
        <p>// 2. Escribe un script PHP para dividir la siguiente cadea:
// Cadena de entrada: '082307'
// Salida esperada : 08:23:07
        </p>
    </div>
    <div>
        <?php 

            $cadenaEntrada = "082307";
            echo substr($cadenaEntrada, 0, 2)
             . ":" . substr($cadenaEntrada, 2, 2) .
              ":" . substr($cadenaEntrada, 4, 2);          

        ?>
    </div>

    <div class="innerDiv">
        <h3>Código fuente:</h3>
    </div>
    <img src="02.png" alt="">
    <a class="button goback" href="index.php">Volver a los ejercicios</a>
    

 
    

</div>

</body>

</html>