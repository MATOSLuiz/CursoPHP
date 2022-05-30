<?php 

$lista = ["Carne de Porco", "Arroz","Feijao", "Macarrão", "Vinho"];

function listaSupermercado($arr) {

  $str = "Você levou esses itens para o mercado: ";   

    for($i = 0; $i < count($arr); $i++) {
        
        if($i + 1 == count($arr)) {
            $str .= "$arr[$i]. ";
        } else {
            $str .= "$arr[$i], ";
        }

    }

    return $str;
}

echo listaSupermercado($lista);

?>