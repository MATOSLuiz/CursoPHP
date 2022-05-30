<?php 

//Numeros inteiros: Integer

echo 18;
echo "<br>";
$number = 8547;
echo "<br>";
echo $number;

echo "<br>";
echo "<br>";

//Checando número inteiro

if (is_int(85)) { //true
    echo "É inteiro";
}

echo "<br>";
echo "<br>";

//Números decimais (Float)

$float = 12.5;
$int = 12;
echo $float;
echo "<br>";
echo $float + $int;


echo "<br>";
echo "<br>";

//Checando se um número é float

if(is_float($float)) {
    echo "é um float";
}

echo "<br>";
echo "<br>";

//Strings


echo "aspas duplas <br>";
echo 'aspas simples <br>';

echo '"Olá mundo!" oi <br>';

$str = "a";

echo "a letra $str é a primeira letra do alfabeto";

echo "<br>";
echo "<br>";


// Checando se um dado é uma string 

if(is_string($str)) {
    echo "é uma string!";
}

echo "<br>";
echo "<br>";

//Boolean true or false aparece muito em comparações

echo true;
echo false;

echo "<br>";

if(true) {
    echo "é veridico!";
}

echo "<br>";

$boo = true;

if(is_bool($boo)) {
    echo "é booleano";
}

echo "<br>";
echo "<br>";

//Array

$arr = [1,2,3];

print_r($arr);

echo "<br>";

echo $arr[0];

echo "<br>";
echo "<br>";

//Array associativo

$info = ["nome" => "Luiz", "idade" => 15];

echo $info["nome"];

echo "<br>";

print_r($info);

$arrAssoc = ["animal" => "Cachorro", "idade" => 95];

echo "<br>";

print_r($arrAssoc);

echo "<br>";
echo "<br>";

//Objetos

class Pessoa {
    function falar() {
        echo "Olá galera!";
    }
}

$luiz = new Pessoa();

$luiz->falar();

?>