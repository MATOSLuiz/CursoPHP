<?php 

//Interpolação de Variaveis

$nomeCachorro = "BOB";
$idadeCachorro = 10;

//Sempre lembrar de seguir o padrão do projeto se começar de um jeito termine desse jeito e nunca misture.

echo "Meu cachorro se chama $nomeCachorro e tem $idadeCachorro aninhos";
echo "Meu cachorro se chama {$nomeCachorro} e tem {$idadeCachorro} aninhos";

//Valores de Escape somente são utilizados em texto puro do php
//simbologia /n -> pular linha. // -> barra invertida. /t -> tab. /$ -> sinal de dolar

?>