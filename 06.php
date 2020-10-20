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
        // 4. Escribe un script PHP para extraer el nombre del fichero de la siguiente url:
// cadena : 'www.example.com/public_html/index.php'
// Valor esperado(fichero) : 'index.php'
        </p>
    </div>
    <div>
        <?php
        $url = "www.example.com/public_html/index.php";
        echo substr($url, strrpos($url, '/')+1) . "\n";
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