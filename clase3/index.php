<?php
    $dni = 3253642;
    $nombre = "Juan";
    $apellido = "Sal";
    $dia = 3;
    $monto = 50000;
    $cuotas = 32;
    $tasa = 20;
    
    if($monto >= 72000 || $monto <= 1000){
        echo "El monto solicitado tiene que ser entre $/1000 y $/72000";
        exit;
    }
   elseif($cuotas < 3 || $cuotas > 32){
        echo "Las cuotas deben ser entre 3 y 32";
        exit;
    }
    elseif($tasa == 5 || $tasa == 10 || $tasa == 15 || $tasa == 20){
    }   
    else{
        echo "la tasa debe ser del 5% - 10% - 15% - 20%";
        exit;
    }

    switch ($dia) {
        case 1:
            $dia = "Lunes";
            break;
        case 2:
            $dia = "Martes";
            break;
        case 3:
            $dia = "Miercoles";
            break;
        case 4:
            $dia = "Jueves";
            break;
        case 5:
            $dia = "Viernes";
            break;
        case 6:
            $dia = "Sabado";
            break;
        case 7:
            $dia = "Domingo";
            break;
        default:
            $dia = "Elija un dia del 1 al 7";
            echo $dia;
            exit;
    }

    $monto_deuda = $monto + ($monto * $tasa / 100);

    echo "<h1>Estimado:" . $nombre . " " . $apellido . " el dia de hoy: " . $dia . " se le aprobo el credito de: $" . $monto . ", a una tasa del: %" . $tasa . ", usted debe cancelar un total en pesos de: $" . $monto_deuda . ", a razon de: " . $cuotas . " cuotas, y el valor de cada una es de:" . "</h1>";

    for ($i = 1 ; $i <= $cuotas ; $i++ ) {    
        $cuotasm[$i] = $monto_deuda / $cuotas;
    }    
    echo "<hr>";
    foreach ($cuotasm as $index => $valor) {
        echo "<h2>Nro. de cuota:" . $index . " Monto a pagar:" . $cuotasm[$index] . "</h2>";
        echo "<hr>";
    }
