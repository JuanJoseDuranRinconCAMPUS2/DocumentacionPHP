<?php

    print_r("1.4 Números y operadores");

    /*En PHP, puedes trabajar con números y utilizar varios operadores 
    para realizar operaciones matemáticas y comparaciones.*/

    $num1 = 6;
    $num2 = "3";

    print_r("Operadores aritméticos");

    /*suma "+"*/

    /*ejemplo*/

    $resultado = $num1 + $num2;       
    var_dump($resultado); // int(9)

    /*suma "-"*/

    /*ejemplo*/

    $resultado = $num1 - $num2;       
    var_dump($resultado); // int(3)

    /*suma "*"*/

    /*ejemplo*/

    $resultado = $num1 * $num2;       
    var_dump($resultado); // int(18)

    /*suma "/"*/

    /*ejemplo*/

    $resultado = $num1 / $num2;       
    var_dump($resultado); // int(2)

    print_r("Operadores de asignación");

    /*Asignación "="*/

    /*ejemplo*/

    $variable = 10;      
    var_dump($variable); // int(10)

    /*"+=" (adición y asignación)*/

    /*ejemplo*/

    $numero = 10;
    $numero += 5; // $numero ahora es igual a 15
    var_dump($numero); // int(15)

    /*"-=" (sustracción y asignación)*/

    /*ejemplo*/

    $numero = 20;
    $numero -= 8; // $numero ahora es igual a 12
    var_dump($numero); // int(12)

    /*"*=" (multiplicación y asignación)*/

    /*ejemplo*/

    $numero = 5;
    $numero *= 3; // $numero ahora es igual a 15         
    var_dump($numero); // int(15)

    /*"/=" (división y asignación)*/

    /*ejemplo*/

    $numero = 30;
    $numero /= 6; // $numero ahora es igual a 5
    var_dump($numero); // int(5)

     /*"%=" (módulo y asignación)*/

    /*ejemplo*/

    $numero = 17;
    $numero %= 5; // $numero ahora es igual a 2 (resto de la división de 17 entre 5)
    var_dump($numero); // int(2)

    print_r("Operadores de comparación");

    /*Los operadores de comparación se utilizan para comparar valores y devolver un 
    resultado booleano (true o false) en función de si la comparación es verdadera o falsa.*/

    echo("== (igual)");
    /* Compara si dos valores son iguales, sin tener en cuenta el tipo de dato.*/
    /*ejemplo*/
    var_dump($num1 == $num2); // false

    echo("=== (idéntico)");
    /* Compara si dos valores son iguales y del mismo tipo de dato.*/
    /*ejemplo*/
    var_dump($num1 === $num2); // false

    echo("!= o <> (diferente)");
    /* Compara si dos valores no son iguales.*/
    /*ejemplo*/
    var_dump($num1 <> $num2); // true

    echo("!== (no idéntico)");
    /* Compara si dos valores no son iguales o no son del mismo tipo de dato.*/
    /*ejemplo*/
    var_dump($num1 !== $num2); // true

    echo("> (mayor que)");
    /* Compara si el primer valor es mayor que el segundo valor.*/
    /*ejemplo*/
    var_dump($num1 > $num2); // true

    echo("< (menor que)");
    /* Compara si el primer valor es menor que el segundo valor.*/
    /*ejemplo*/
    var_dump($num1 < $num2); // false

    echo(">= (mayor o igual que)");
    /* Compara si el primer valor es mayor o igual que el segundo valor*/
    /*ejemplo*/
    var_dump($num1 >= $num2); // true

    echo("<= (menor o igual que)");
    /* Compara si el primer valor es menor o igual que el segundo valor.*/
    /*ejemplo*/
    var_dump($num1 <= $num2); // false

    echo("<=> (spaceship)");
    /* Compara dos valores y devuelve un número negativo si el primer valor es menor, 
    un número positivo si el primer valor es mayor, o cero si ambos valores son iguales.*/
    /*ejemplo*/
    var_dump($num1 <=> $num2); // 1

    print_r("Operadores lógicos");
    
    /*En PHP, los operadores lógicos se utilizan para combinar o negar condiciones lógicas.*/
    $edad = 12;
    $ciudad = "Santander";

    echo("AND (&&)");
    /* Devuelve true si todas las condiciones son verdaderas. */
    /*ejemplo*/
    var_dump($edad > 11 && $ciudad == "Santander"); // true

    echo("OR (||)");
    /* Devuelve true si al menos una de las condiciones es verdadera.*/
    /*ejemplo*/
    var_dump($edad >= 18 || $ciudad == "Santander"); // true

    echo("NOT (!)");
    /* Niega una condición. Si la condición es verdadera, ! la convierte en falsa, 
    y si es falsa, ! la convierte en verdadera.*/
    /*ejemplo*/
    $activo = false;
    var_dump(!$activo); // true

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