<?php

namespace Alura\Banco\Model\Conta;

use Alura\Banco\Model\Pessoa;
use Alura\Banco\Model\Cpf;
use Alura\Banco\Model\Endereco;
use Alura\Banco\Model\Autenticavel;

class Titular extends Pessoa implements Autenticavel
{
    public function __construct(string $nome, Cpf $cpf, Endereco $endereco)
    {
        $this->validaNome($nome);
        parent::__construct($nome, $cpf, $endereco);
    }

    public function podeAutenticar(string $senha): bool
    {
        return $senha === 'abcd';
    }
}