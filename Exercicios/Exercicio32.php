<?php 

function mult() {
    $n1 = 13;
    $n2 = 15;
    $n3 = 1;

    $result = $n1 * $n2 * $n3;

    echo $result;
}

mult();

function fullName() {
    $firstName = "Luiz";
    $surname = "Matos";

    echo "<br>". $firstName . " " . $surname;
}

fullName();

?>