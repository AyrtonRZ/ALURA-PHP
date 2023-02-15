<?php

require_once 'src/Conta.php';

$primeiraConta =  new Conta('123.456.789-00', 'Ayrton Rodrigues');
$primeiraConta->depositar(500);
$primeiraConta->sacar(50);

/*
$primeiraConta->defineCpfTitular('121.345.678-90');
$primeiraConta->defineNomeTitular('Ayrton Rodrigues');
*/

echo $primeiraConta->retornaNomeTitular() . PHP_EOL;
echo $primeiraConta->retornaCpfTitular() . PHP_EOL;
echo $primeiraConta->retornaSaldo() . PHP_EOL;

$segundaConta  = new Conta('234.444.555-12', 'Marcos Antonio');
$segundaConta->depositar(1500);
$segundaConta->sacar(500);

var_dump($segundaConta);

