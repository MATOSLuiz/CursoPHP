<?php 

$str = "carro - navio - helicóptero - barco - jangada";

$strToArray = explode(" - ", $str);

for($i = 0; $i < count($strToArray); $i++) {
    echo $strToArray[$i] . "<br>";
}

?>