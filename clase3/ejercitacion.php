<?php
    for ($i = 1; $i <= 100 ; $i++) { 
     echo $i;
     echo "<br>";
    }
    echo "<hr>";
    for ($i= 1 ; $i <= 10 ; $i++) { 
     echo 2 * $i;
     echo "<br>";
    }
    echo "<hr>";
    $array = ["Juan", "Daniel", "adsa", "Wfdf", "kvls"];
    foreach ($array as $index => $value) {
        echo $array[$index];
        echo "<br>";
    }
?>