<?php

    print_r("1.6 Isset() y Empty()");

    /*isset() y empty() son dos funciones en PHP utilizadas para verificar el estado de una variable.*/


    print_r("isset()");

    /*La función isset() se utiliza para verificar si una variable está definida y tiene un valor asignado.
    Retorna true si la variable existe y tiene un valor distinto de null.
    Retorna false si la variable no existe o tiene un valor igual a null.*/

    /*ejemplo*/

    $nombre = "Juan";
    var_dump(isset($nombre)); // bool (true)
    
    $TI = null;
    var_dump(isset($TI)); // bool (false)
    

    print_r("empty()");

    /*La función empty() se utiliza para verificar si una variable está vacía.
    Retorna true si la variable no existe, tiene un valor igual a null, una cadena vacía, cero (0), un array vacío o un objeto sin propiedades.
    Retorna false si la variable tiene algún valor asignado.*/

    /*ejemplo*/

    $nombre = "Juan";
    var_dump(empty($nombre)); // bool (false)
    
    $edad = 0;
    var_dump(empty($edad)); // bool (true)
     
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