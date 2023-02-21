<?php

namespace Alura\Banco\Modelo\Conta;

use Alura\Banco\Modelo\Pessoa;
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Endereco;

class Titular extends Pessoa
{
    private Endereco $endereco;

    public function __construct(Cpf $cpf, string $nome, Endereco $endereco)
    {
        $this->validaNome($nome);
        parent::__construct($nome, $cpf);
    }
    
    public function retornaEndereco():Endereco
    {
        return $this->endereco;
    }
}