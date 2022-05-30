<?php 

class Humano {
    public $nome;
    public $anoNasc;

    public function falar() {
        echo "Oi";
    }
}

class Professor extends Humano {
    public $anoProfissao;
    public $idade;

    public function darNota($nota) {
        return $nota;
    }
}

$bomTempo = new Professor;

$bomTempo -> nome = "Luiz";
$bomTempo -> idade =  15;

echo $bomTempo -> nome;
echo "<br>";
echo $bomTempo -> idade;
echo "<br>";
echo $bomTempo -> darNota(10);
?>