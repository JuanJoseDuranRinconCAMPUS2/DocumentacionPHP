<?php

    print_r("1.3 Tipos de datos");

    /*PHP tiene varios tipos de datos incorporados que se utilizan 
    para almacenar y manipular diferentes tipos de información.*/

    print_r("Entero (int)");

    /*Representa números enteros sin punto decimal. Puede ser positivo o negativo. */

    /*ejemplo*/

    $edad = 17;       
    var_dump($edad); // int(17)

    print_r("Flotante (float)");

    /*Representa números decimales o de punto flotante. */

    /*ejemplo*/
    
    $medida = 20.24;       
    var_dump($medida); // float(20.24)

    print_r("Cadena de texto (string)");

    /*Representa una secuencia de caracteres. Puede ser texto entre comillas simples ('') o comillas dobles (""). */

    /*ejemplo*/
    
    $mensaje = "Hola, mundo";      
    var_dump($mensaje); // string(11) "Hola, mundo"

    print_r("Booleano (bool)");

    /*Representa un valor de verdadero (true) o falso (false). Se utiliza para evaluar condiciones. */

    /*ejemplo*/
    
    $activacion = true;       
    var_dump($activacion); // bool(true)

    print_r("Arreglo (array)");

    /*Representa una colección de elementos. Puede contener diferentes tipos de datos, 
    como enteros, cadenas, objetos, etc. */

    /*ejemplo*/
    
    $videojuegos = [
        "Super Mario Bros",
        "The Legend of Zelda",
        "Final Fantasy",
        "Minecraft",
        "Grand Theft Auto",
        "Assassin's Creed"
    ];       
    var_dump($videojuegos); // array(6) { [0]=> string(16) "Super Mario Bros" [1]=> string(19) 
    //"The Legend of Zelda" [2]=> string(13) "Final Fantasy" [3]=> string(9) "Minecraft" [4]=> string(16) "
    //Grand Theft Auto" [5]=> string(16) "Assassin's Creed" }

    print_r("Objeto (object)");

    /*Representa una instancia de una clase. Los objetos tienen propiedades y métodos 
    que permiten acceder y manipular sus datos. */

    /*ejemplo*/
    
    class Camper{
        public $Nombre;
        public $Edad;
        protected $TI;

        public function __construct($nombre, $edad, $TI) {
            $this->Nombre = $nombre;
            $this->Edad = $edad;
            $this->TI = $TI;

        }
    }
    $camper1 = new Camper("Juan", 17, "1231243");      
    var_dump($camper1); // object(Camper)#1 (3) { ["Nombre"]=> string(4) "Juan" ["Edad"]=> int(17) ["TI":protected]=> string(7) "1231243" }

    print_r("Recurso (resource)");

    /* Representa una referencia externa a un recurso, como un archivo, una conexión 
    de base de datos, entre otros. Los recursos son gestionados internamente por PHP. */

    /*ejemplo*/
    $archivo = fopen("mi_archivo.txt", "r");
    var_dump($archivo); // resource(3) of type (stream)

    print_r("Nulo (null)");

    /*Representa la ausencia de valor. Se utiliza cuando una variable no tiene un 
    valor asignado o se desea eliminar su contenido. */

    /*ejemplo*/
    
    $posNada = null;       
    var_dump($posNada); // NULL

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