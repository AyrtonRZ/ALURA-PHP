<?php

require_once 'src/Modelo/Conta/Conta.php';
require_once 'src/Modelo/Conta/ContaPoupanca.php';
require_once 'src/Modelo/Endereco.php';
require_once'src/Modelo/Pessoa.php';
require_once 'src/Modelo/Conta/Titular.php';
require_once 'src/Modelo/Cpf.php';

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Conta\Conta;
use Alura\Banco\Modelo\Funcionario;

$conta = new Conta(
    new Titular(
        new Cpf('123.456.789-10'),
        'Ayrton Rodrigues',
        new Endereco('Manaira', 'Barrocao', 'minha rua', '67')
    )
);

$conta->depositar(1000);
$conta->sacar(100);

var_dump($conta);