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
<h2>Ejercicio 18</h2>

<div class="main">
    <div>
    <p>18. Escribe un script PHP que devuelva los 
        caracteres después del último "/" de una URL:</p>

        
    </div>
    <div>
        <?php
        $url = "www.example.com/public_html/index.php";
        echo substr(strrchr($url, "/"), 1);
         ?>
    </div>

    <div class="innerDiv">
        <h3>Código fuente:</h3>
        
    </div>
    <img src="18.png" alt="">
    <li><a class="button goback" href="index.php">Volver a los ejercicios</a></li>

 
    

</div>


</body>

</html>