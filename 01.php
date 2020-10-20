<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>


<h1>Soluciones de los ejercicios</h1>
<h2>Ejercicio 1</h2>

<div class="main">
    <div>
    <p></p>// 1. Escribe un script PHP para:
// a) transforma un cadena con todas sus letras en mayúsculas.
// b) transforma un cadena con todas sus letras en minúsuclas.
// c) primera letra de la cadena en mayúsculas.
// d) primera letra de cada palabra de mi cadena en mayúsculas.
// La cadena a transformar es: "En un lugar de la mancha de cuyo nombre"
    </div>

    <div>
        <?php 
        $cadena = "en un lugar de la mancha de cuyo nombre";
        echo strtoupper($cadena);
        echo "<br>";
        echo strtolower($cadena);
        echo "<br>";
        echo ucfirst($cadena);
        echo"<br>";
        echo ucwords($cadena);

         ?>
    </div>

    <div class="innerDiv">
        <h3>Código fuente:</h3>
        
    </div>
    <img src="01.png" alt="">
    <li><a class="button goback" href="index.php">Volver a los ejercicios</a></li>

 
    

</div>

</body>

</html>