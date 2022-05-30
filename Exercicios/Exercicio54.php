<?php 

class Person {
    public $idade;
    public $nome;

    function andar($m) {
        echo "Andou $m metros";
    }
}

$gabriel = new Person;

$gabriel -> idade = 18;
$gabriel -> nome = "Jaime";

echo "Meu nome é $gabriel->nome e tenho $gabriel->idade anos <br>";



$luiz = new Person;

$luiz -> nome = "Luiz";

?>