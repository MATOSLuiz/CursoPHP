<?php 

class Carro {
    public $portas;
    public $rodas;
    public $cor;
    public $veloMax;

    function setVelocidadeMaxima($velocidade) {
        $this -> velocidadeMaxima = $velocidade;
    }

    function getVelocidadeMaxima() {
       echo "A velocidade máxima desse carro é $this->velocidadeMaxima km/h";
    }
}

$celta = new Carro;

$celta -> cor = "Cinza";
$celta -> rodas = 4;
$celta -> portas = 2;

$celta -> setVelocidadeMaxima(300);
$celta -> getVelocidadeMaxima();

echo "<br>";

$uno = new Carro;

$uno -> cor = "Amarelo";
$uno -> rodas = 4;
$uno -> portas = 8;

$uno -> setVelocidadeMaxima(800);
$uno -> getVelocidadeMaxima();



?>