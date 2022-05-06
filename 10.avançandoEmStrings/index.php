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


?>