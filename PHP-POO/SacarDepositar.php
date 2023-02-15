<?php

require_once 'src/Conta.php';

$primeiraConta = new Conta();
$primeiraConta->cpfTitular = '121.345.678-90';
$primeiraConta->nomeTitular = 'Ayrton Rodrigues';
$primeiraConta->saldo = 500;

$segundaConta = new Conta();
$segundaConta->cpfTitular = '123.456.789.10';
$segundaConta->nomeTitular = 'Marcos Antonio';
$segundaConta->saldo = 500;

var_dump($primeiraConta);
echo  PHP_EOL;
var_dump($segundaConta);
echo  PHP_EOL;

echo "Atualizado!" . PHP_EOL;
echo  PHP_EOL;
//sacar do saldo da primeira conta
$primeiraConta->sacar(250);

//depositar no saldo
$segundaConta->depositar(2500);

var_dump($primeiraConta);
echo  PHP_EOL;
var_dump($segundaConta);