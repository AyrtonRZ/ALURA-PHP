<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';

$ayrton = new Titular('123.456.789-00', 'Ayrton Rodrigues');
$primeiraConta =  new Conta($ayrton);
$primeiraConta->depositar(500);
$primeiraConta->sacar(50);
/*
$primeiraConta->defineCpfTitular('121.345.678-90');
$primeiraConta->defineNomeTitular('Ayrton Rodrigues');
*/
echo $primeiraConta->retornaNomeTitular() . PHP_EOL;
echo $primeiraConta->retornaCpfTitular() . PHP_EOL;
echo $primeiraConta->retornaSaldo() . PHP_EOL;

$marcos = new Titular('234.444.555-12', 'Marcos');
$segundaConta  = new Conta($marcos);
$segundaConta->depositar(1500);
$segundaConta->sacar(500);
var_dump($segundaConta);

$joao = new Titular('123.876.909-77', 'Joao Torres');
$terceiraConta = new Conta($joao);

//remove a instacia da memoria
unset($terceiraConta);

//contabiliza qtd de contas
echo Conta::retornaNumeroContas();

