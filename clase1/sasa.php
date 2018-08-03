<?php
// echo "<h1> Programando con PHP</h1>"; 
// echo "<h2> Trabajando con Variables</h2>";

// $nombre = "Federico";
// $work = 'programacion desde 2017.5';
// $edad = 26;
// $sueldo = 75000.73; 
// $uno = "Tres";
// $dos = "tristes";
// $tres = "tigres";
// $cuatro = "comen";
// $cuatro2 = 'trigo';
// $cinco = "en";
// $seis= "un";
// $siete= "trigal";

// echo $nombre ." " . "tiene" . " " . "$edad" . " " . "anos";
// echo "<hr>";
// echo "$uno" ." " . "$dos" . " " . "$tres" . " " . "$cuatro" . " " . "$cuatro2" . " " . "$cinco" . " " . "$seis" . " " . "$siete";

$animales = [];
$animales[] = 'perro';
$animales[] = 'gato';
$animales[] = 'girafa';
$animales[] = 'tiburon';
$animales[] = 'camaleon';
$animales[] = 'cebra';
$animales[] = 'leon';
$animales[0] = 'salmon';
$animales[100] = 'vaca';
$animales[16] = 'dinosaurio';

var_dump($animales);

echo 'Me gustan los animales:' . " " . "$animales[0], $animales[1], $animales[2], $animales[3], $animales[4], $animales[5], $animales[6].";

$auto = [];
$auto = [
    'marca' => ['verde', 'negro'],
    'modelo' => ['nose', 'xd'],
    'color' => ['verde', 'negro'],
    'anio' => [2017, 2018],
    'patente' => ['q','a']
];

$auto[0] = 'duenio';

var_dump($auto);

?>

