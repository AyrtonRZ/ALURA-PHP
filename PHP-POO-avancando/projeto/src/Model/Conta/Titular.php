<?php

namespace Alura\Banco\Model\Conta;

use Alura\Banco\Model\Pessoa;
use Alura\Banco\Model\Cpf;
use Alura\Banco\Model\Endereco;

class Titular extends Pessoa
{
    public function __construct(Cpf $cpf, string $nome, Endereco $endereco)
    {
        $this->validaNome($nome);
        parent::__construct($nome, $cpf, $endereco);
    }
}