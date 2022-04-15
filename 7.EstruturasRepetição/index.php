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

echo "<br>";
echo "<br>";

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

echo "<br>";
echo "<br>";

//Do While

$j = 0;

do {

    echo "Testndo do While $j <br>";

    $j++;

} while($j < 10);

echo "<br>";
echo "<br>";

//for

for($k = 0; $k < 10; $k++) {

    if($k == 1) {
        break;
    }

    echo "teste <br>";
}


//foreach muito utilizada funciona orientada a  array e é usado em iterações.

$array = [0,1,2,3,4,5];

foreach($array as $item) {
    echo $item . "<br>";
}

