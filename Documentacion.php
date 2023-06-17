<?php

    print_r("1.1 Funciones de salida en PHP");

    /*En la programación, las funciones de salida se utilizan 
    para mostrar información al usuario al finalizar la ejecución 
    de un proceso específico o al concluir una solicitud realizada 
    por el usuario final.*/

    print_r("echo");

    /*La función echo se utiliza para imprimir uno o más valores en la salida. 
    Puede imprimir cadenas de texto, variables y combinaciones de estos. */

    /*ejemplo*/

    $username = "Fred";
    echo "Hola, " . $username;  // Imprime: Hola, Fred

    print_r("print");

    /* La función print es similar a echo y se utiliza para imprimir un solo 
    valor en la salida. A diferencia de echo, print devuelve siempre el valor 1, 
    por lo que se puede utilizar en expresiones. */

    /*ejemplo*/

    $edad = 17;
    print $edad;  // Imprime: 17


    print_r("printf");

    /*La función printf se utiliza para imprimir una cadena de texto formateada 
    según un formato especificado. Permite definir marcadores de posición para 
    valores variables y controlar el formato de salida. */

    /*ejemplo*/

    $edadJ = 19;
    printf("La edad de jose es: %s", $edadJ);  // Imprime: la edad de jose es: 19

    /*formatos*/

    echo "%s";
    /* %s: Este formato se utiliza para imprimir una cadena de texto. */
    $nombre = "Juan";
    printf("Hola, %s", $nombre);  // Imprime: Hola, Juan

    echo "%d o %i";
    /* Estos formatos se utilizan para imprimir números enteros (positivos o negativos) */
    $edad = 18;
    printf("Tienes %d años", $edad);  // Imprime: Tienes 18 años

    echo "%f";
    /* Este formato se utiliza para imprimir números de punto flotante (decimales). 
    Puedes especificar la precisión decimal utilizando el punto (.) seguido de un número.  */
    $precio = 9.99;
    printf("El precio es: %.2f", $precio);  // Imprime: El precio es: 9.99

    echo "%c";
    /* Este formato se utiliza para imprimir un carácter ASCII representado por su 
    código numérico.  */
    $asciiCode = 65;
    printf("El carácter correspondiente es: %c", $asciiCode);  // Imprime: El carácter correspondiente es: A
    
    echo "%b";
    /* Este formato se utiliza para imprimir un número entero en representación binaria.  */
    $numero = 10;
    printf("El número en binario es: %b", $numero);  // Imprime: El número en binario es: 1010
    

    /*Fin de los formatos*/

    print_r("var_dump");
    
    /*La función var_dump muestra información detallada sobre una variable, incluyendo su tipo y valor. 
    Es útil para fines de depuración y desarrollo. */

    /*ejemplo*/

    $array = [1, 2, 3];
    var_dump($array);
    /* Imprime:
    array(3) {
    [0]=>
    int(1)
    [1]=>
    int(2)
    [2]=>
    int(3)
    }
    */

    print_r("print_r");

    /*La función print_r se utiliza para imprimir información sobre una variable de una manera más 
    legible para los humanos. Es útil para imprimir arreglos y objetos.  */

    /*ejemplo*/

    $persona = array("nombre" => "María", "edad" => 30);
    print_r($persona);
    /* Imprime: Array ( [nombre] => María [edad] => 30 )*/

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