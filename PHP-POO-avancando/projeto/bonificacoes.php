<?php 

require_once 'src/Service/calculoBonificacao.php';
require_once 'src/Model/Cpf.php';
require_once 'src/Model/Endereco.php';
require_once 'src/Model/Pessoa.php';
require_once 'src/Model/Funcionario.php';

use Alura\Banco\Service\calculoBonificacao;
use Alura\Banco\Model\Funcionario;
use Alura\Banco\Model\Cpf;
use Alura\Banco\Model\Endereco;
use Alura\Banco\Model\Pessoa;

$funcionario1 = new Funcionario(
    'Marcos',
    new Cpf(
        '121.345.678-12'
    ),
    new Endereco(
        'Manaira',
        'Barrio',
        'Rua',
        '103'
    ),
    'Desenvolvedor',
    4500
);

$funcionario2 = new Funcionario(
    'Ayrton',
    new Cpf(
        '121.345.678-12'
    ),
    new Endereco(
        'JP',
        'Barrio',
        'Rua',
        '403'
    ),
    'Estagio',
    500
);

$controlador = new calculoBonificacao();
$controlador->adicionaBonificacao($funcionario1);
$controlador->adicionaBonificacao($funcionario2);

echo $controlador->retornaTotal();
