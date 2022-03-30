<?php 

//Operações básicas

// echo 10 * 5;
// echo 10 + 5;
// echo 10 - 5;
// echo 10 / 5;

$a = 200;
$b = 100;

echo $a - $b;

//Operador de Módulo(resto)
echo "<br>"; 
echo 12 % 2;
echo "Módulo <br>";
echo 12 / 2;
echo "Divisão <br>"; 

//Concatenacao

$name = "Luiz";

echo "Oi meu nome é: " . $name;

//Operadores de auto incremento  e decremento

$x = 0;
$y = 0;

//usado apenas quando queremos aumentar ou dminuir uma unidade.

$y++;
$x--;

echo "<br>";
echo $y;
echo "<br>";
echo $x;

//Operadores lógicos 
// AND &&
//OR ||
// NOT !

echo "<br>";
if("Luiz" == "Luiz" AND "Matos" == "Matos"){
    echo "Seu nome está correto";
}
 
if("Estiver frio" == "Estiver calor" || "Estar nevando" == "Estar nevando") {
    echo "Testando OR";
}

//Operadores de Coversão

//Com eles podemos forçar uma variável ser um determinado tipo
//mais usado string -> numero

$f = (int) "10";

echo $f;
echo gettype($f);

//Operador de Atribuição
//temos algumas variações do = como += -= /= e %=

$attr = 0;

$attr += 20;
echo "<br>";
echo $attr;

echo "<br>";
$attr -= 15;
echo $attr;

//Operador Ternário - If resumido
//na maioria dos casos vamos optar por if/else
//apenas em situações simples

 echo 5 > 4 ? "5 é maior que 4" : "Deu false";

?>