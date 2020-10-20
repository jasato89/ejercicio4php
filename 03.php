<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>

<h1>Soluciones de los ejercicios</h1>
<h2>Ejercicio 3</h2>

<div class="main main2">

    <div>
        <p>
        // 3. Escribe un script PHP que compruebe si la cadena indicada contiene la palabra "cuyo"
// cadena : 'En un lugar de la mancha de cuyo nombre.'
// palabra a buscar: "cuyo".
        </p>
    </div>

    <div>

        <?php 

        $cadena = "En un lugar de la mancha cuyo";
        $valor = "cuyo";
        if (strpos($cadena, $valor)) {
            echo "'$valor' se encuentra en la cadena '$cadena'"; 
        } else {
            echo "'$valor' no se encuentra en la cadena '$cadena'"; 

        }

         ?>
    </div>

    <div class="innerDiv">
        <h3>Código fuente:</h3>
        
    </div>
    <img src="03.png" alt="">
    <li><a class="button goback" href="index.php">Volver a los ejercicios</a></li>

 

</div>

</body>

</html>