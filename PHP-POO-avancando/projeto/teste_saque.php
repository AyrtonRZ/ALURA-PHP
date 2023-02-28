<?php

require_once 'src/Model/Conta/Conta.php';
require_once 'src/Model/Conta/ContaCorrente.php';
require_once 'src/Model/Conta/ContaPoupanca.php';

require_once 'src/Model/Endereco.php';
require_once'src/Model/Pessoa.php';
require_once 'src/Model/Conta/Titular.php';
require_once 'src/Model/Cpf.php';

use Alura\Banco\Modelo\Conta\{Titular, ContaCorrente, ContaPoupanca};
use Alura\Banco\Modelo\{Endereco, Cpf};

$conta1 = new ContaCorrente(
    new Titular(
        new Cpf('123.456.789-10'),
        'Ayrton Rodrigues',
        new Endereco('Manaira', 'Barrocao', 'minha rua', '67')
    )
    );
    $conta2 = new ContaPoupanca(
        new Titular(
            new Cpf('126.456.733-10'),
            'Rodrigo',
            new Endereco('jp', 'Barrocao', 'minha rua', '405b')
        )
    );

$conta1->depositar(1000);
$conta1->sacar(100);

$conta2->depositar(1000);
$conta2->sacar(100);

var_dump($conta1) . PHP_EOL;
var_dump($conta2) . PHP_EOL;