<?php

$array = [
    1 => 'um',
    2 => 'dois',
    3 => 'tres',
    4 => 'quatro'
];

foreach($array as $numeral => $nomeNumero){
    echo "$numeral em portugues e: $nomeNumero" . PHP_EOL;
}

echo "Total: " . count($array) . PHP_EOL; 