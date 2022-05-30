<?php

$frase = "A vida é bela mas nem tudo é uma beleza";
$number = 12;
$bool = true;

if(is_string($frase)) {
    echo "É uma string";
    echo "<br>";
} else {
    echo "Não é uma string";
}

if(is_int($number)) {
    echo "É um inteiro";
    echo "<br>";
} else {
    echo "Não é um inteiro";
}

if(is_bool($bool)) {
    echo "É um booleano";
    echo "<br>";
}
?>

