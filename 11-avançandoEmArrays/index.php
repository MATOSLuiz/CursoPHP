<?php 

// //Adicionando valores em arrays.

// $arr = [];
// print_r($arr);
// echo "<br>";

// $arr[0] = 15;

// echo "<br>";
// print_r($arr);

// $arrAssoc = [];
// print_r($arrAssoc);
// echo "<br>";

// //Adicionando valores em arrays Associativos.

// $arrAssoc["piscina"] = "igui";
// echo "<br>";
// print_r($arrAssoc);


//Adicionando valores ao fim do array

// $arr = [1,2,3];

// $arr[] = 4;

// echo "<br>";
// print_r($arr);

// $arr[] = 5;

// echo "<br>";
// print_r($arr);  

// $arr2 = [];

// $arr2[] = 2;

// echo "<br>";
// print_r($arr2);


//Função range para criar um array rapidamente

// $arr = range(0,10);

// print_r($arr);
// echo "<br>";

// //com step aqui no caso de 0 a 1000 de 100 em 100
// $arr2 = range(0,1000,100);
// print_r($arr2);


// Número de elementos count()

// $arr = range(1,50);

// echo count($arr);
// echo "<br>";

// $arrAssoc = [
//     "nome" => "Luiz",
//     "idade" => 18
// ];

//  echo count($arrAssoc);

//Array Multidimensional simula uma matriz

// $arr = [
//     ["Banana", "Maçã", "Laranja"],
//     ["Uva", "Pera", "Salada mista"]
// ];

//Acessar a string Maçã

// echo $arr[0][1] . "<br>";

// //Acessar Salada mista

// echo $arr[1][2] . "<br>";

// echo count($arr); //contabiliza o array 'principal'
// echo "<br>";
// echo count($arr[1]); // '' '' 'secundário'


// Criar varias variaveis com base em um array

$pessoa = [
    "Luiz",
    18,
    "Programador",
    "Marrom claro"
];

list($nome,$idade,$profissao,$corDosOlhos) = $pessoa;


echo "$nome <br>";
echo "$idade <br>";
echo "$profissao <br>";
echo "$corDosOlhos <br>";



?>