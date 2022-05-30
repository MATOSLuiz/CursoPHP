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

//Funções nativas auxiliares -> func_get_arg(retorna uma lista com os argumentos de uma função)
// func_num_args(retorna o número de argumentos de uma função)

function sum($a, $b) {

    print_r(func_get_args());
    echo("<br>");
    echo func_num_args() . "<br>";

    return $a + $b;
}

sum(15, 15);

//retornando vários dados

function alteraDados($nome, $idade) {
    $nome = "Sr. $nome";
    $idade = "$idade anos";

    return [$nome, $idade];
}

$dados = alteraDados("Luiz", 18);

print_r($dados);

echo "<br>";

echo "Olá $dados[0], Você tem $dados[1] <br>";

//Depuração com print_r e var_dump(mais legivel para humanos)

$arrayTeste = [
    "teste",
    15, 
    156,
    [1,4,7]
];

print_r($arrayTeste);
echo "<br>";
echo "<br>";
var_dump($arrayTeste);

?>