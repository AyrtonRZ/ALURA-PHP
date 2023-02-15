<?php

require_once 'src/Conta.php';

$primeiraConta = new Conta();
$primeiraConta->cpfTitular = '121.345.678-90';
$primeiraConta->nomeTitular = 'Ayrton Rodrigues';
$primeiraConta->saldo = 5500;

echo $primeiraConta->nomeTitular . PHP_EOL;
var_dump($primeiraConta);

$segundaConta = new Conta();
$segundaConta->cpfTitular = '123.456.789.10';
$segundaConta->nomeTitular = 'Marcos';
$segundaConta->saldo = 54000;

echo $segundaConta->nomeTitular . PHP_EOL;
var_dump($segundaConta);