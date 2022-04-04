<?php 

$contador = 4;

while($contador <= 30){
    echo $contador . "<br>";

    if($contador === 24) {
        break;
    }

    $contador += 2;
}

?>