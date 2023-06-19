<?php

    print_r("1.5 Arreglos, Arreglos asociativos y funciones para arreglos");

    /*En PHP, los arreglos (arrays) son estructuras de datos que permiten almacenar 
    múltiples valores en una sola variable. Hay varios tipos de arreglos en PHP, 
    incluyendo arreglos indexados, arreglos asociativos y arreglos multidimensionales.*/


    print_r("Arreglos indexados");

    /*Un arreglo indexado se compone de elementos numerados secuencialmente, comenzando desde 0.
    Se puede acceder a los elementos utilizando sus índices numéricos.*/

    /*ejemplo*/

    $numeros = [10, 20, 30, 40, 50];
    echo $numeros[0];  // Imprime: 10
    echo $numeros[3];  // Imprime: 40
       
    var_dump($numeros); // array(5) { [0]=> int(10) [1]=> int(20) [2]=> int(30) [3]=> int(40) [4]=> int(50) }

    print_r("Arreglos asociativos");

    /*Un arreglo asociativo utiliza claves (keys) personalizadas en lugar de índices numéricos.
    Cada elemento del arreglo está compuesto por una clave y su respectivo valor.
    Se utiliza para asociar valores con nombres o identificadores.*/

    /*ejemplo*/

    $persona = [
        "nombre" => "Juan",
        "edad" => 17,
        "pais" => "colombia"
    ];
    echo $persona["nombre"];  // Imprime: Juan
    echo $persona["edad"];    // Imprime: 17
    
       
    var_dump($persona); // array(3) { ["nombre"]=> string(4) "Juan" ["edad"]=> int(17) ["pais"]=> string(8) "colombia" }

    
    print_r("Funciones para arreglos");

    /*En PHP, las funciones en array son funciones específicas que te permiten realizar 
    diversas operaciones y manipulaciones en los arreglos. Estas funciones están diseñadas 
    para facilitar el trabajo con los arreglos y ofrecen una amplia gama de funcionalidades.*/

    echo("count()");
    /* Devuelve el número de elementos en un arreglo.*/
    /*ejemplo*/
    $numeros = [1, 2, 3, 4, 5];
    var_dump(count($numeros));  // int 5

    echo("array_push()");
    /* Agrega uno o más elementos al final de un arreglo.*/
    /*ejemplo*/
    $frutas = ["manzana", "plátano"];
    array_push($frutas, "naranja", "uva");  // $frutas ahora es ["manzana", "plátano", "naranja", "uva"]
    var_dump($frutas);  // array(4) { [0]=> string(7) "manzana" [1]=> string(8) "plátano" [2]=> string(7) "naranja" [3]=> string(3) "uva" }

    echo("array_unshift()");
    /* Agrega uno o más elementos al final de un arreglo.*/
    /*ejemplo*/
    $frutas = ["manzana", "plátano"];
    array_unshift($frutas, "naranja", "uva");  // $frutas ahora es ["naranja", "uva", "manzana", "plátano"]
    var_dump($frutas);  // array(4) { [0]=> string(7) "naranja" [1]=> string(3) "uva" [2]=> string(7) "manzana" [3]=> string(8) "plátano" }


    echo("array_pop()");
    /* Elimina y devuelve el último elemento de un arreglo.*/
    /*ejemplo*/
    $numeros = [1, 2, 3, 4, 5];
    $ultimo = array_pop($numeros);  // $ultimo tendrá el valor 5, y $numeros será [1, 2, 3, 4]
    var_dump($numeros);  // array(4) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(4) }

    echo("array_shift()");
    /* Elimina y devuelve el primer elemento de un arreglo.*/
    /*ejemplo*/
    $numeros = [1, 2, 3, 4, 5];
    $primero = array_shift($numeros);  // $primero tendrá el valor 1, y $numeros será [2, 3, 4, 5]
    var_dump($numeros);  // array(4) { [0]=> int(2) [1]=> int(3) [2]=> int(4) [3]=> int(5) }

    echo("array_merge()");
    /* Combina dos o más arreglos en uno solo.*/
    /*ejemplo*/
    $array1 = [1, 2, 3];
    $array2 = [4, 5, 6];
    $merge = array_merge($array1, $array2);  // $combinado será [1, 2, 3, 4, 5, 6]
    var_dump($merge);  // array(6) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(4) [4]=> int(5) [5]=> int(6) }

    echo("array_key_exists()");
    /* Verifica si una clave existe en un arreglo asociativo.*/
    /*ejemplo*/
    $persona = ["nombre" => "Pedro", "edad" => 25];
    var_dump(array_key_exists("nombre", $persona));  // bool(true) 

    echo("in_array()");
    /* Verifica si un valor existe en un arreglo.*/
    /*ejemplo*/
    $numeros = [1, 2, 3, 4, 5];
    var_dump(in_array(3, $numeros));  // bool(true)

    echo("sort()");
    /* Ordena un arreglo en orden ascendente.*/
    /*ejemplo*/
    $numeros = [5, 2, 4, 1, 3];
    sort($numeros);  // $numeros será [1, 2, 3, 4, 5]
    var_dump($numeros); // array(5) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(4) [4]=> int(5) }
    
    echo("rsort()");
    /* Ordena un arreglo en orden descendente.*/
    /*ejemplo*/
    rsort($numeros);  // $numeros será [5, 4, 3, 2, 1]
    var_dump($numeros);  // array(5) { [0]=> int(5) [1]=> int(4) [2]=> int(3) [3]=> int(2) [4]=> int(1) 

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