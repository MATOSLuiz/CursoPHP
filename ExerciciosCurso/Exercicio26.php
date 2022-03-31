<?php

$velocidade = 120;
$msg = "Você está na velocidade correta";
$msg2 = "Tome cuidado, diminua";
$msg3 = "Você foi multado";


if($velocidade < 40) {
    echo $msg;
} else if($velocidade == 40) {
    echo $msg2;
} else {
    echo $msg3;
}
    
?>