<?php
$dia = ["Lunes", "Martes","Miercoles","Jueves","Viernes","Sabado","Domingo"];
$evaluaciones = ["Regular", "Bueno", "Excelente"];
$nombre = "Daniel Fuentes";
$dni = 12345678;


$evaluacion = 2;

if($evaluaciones[$evaluacion] == "Regular"){
   $aumento = 10;
//    var_dump($aumento);
//    exit;
}
elseif($evaluaciones[$evaluacion] == "Bueno"){
    $aumento = 20;
    // var_dump($aumento);
    // exit;
}
else{
    $aumento = 30;
    //   var_dump($aumento);
    // exit;
}

$sueldo = 8000 + $aumento * 80;

$aumentob = $aumento * 8000 / 100;

if($evaluacion == 0 || 1 || 2){
 echo "Estimado(a)" . " " . $nombre . ", portador del DNI: " . $dni . "," . "le informamos que el dia de hoy:" . $dia[1] . ", " . "de acuerdo al nivel de evaluacion obtenido:" . $evaluaciones[2] . " " . ",usted ha recibido un aumento del" . ",siendo su aumento de:" . $aumento . "%" . ",siendo su aumento de:" . $aumentob . " y su nuevo sueldo es de: " . $sueldo;

echo "<hr>";

echo "Felicitaciones!!!";
}
else{
    echo "ja";
}

?>