<?php

require_once 'src/Model/Pessoa.php';
require_once 'src/Model/Cpf.php';
require_once 'src/Model/Endereco.php';
require_once 'src/Model/Funcionario/Funcionario.php';
require_once 'src/Model/Funcionario/Diretor.php';
require_once 'src/Service/Autenticador.php';


use Alura\Banco\Model\Cpf;
use Alura\Banco\Model\Endereco;
use Alura\Banco\Model\Funcionario\Diretor;
use Alura\Banco\Service\Autenticador;


$autenticador = new Autenticador();
$diretor = new Diretor(
    'Marcos Delfino',
    new Cpf(
        '121.444.555-12'
    ),
    new Endereco(
        'Manaira',
        'Barrio',
        'Rua',
        '103'
    ),
    8000
);

$autenticador->tentaLogin($diretor, '1234');