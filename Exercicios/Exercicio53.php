<?php 

class Cachorro {
    function latir() {
        echo "AU AU";
        echo "<br>";
    }

    function andar($m) {
        echo "O cachorro andou $m metros";
        echo "<br>";
    }

}

$bob = new Cachorro;
$bob -> latir();
$bob -> andar(15);

$mel = new Cachorro;
$mel -> latir();
$mel -> andar(5);


?>