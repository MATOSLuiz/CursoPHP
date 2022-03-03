<?php 

// Criando variaveis

$nome = "Luiz";
$idade = 18;
$universidadeQueEstudo = "FATEC"; //camel case

echo "Meu nome é $nome tenho $idade anos e estudo na $universidadeQueEstudo";

echo "<br>";
echo "<br>";

// var de var

$x = "nome"; //valor de nome

echo "$x <br>";

$xx = "Luiz";

echo $nome;

echo "<br>";
echo "<br>";

// var por referencia

$x = 45;

$y =& $x;

echo "$x e $y";

echo "<br>";

$y = 78;

echo "$x e $y";

echo "<br>";
echo "<br>";

//Escopo local

$z = 45; //global

function teste() {
    $z = 48;

    echo $z;
}

echo "$z é global e ", teste(), " é local";

echo "<br>";
echo "<br>";

//escopo global

$teste = "testando";

echo "global 1 $teste";

echo "<br>";

if(7 > 5){
    $teste = "teste";

    echo "if $teste";
}

echo "<br>";

echo "global 2 $teste";

echo "<br>";

//chamando variavel global dentro de uma funcão

function testezinho() {

    global $teste;

    echo $teste, " função";
}

testezinho();

echo "<br>";

//Escopa dos parametros de uma função

function soma($a,$b) {
    echo $a + $b;
}

soma(78,45);

?>

