<?php
$dias = ["Lunes", "Martes","Miercoles","Jueves","Viernes","Sabado","Domingo"];
$evaluaciones = ["Regular", "Bueno", "Excelente"];
$nombre = "Daniel Fuentes";
$dni = 12345678;

$dia = 0;
$evaluacion = 0;

if($evaluaciones[$evaluacion] == "Regular"){
   $porcentaje = 10;
//    var_dump($aumento);
//    exit;
}
elseif($evaluaciones[$evaluacion] == "Bueno"){
    $porcentaje = 20;
    // var_dump($aumento);
    // exit;
}
else{
    $porcentaje = 30;
    //   var_dump($aumento);
    // exit;
}

$sueldo = 8000 + $porcentaje * 80;
$aumento = $porcentaje * 8000 / 100;

if($evaluacion == 0 || 1 || 2){
 echo "Estimado(a)" . " " . $nombre . ", portador del DNI: " . $dni . "," . "le informamos que el dia de hoy: " . $dias[$dia] . ", " . "de acuerdo al nivel de evaluacion obtenido: " . $evaluaciones[$evaluacion] . " " . ",usted ha recibido un aumento del" . ",siendo su aumento de:" . $porcentaje . "%" . ",siendo su aumento de:" . $aumento . " y su nuevo sueldo es de: " . $sueldo;

echo "<hr>";

echo "Felicitaciones!!!";
}
else{
    echo "ja";
}

?>