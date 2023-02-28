<?php

require_once 'src/Model/Endereco.php';

use Alura\Banco\Model\Endereco;

$endereco1 = new Endereco('Manaira', 'Centro', 'Rua', '67');
$endereco2 = new Endereco('JP', 'Bairro', 'Rua', '404a');

echo $endereco1 . PHP_EOL;