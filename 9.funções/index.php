<?php 

//Estrutura Função

// function teste() {

//     //código

// }

//o php tem funções nativas como strlen, strtoupper...

//sem parametros

function subtracao() {

    $a = 4;
    $b = 5;

    echo $b - $a . "<br>";
}

//chamando função

subtracao();
subtracao();

//função nativa strtoupper

echo strtoupper("teste <br>");

//Dica: iniciar todas as funções do programa no topo do arquivo.

//Função com parametros

function name($name) {
    echo "Nome: $name <br>";
}

name("Luiz Matos");
name("Clara");
name("Maria");
name("Graziela");

function produto($nome, $valor) {
    echo "$nome: R$ $valor <br>";
}

produto("Gasolina", 10);

//Normalmente a função tem um retorno.

function soma($n1, $n2) {
    return $n1 + $n2 . "<br>";
}

echo soma(1,1);

$x = soma(8,2);

echo $x;

//com o return transferimos um valor do escopo local para o global.

//RELEMBRANDO ESCOPOS

$e = 10;

$b = 15;

function testeEscopo() {
    $e = 5;

    global $b;

    $b++;

    echo "ESCOPO LOCAL de E: $e <br>";
    echo "ESCOPO Global na função de B: $b <br>";
}

echo "Escopo Global de E: $e <br>";
echo "Escopo Global de B: $b <br>";
testeEscopo();
echo "Escopo Global de B: $b <br>";

//Parametro Default

function teste ($a = "teste") {
    echo $a . "<br>";
}

teste();
teste("OI");


//Default sempre por ultimo

function testandoDefaults($b, $a = 15) {
    echo "Argumento A : " . $a . "<br>";
    echo "Argumento B: " . $b . "<br>";
}

testandoDefaults(185,178);
testandoDefaults(185);

?>