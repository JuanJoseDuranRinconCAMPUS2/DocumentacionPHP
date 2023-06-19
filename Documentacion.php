<?php

    print_r("1.7 Estructuras de control");

    /*isset() y empty() son dos funciones en PHP utilizadas para verificar el estado de una variable.*/


    print_r("Estructura condicional");

    echo "if-else";

    /*Permite ejecutar un bloque de código si se cumple una condición, y otro bloque 
    de código si no se cumple la condición.*/

    /*ejemplo*/

    $edad = 25;
    $es_estudiante = true;

    if ($edad >= 18) {
        echo "Eres mayor de edad.";

        if ($es_estudiante) {
            echo " Además, eres un estudiante.";
        } else {
            echo " No eres un estudiante.";
        }
    } else {
        echo "Eres menor de edad.";
    }
    
    echo "switch-case";

    /*Permite evaluar múltiples casos y ejecutar diferentes bloques de código 
    según el caso que se cumpla.*/

    /*ejemplo*/

    $opcion = "B";

    switch ($opcion) {
        case "A":
            echo "Seleccionaste la opción A";
            break;
        case "B":
            echo "Seleccionaste la opción B";
            break;
        case "C":
            echo "Seleccionaste la opción C";
            break;
        case "D":
            echo "Seleccionaste la opción D";
            break;
        default:
            echo "Opción inválida";
            break;
    }

    echo "match";

    /*La estructura "match" en PHP, introducida en la versión 8.0, es una alternativa 
    a la estructura "switch-case" para realizar comparaciones más concisas y expresivas. 
    Proporciona una sintaxis más simple y clara para realizar comparaciones de valores 
    y ejecutar bloques de código en función del resultado.*/

    /*ejemplo*/

    $color = "rojo";

    $match = match($color) {
        'rojo' => "es color es $color",
        'azul' => "es color es $color",
        'verde' => "es color es $color",
        'amarillo' => "es color es $color",
        'dorado' => "es color es $color",
        'NULL', 'null' => "no hay ninguno",
        default => '',
    };

    var_dump($match);

    print_r("Estructura repetición");

    echo "while";

    /*Permite ejecutar repetidamente un bloque de código mientras se 
    cumpla una condición.*/

    /*ejemplo*/

    $numero = 1;
    $suma = 0;

    while ($numero <= 10) {
        $suma += $numero;
        $numero++;
    }

    echo "La suma de los números del 1 al 10 es: " . $suma;

    echo "do-while";

    /*Similar a la estructura while, pero garantiza que el bloque de 
    código se ejecute al menos una vez antes de verificar la condición.*/

    /*ejemplo*/

    $intentos_maximos = 3;
    $intentos = 0;
    $contrasena_correcta = "secreto";
    $contrasena_ingresada = "";

    do {
        $intentos++;
        
        echo "Introduce la contraseña: ";
        $contrasena_ingresada = readline();
        
        if ($contrasena_ingresada == $contrasena_correcta) {
            echo "¡Contraseña correcta! Acceso concedido.";
            break;
        } else {
            echo "Contraseña incorrecta. Intento $intentos de $intentos_maximos.";
        }
    } while ($intentos < $intentos_maximos);

    if ($intentos == $intentos_maximos) {
        echo "Has excedido el número máximo de intentos. Acceso denegado.";
    }

    echo "for";

    /*Permite ejecutar un bloque de código un número específico de veces.*/

    /*ejemplo*/

    $base = 2;
    $potencia = 10;
    $resultado = 1;

    for ($i = 1; $i <= $potencia; $i++) {
        $resultado *= $base;
    }

    echo "El resultado de elevar $base a la potencia $potencia es: $resultado";


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