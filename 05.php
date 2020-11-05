<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>


<h1>Soluciones de los ejercicios</h1>
<h2>Ejercicio 5</h2>

<div class="main">
    <div>
        <p>
        // 5. Escribe un script PHP que extraiga el nombre de usuario del siguiente email.
// Cadena de ejemplo : 'rayy@example.com'
// Valor esperado : 'rayy'
        </p>
    </div>
    <div>
        <?php
        $email = "ravy@example.com";
        echo substr($email, 0, strpos($email, '@'));
         ?>
    </div>

    <div class="innerDiv">
        <h3>Código fuente:</h3>
        
    </div>
    <img src="05.png" alt="">
    <li><a class="button goback" href="index.php">Volver a los ejercicios</a></li>

 
    

</div>


</body>

</html>