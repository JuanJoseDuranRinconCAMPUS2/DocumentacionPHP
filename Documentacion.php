<?php

    print_r("1.2 Variables y constantes");

    /*En PHP, las variables y las constantes se utilizan para almacenar y 
    manipular datos durante la ejecución de un programa.*/

    print_r("Variables");

    /*Una variable es un contenedor que almacena un valor que puede cambiar 
    durante la ejecución del programa.
    Se declaran utilizando el símbolo $ seguido de un nombre válido de variable
    y se les asigna un valor con el operador de asignación =.
    No necesitan un tipo de dato específico y pueden almacenar diferentes tipos 
    de datos, como cadenas de texto, números, arreglos, objetos, etc.
    El valor de una variable puede ser modificado en cualquier momento durante 
    la ejecución del programa. */

    /*ejemplo*/

    $nombre = "Juan";  // Variable que almacena una cadena de texto
    $edad = 17;       // Variable que almacena un número entero
    $pi = 3.14;       // Variable que almacena un número decimal


    print_r("Constantes");

    /* Una constante es un identificador (nombre) que se utiliza para representar 
    un valor que no cambia durante la ejecución del programa.
    Se declaran utilizando la función define() y se les asigna un valor.
    Las constantes se definen una vez y no pueden cambiar su valor posteriormente.
    Por convención, los nombres de las constantes se escriben en mayúsculas.
    Las constantes son útiles para definir valores fijos, como configuraciones, 
    valores predeterminados, nombres de API, etc. */

    /*ejemplo*/

    define("PI", 3.1416);               // Constante que almacena el valor de PI
    define("NOMBRE_EMPRESA", "CAMPUS");   // Constante que almacena el nombre de la empresa
    define("API1", "POKEAPI"); //constante que almacena el nombre de la api a utilizar


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