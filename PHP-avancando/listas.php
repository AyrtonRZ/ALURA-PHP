<?php

$idades = [21, 23, 25, 19, 90, 55];

/*$idadeAyrton = $idades[0];
$idadeMarcos = $idades[1];
$idadeMaria = $idades[2];*/

list($idadeAyrton, $idadeMaria, $idadeMarcos) = $idades;

unset($idades[4]);

foreach($idades as $idade)
{
    echo $idade . PHP_EOL;
}




