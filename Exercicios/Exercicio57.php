<?php

class Cachorro {

public $nome;
public $idade;
public $patas;

function __construct($nome, $idade, $patas) {
    $this->nome = $nome;
    $this->idade = $idade;
    $this->patas = $patas;
}

function exibeProp() {
    echo "Nome: $this->nome";
    echo "<br> Idade: $this->idade";
    echo "<br> Patas: $this->patas";
}
}

$cachorro = new Cachorro("Bob", 12, 3);

$cachorro -> exibeProp();