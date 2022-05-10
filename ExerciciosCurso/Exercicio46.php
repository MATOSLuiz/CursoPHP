<?php

$arr = [
    [2,4,6,8],
    [10,12,14,16],
    [18,20,22,24]
];

for($i = 0; $i < count($arr); $i++) {
     
    echo "Array externo:" . ($i + 1) . "<br>";

    for($j = 0; $j < count($arr[$i]); $j++) {
        echo $arr[$i][$j] . "<br>";
    }

} 

?>