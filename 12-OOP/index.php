<?php 

//Criando classes

class User {

}

//Instanciando objetos

$Luiz = new User;

//Métodos

class Person {

    function falar() {
        echo "Olá! <br>";
    }

    function multiplicar($a, $b) {
        echo $a + $b . "<br>";
    }

}

$luiz = new Person;
$gabriel = new Person;


$luiz->falar();
$gabriel->falar();

$luiz->multiplicar(1,2);
$gabriel->multiplicar(5,6);

//Propriedades

class Car {
    public $aro = 45;
    public $rodas;
    public $cor = "Azul";

    function ligar() {
        echo "TA TA TA TA VRUUUUU <br>";
    }
}

$monza = new Car;
$monza -> rodas = 4;

echo $monza -> aro . "<br>";
echo $monza -> rodas . "<br>";

$monza -> cor = "Preto <br>";
echo $monza -> cor;
echo $monza -> ligar();

//This

class Animal {

    function escolherNome($nome) {
        $this -> nome = $nome;
    }

    function latir() {
        return "au au";
    }

    function latirForte() {
        return strtoupper($this->latir());
    }

}

$bob = new Animal;

$bob->escolherNome("BOB");

echo "O nome do animal é $bob->nome <br>";

echo $bob -> latir();
echo $bob -> latirForte();
echo "<br>";

//Constantes 

class Humano {

    public const OLHOS = 2;
    public const BOCAS = 1;
    public const NARIZ = 1;
    public const ORELHAS = 2;

    function mostrarConstante() {

        echo self::BOCAS . "<br>";

    }

}

$luiz = new Humano;

echo $luiz::ORELHAS . "<br>";

$luiz -> mostrarConstante();

//Visibilidade
//public - A propriedade pode ser acessada de qualquer forma. 
//protected - A propriedade ou método pode ser acessada apenas pela classe de origem ou as que recebem a mesma herança
//private - A propriedade ou método pode ser acessada apenas pela classe que foi criada.


class Veiculo {

    public $rodas = 4;
    // private $vidro = "Fumê";

}

class Mecanico {

    public function alterarRodas($peca) {
        $peca->rodas = 6;
    }

    public function alterarVidro($peca) {
        $peca->vidro = "Sem fumê";
    }
}

$carro = new Veiculo;

echo $carro->rodas . "<br>";
// echo $carro->vidro . "<br>";

$rodrigo = new Mecanico;

//se a visibilidade da propriedade estiver private não é acessivel.
//$rodrigo->alterarRodas($carro);

$rodrigo->alterarVidro($carro);

echo $carro->rodas . "<br>";

echo $carro->vidro . "<br>";


//Herança 

class Human {
    public $idade = 29;

    public function falar() {
        echo "Olá mundo!";
    }

    private function gritar() {
        echo "PHP É MASSA!";
    }

    public function acessaGrito() {
        $this->gritar();
    }

    protected function surtar() {
        echo "EU QUERO MEU DECIMO TERCEIRO!";
    } 

    public function acessaSurtar() {
        $this->surtar();
    }
}

class Programador extends Human {



}

$Jao = new Human;

$Jao -> falar();

$paulo = new Programador;

echo $paulo->idade . "<br>";

$paulo->falar();
$paulo->acessaGrito();
$paulo->acessaSurtar();

?>