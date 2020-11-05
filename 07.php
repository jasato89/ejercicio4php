<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>


<h1>Soluciones de los ejercicios</h1>
<h2>Ejercicio 7</h2>

<div class="main">
    <div>
        <p>
    7. Escribe un script PHP que genere una contraseña aleatoria desde la siguiente cadena (no usar la
función random):
Cadena de ejemplo : '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz'
 Nota : La longitud de la contraseña puede ser de 6, 7, 8 etc.
        </p>
    </div>
    <div>
        <?php
        $cadena = "1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz";
        echo substr(str_shuffle($cadena), 0, 1).substr(md5(time()),1);
         ?>
    </div>

    <div class="innerDiv">
        <h3>Código fuente:</h3>
        
    </div>
    <img src="07.png" alt="">
    <li><a class="button goback" href="index.php">Volver a los ejercicios</a></li>

 
    

</div>


</body>

</html>