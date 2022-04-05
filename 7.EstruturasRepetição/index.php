<?php 

//WHILE + BREAK

$contador = 4;

while($contador <= 30){
    echo $contador . "<br>";

    if($contador === 24) {
        break;
    }

    $contador += 2;
}

// CONTINUE 

$a = 10;

while($a > 0) {
    echo "Executando o loop $a <br>";

    if($a == 5 || $a == 7) {
        echo "Pulou a execução $a <br>";

        $a--;

        continue;
    }

    $a--;
}