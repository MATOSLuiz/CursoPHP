<?php 

$arr = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];

for($i = 0; $i < count($arr); $i++) {
    if($arr[$i] % 2 == 0) {
        echo "Número: $arr[$i] <br>";
    }
}

// desafio exercicio 30b
//array dinamico por meio de um for

$arrow = [];

for ($j = 1; $j <= 10; $j++){
    array_push($arrow, $j);
}

print_r($arr);

echo "<br>";
echo "<br>";


//desafio 30c array dinamico e criar loop para exibir só os impares

$array = [];

for($k = 10; $k <= 20; $k++) {
    array_push($array, $k);
}

print_r($array);

echo "<br>";
echo "<br>";

for($k = 0; $k < count($array); $k++){
    if($array[$k] % 2 != 0) {
        echo "Número impar: $array[$k] <br>";
    }
}

