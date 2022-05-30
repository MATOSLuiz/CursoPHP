<?php

$nome = "Luiz";
$idade = 51;
$ano = 2022;
$teste = "teste";

if(is_numeric($idade)) {
    $idade2 = $idade *= 2;
}

if($idade2 > 100) {
    echo "É MAIOR QUE 100";
}

echo $idade2;

?>

