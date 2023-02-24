<?php 

spl_autoload_register(function (string $nomeCompletoClasse){
    $caminhoArquivo = str_replace('Alura\\Banco', 'src', $nomeCompletoClasse);
    $caminhoArquivo = str_replace('\\', DIRECTORY_SEPARATOR, $caminhoArquivo);
    $caminhoArquivo .= '.php';

    if (file_exists($caminhoArquivo)){
        require_once $caminhoArquivo;
    }
});

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Conta\Conta;

$endereco = new Endereco('JP', 'Agua Fria', 'minha rua', '202b');

$ayrton = new Titular(new Cpf('123.456.789-00'), 'Ayrton Rodrigues', $endereco);
$primeiraConta =  new Conta($ayrton);
$primeiraConta->depositar(500);
$primeiraConta->sacar(50);

echo $primeiraConta->retornaNomeTitular() . PHP_EOL;
echo $primeiraConta->retornaCpfTitular() . PHP_EOL;
echo $primeiraConta->retornaSaldo() . PHP_EOL;

$marcos = new Titular(new Cpf('234.444.555-12'), 'Marcos', $endereco);
$segundaConta  = new Conta($marcos);
$segundaConta->depositar(1500);
$segundaConta->sacar(500);
var_dump($segundaConta) . PHP_EOL;

$joao = new Titular(new Cpf('123.876.909-77'), 'Joao Torres', $endereco);
$terceiraConta = new Conta($joao);
$terceiraConta->depositar(50);
var_dump($terceiraConta);

//remove a instacia da memoria
//unset($terceiraConta);

//contabiliza qtd de contas
echo Conta::retornaNumeroContas();

