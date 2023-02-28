<?php 

require_once 'src/Service/calculoBonificacao.php';
require_once 'src/Model/Cpf.php';
require_once 'src/Model/Endereco.php';
require_once 'src/Model/Pessoa.php';
require_once 'src/Model/Funcionario/Funcionario.php';
require_once 'src/Model/Funcionario/Gerente.php';
require_once 'src/Model/Funcionario/Diretor.php';
require_once 'src/Model/Funcionario/Desenvolvedor.php';
require_once 'src/Model/Funcionario/EditorVideo.php';

use Alura\Banco\Service\calculoBonificacao;
use Alura\Banco\Model\Funcionario\Funcionario;
use Alura\Banco\Model\Cpf;
use Alura\Banco\Model\Endereco;
use Alura\Banco\Model\Funcionario\Desenvolvedor;
use Alura\Banco\Model\Funcionario\Diretor;
use Alura\Banco\Model\Funcionario\Gerente;
use Alura\Banco\Model\Funcionario\EditorVideo;
use Alura\Banco\Model\Pessoa;

$desenvolvedor = new Desenvolvedor(
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
    4000
);
$desenvolvedor->sobeNivel();

$gerente = new Gerente(
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
    3000
);

$diretor = new Diretor(
    'Joao Torres',
    new Cpf(
        '121.345.678-12'
    ),
    new Endereco(
        'JP',
        'Barrio',
        'Rua',
        '403'
    ),
    5000
);

$editor = new EditorVideo(
    'Maria Rodrigues',
    new Cpf(
        '121.345.678-12'
    ),
    new Endereco(
        'JP',
        'Barrio',
        'Rua',
        '403'
    ),
    3500
);

$controlador = new calculoBonificacao();
$controlador->adicionaBonificacao($desenvolvedor);
$controlador->adicionaBonificacao($gerente);
$controlador->adicionaBonificacao($diretor);
$controlador->adicionaBonificacao($editor);

echo $controlador->retornaTotal();
