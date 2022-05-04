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

// %d para inteiros

$idade = 18;

printf("Tenho %d anos <br>", $idade);

// %float

printf("%.2f m", 1.85);


?>