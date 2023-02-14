<?php

$idades = [19, 20, 21, 30, 40, 50];

$idade = $idades[0];
echo $idade[0] . PHP_EOL;
echo $idades[2] . PHP_EOL;

//add no arrey numerico
$idades[] = 60;
$idades[] = 70;

for($i = 0; $i <= count($idades); $i++){
    echo $idades[$i] . PHP_EOL;
}