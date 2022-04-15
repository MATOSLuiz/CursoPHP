<?php 

$arr = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];

for($i = 0; $i < count($arr); $i++) {
    if($arr[$i] % 2 == 0) {
        echo "Número: $arr[$i] <br>";
    }
}

// desafio exercicio 30b
//array dinamico por meio de um for

$arr = [];

for ($j = 1; $j <= 10; $j++){
    array_push($arr, $j);
}

print_r($arr);