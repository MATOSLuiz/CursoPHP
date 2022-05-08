<?php 

//Interpolação de Variaveis

$nomeCachorro = "BOB";
$idadeCachorro = 10;

//Sempre lembrar de seguir o padrão do projeto se começar de um jeito termine desse jeito e nunca misture.

echo "Meu cachorro se chama $nomeCachorro e tem $idadeCachorro aninhos";
echo "<br>";
echo "Meu cachorro se chama {$nomeCachorro} e tem {$idadeCachorro} aninhos";

echo "<br>";
echo "<br>";

//Valores de Escape somente são utilizados em texto puro do php
//simbologia /n -> pular linha. // -> barra invertida. /t -> tab. /$ -> sinal de dolar

//Função print

$msg = "Meu nome é julia";

print("Hello Mundo!!!! $msg");

echo "<br>";
echo "<br>";

//printf

$name = "Louis";

// %s para strings

printf("Meu nome é %s <br>"  , $name);

echo "<br>";
echo "<br>";

// %d para inteiros

$idade = 18;

printf("Tenho %d anos <br>", $idade);

echo "<br>";
echo "<br>";

// %float

printf("%.2f m", 1.85);

echo "<br>";
echo "<br>";

//Strlen()

$str1 = "Eu sou uma string bem grande";
$str2 = "Eu n";

echo strlen($str1) . "<br>";
echo strlen($str2) . "<br>";

$str = "Como Percorrer as palavras de uma string";

for($i = 0; $i < strlen($str); $i++) {

    echo $str[$i] ."<br>";
}

// Alterando case de uma string

$case = "String Minuscula";
$case2 = "STRING TODA MAIUSCULA";

echo strtoupper($case);
echo "<br>";
echo "<br>";
echo strtolower($case2);
echo "<br>";
echo "<br>";

// Alterando case de palavras

$word = "banana";
$words = "banana amassada";

echo ucfirst($word);
echo "<br>";
echo "<br>";
echo ucwords($words);

//Removendo tags Html com strip_tags

$HTMLText = "<br> Oi <br> Meu <br> nome <br> é <h1>Luiz</h1>";

echo $HTMLText;

echo "<br>";

echo strip_tags($HTMLText);

//Resgatando partes da string

$string = "Tenho dezoito anos de idade";

$idade = substr($string, 6, 13); // String, Indice inicial, Comprimento da palavra

echo "<br>" . $string . "<br>" . $idade;

$idade2 = substr($string, 6); //Omitir Comprimento = Pegar até o fim

echo "<br>" . $idade2 . "<br>";

$idade3 = substr($string, 6 , -8); // Comprimento negativo = Remover do ultimo indice

echo "<br>" . $idade3 . "<br>";

//String Reversa

$abc = "cba";

echo strrev($abc);

//Repetição de string

$reticencias = ".";

echo str_repeat($reticencias, 3);
echo "<br>";

//Strings para array com explode

$phase = "1-2-3-4";

$fraseArray = explode("-", $phase);

print_r($fraseArray);

echo "<br>";

for($i = 0; $i < count($fraseArray); $i++) {
    echo $fraseArray[$i] . "<br>";
}

//Array para string com implode

$arr = [8, 5, 2022];

$arrToString = implode("-", $arr);

echo $arrToString;
echo "<br>";

//Encontrando ocorrencias dentro de uma string

$hino = "Quando Surge o Alviverde Imponente no Gramado em que a Luta o Aguuarda";

$indiceAlviverde = strpos($hino, "Alviverde");

echo $indiceAlviverde;
echo "<br>";

$indiceO = strrpos($hino, "o");

echo $indiceO;
echo "<br>";

//Os dois metodos retornam true or false, true é o indice do array e false se não existir a palavra

//Retornando resto da string

$istringui = "Gosto de Maçãs";

$resto = strstr($istringui, "M");

echo $resto;
echo "<br>";
echo "<br>";


//Decompor Urls com parse_url

$url = "https://www.udemy.com";

$arrURL = parse_url($url);

print_r($arrURL);



?>