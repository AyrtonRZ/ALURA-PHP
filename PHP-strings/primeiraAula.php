<?php

$nome = 'Ayrton Rodrigues';

//(conde buscar, oque quer buscar)
//var_dump(str_contains($nome, 'Rodrigues'));
$minhaFamilia = str_contains($nome, 'Rodrigues');

if($minhaFamilia){
    echo "$nome eh da minha FAMILIA" . PHP_EOL;
} else{
    echo "$nome nao eh da minha FAMILIA" . PHP_EOL;
}


