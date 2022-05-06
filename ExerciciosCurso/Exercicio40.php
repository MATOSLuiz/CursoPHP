<?php 

$frase = "O rato roeu a roupa do rei de roma";

$contador = 0;

for($i = 0; $i < strlen($frase); $i++) {
 
    if($frase[$i] === "a") {
        $contador++;
    }
}

echo "O número de letras A na frase é: $contador";


?>