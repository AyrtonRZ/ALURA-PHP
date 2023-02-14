<?php

$alunos2022 = [
    'Vinicios',
    'Joao',
    'Ana',
    'Maria',
    'Ayrton'
];

$alunosNovos = [
    'Patricia',
    'Rosane',
    'Juliana',
    'Antonio',
    'Marcos'
];

//desmpacotar uma array

//une os valores de ambas as arrays em uma so
    //$alunos2023 = [...$alunos2022, ...$alunosNovos];

//add outro valor entre os valores das as arrays
$alunos2023 = [...$alunos2022, 'Miguel', ...$alunosNovos];

//adicionando valores no array
//add no final da array
array_push($alunos2023, 'Thiago', 'Paulo', 'Vitor');
$alunos2023[] = 'Luiz';

//adicionando no inicio do array
array_unshift($alunos2023, 'Andre', 'Rafael');

//removendo o valor do INICIO da array, e apresenta o valor removido
echo array_shift($alunos2023) . PHP_EOL;

//remove o valor do final da array
echo array_pop($alunos2023) . PHP_EOL;

var_dump($alunos2023);
























