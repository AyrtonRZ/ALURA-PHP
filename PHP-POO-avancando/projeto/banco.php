<?php 

//require_once 'autoload.php';

require_once 'src/Modelo/Conta/Conta.php';
require_once 'src/Modelo/Endereco.php';
require_once'src/Modelo/Pessoa.php';
require_once 'src/Modelo/Conta/Titular.php';
require_once 'src/Modelo/Cpf.php';

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Conta\Conta;
use Alura\Banco\Modelo\Funcionario;

//enderecos
$endereco = new Endereco('JP', 'Agua Fria', 'minha rua', '202b');
$endereco2 = new Endereco('Manaira', 'Barrocao', 'minha rua 2', '405b');

//primeira conta
$ayrton = new Titular(new Cpf('123.456.789-00'), 'Ayrton Rodrigues', $endereco2);
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
$terceiraConta->depositar(5670);
var_dump($terceiraConta) . PHP_EOL;
echo  PHP_EOL;

//remove a instacia da memoria
//unset($terceiraConta);

//contabiliza qtd de contas
echo "Total de contas: " . PHP_EOL;
echo Conta::retornaNumeroContas();

