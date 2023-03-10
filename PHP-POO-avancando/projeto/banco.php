<?php 

//require_once 'autoload.php';

require_once 'src/Model/Conta/Conta.php';
require_once 'src/Model/Endereco.php';
require_once'src/Model/Pessoa.php';
require_once 'src/Model/Conta/Titular.php';
require_once 'src/Model/Cpf.php';

use Alura\Banco\Model\Conta\Titular;
use Alura\Banco\Model\Endereco;
use Alura\Banco\Model\Cpf;
use Alura\Banco\Model\Conta\Conta;


//enderecos
$endereco = new Endereco('JP', 'Agua Fria', 'minha rua', '202b');
$endereco2 = new Endereco('Manaira', 'Barrocao', 'minha rua 2', '405b');

$ayrton = new Titular(new Cpf('123.456.789-00'), 'Ayrton Rodrigues', $endereco);
$primeiraConta =  new Conta($ayrton);
$primeiraConta->depositar(500);
$primeiraConta->sacar(50);
/*
echo $primeiraConta->retornaNomeTitular() . PHP_EOL;
echo $primeiraConta->retornaCpfTitular() . PHP_EOL;
echo $primeiraConta->retornaSaldo() . PHP_EOL;
*/
var_dump($primeiraConta) . PHP_EOL;
echo  PHP_EOL;

//segunda conta
$marcos = new Titular(new Cpf('234.444.555-12'), 'Marcos', $endereco);
$segundaConta  = new Conta($marcos);
$segundaConta->depositar(1500);
$segundaConta->sacar(500);
var_dump($segundaConta) . PHP_EOL;
echo  PHP_EOL;

//terceira conta
$joao = new Titular(new Cpf('123.876.909-77'), 'Joao Torres', $endereco);
$terceiraConta = new Conta($joao);
$terceiraConta->depositar(5350);
var_dump($terceiraConta);

//remove a instacia da memoria
//unset($terceiraConta);

//contabiliza qtd de contas
echo "Total de contas: " . PHP_EOL;
echo Conta::retornaNumeroContas();