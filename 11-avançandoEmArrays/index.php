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

$arr = range(0,10);

print_r($arr);
echo "<br>";

//com step aqui no caso de 0 a 1000 de 100 em 100
$arr2 = range(0,1000,100);
print_r($arr2);
?>