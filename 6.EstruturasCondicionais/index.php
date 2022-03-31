<?php 

if(5 > 2) {
    echo "Entrou no if";
}

echo "<br>";

if(5 < 2) {
    echo "Não entrou!";
}

echo "<br>";

// if aninhado

if(10 > 2 ) {
    echo "Entrou no primeiro if";
    echo "<br>";

    if("teste" == "teste") {
        echo "entrou no segundo if";
        echo "<br>";
    }
}

echo "<br>";

// switch pode substituir o if em alguns casos.

$x = 5;

switch($x) {

    case 10;
        echo "Igual a 10";
        break;
    case 20;
        echo "Igual a 20";
        default;
            echo "x é igual a 5 na verdade";
}



?>

