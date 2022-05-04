<?php 

$arrComputador = [
    'Fonte' => 450,
    'Gabinete' => 200,
    'SSD' => 100,
    'Processador' => 400
];

function itensCaros($arrComputador) {
    $arrItensCaros = [];

    foreach($arrComputador as $item => $preco) {
        if($preco > 150) {
            array_push($arrItensCaros, $item);
        }
    }

    return $arrItensCaros;
}

$novoArray = itensCaros($arrComputador);

print_r($novoArray);


?>