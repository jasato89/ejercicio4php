<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 11</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>


<h1>Soluciones de los ejercicios</h1>
<h2>Ejercicio 11</h2>

<div class="main">
    <div>
    <p>11. Escribe un script PHP que obtenga de una URL 
        el nombre del fichero sin extensión:</p>
    
    </div>
    <div>
        <?php
        $url = "www.example.com/public_html/index.php?name=whatever";
        $str = basename(parse_url($url, PHP_URL_PATH));
        $arr = explode(".", $str, 2);
        $str = $arr[0];
        echo $str;
         ?>
    </div>

    <div class="innerDiv">
        <h3>Código fuente:</h3>
        
    </div>
    <img src="11.png" alt="">
    <li><a class="button goback" href="index.php">Volver a los ejercicios</a></li>

 
    

</div>


</body>

</html>