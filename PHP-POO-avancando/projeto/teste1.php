<?php

require'src/Pessoa.php';
require 'src/Funcionario.php';
require 'src/Cpf.php';

$funcionario1 = new Funcionario('Ayrton', new Cpf('121.333.444-55'), 'Desenvolvedor');
var_dump($funcionario1);