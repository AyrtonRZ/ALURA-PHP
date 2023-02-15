<?php

require_once 'src/Conta.php';

$primeiraConta = new Conta();
$primeiraConta->nomeTitular = 'Ayrton Rodrigues';
$primeiraConta->saldo = 500;

$segundaConta = new Conta();
$segundaConta->nomeTitular = 'Marcos';
$segundaConta->saldo = 100;

//transferindo saldo da primeira para a segunda
$primeiraConta->transferir(200, $segundaConta);

echo "Nome: $primeiraConta->nomeTitular" . PHP_EOL;
echo "Saldo: $primeiraConta->saldo" . PHP_EOL;
echo PHP_EOL;
echo "Nome: $segundaConta->nomeTitular" . PHP_EOL;
echo "Saldo: $segundaConta->saldo" . PHP_EOL;



