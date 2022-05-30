<?php 

function DefineCorCarro($cor = "Vermelha") {
    return "A cor do carro é " . $cor;
}

echo defineCorCarro();
echo "<br>";
echo defineCorCarro("Azul");

?>