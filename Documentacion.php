<?php

    print_r("1.8 Funciones definidas por el usuario");

    /*Las funciones definidas por el usuario en PHP te permiten crear bloques de código 
    reutilizables para llevar a cabo una tarea específica. Puedes definir tus propias 
    funciones para encapsular la lógica de tu programa y llamarlas en diferentes partes 
    del código según sea necesario.*/

    /* sintaxis */
    function nombreDeLaFuncion($parametro1, $parametro2) {
        // Código de la función
        // Puedes realizar operaciones y retornar un valor si es necesario
    }
    
    echo("Funciones que retornan valor");

    /*Las funciones en PHP pueden retornar valores utilizando la palabra clave "return". 
    Al utilizar "return", puedes enviar un valor de vuelta desde la función para que 
    pueda ser utilizado en otras partes del código. */

    /*ejemplo*/
    
    function sumar($num1, $num2) {
        $suma = $num1 + $num2;
        return " retorna el numero $suma";
    }
    
    $resultado = sumar(5, 3);  // Llamada a la función sumar con los valores 5 y 3
    echo $resultado;  // Imprime el resultado, en este caso, 8
    
    echo("Funciones que no retornan valor");

    /*En PHP, hay casos en los que puedes tener funciones que realizan ciertas operaciones 
    pero no retornan un valor específico. Estas funciones se denominan "funciones void" o 
    "procedimientos".*/

    /*ejemplo*/

    function saludar($nombre) {
        echo "¡Hola, $nombre!";
    }
    
    saludar("Juan");  // Imprime "¡Hola, Juan!"
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>DocumentacionPHP</title>
</head>
<body>
    <section class="visionBonita;3">
    <div class="mars"></div>
    <img src="img/space.png" class="logo-404"/><br><br><br><br><br>
    <img src="https://assets.codepen.io/1538474/meteor.svg" class="meteor" />
    <p class="title">Bienvenido a mi documentacion :3</p>
    <div class="boton" align="center">
        <a class="btn-back" href="https://github.com/JuanJoseDuranRinconCAMPUS2/DocumentacionPHP/commits/main" target="_blank">Mira Los Commits</a>
    </div><br>
    <p class="subtitle">
    En este proyecto, nos enfocaremos en crear una página de documentación 
    de PHP utilizando Git y GitHub. La documentación será generada y actualizada 
    mediante commits en el repositorio de GitHub.
    </p>
    <img src="https://assets.codepen.io/1538474/astronaut.svg" class="astronaut" />
    <img src="https://assets.codepen.io/1538474/spaceship.svg" class="spaceship" />
</body>
</html>