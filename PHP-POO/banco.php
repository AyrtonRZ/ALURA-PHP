<?php

require_once 'src/Conta.php';

$primeiraConta =  new Conta();
$primeiraConta->depositar(500);
$primeiraConta->defineCpfTitular('121.345.678-90');
$primeiraConta->defineNomeTitular('Ayrton Rodrigues');

echo $primeiraConta->retornaNomeTitular() . PHP_EOL;
echo $primeiraConta->retornaCpfTitular() . PHP_EOL;
echo $primeiraConta->retornaSaldo() . PHP_EOL;
