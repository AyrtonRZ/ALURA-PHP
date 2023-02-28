<?php

namespace Alura\Banco\Modelo;

class Funcionario extends Pessoa
{
    private $cargo;

    public function __construct(string $nome, Cpf $cpf, string $cargo, Endereco $endereco)
    {
        parent::__construct($nome, $cpf, $endereco);
        $this->cargo = $cargo;
    }

    public function retornaCargo(): string
    {
        return $this->cargo;
    }

    public function alteraNome(string $nome): void
    {
        $this->validaNome($nome);
        $this->nome = $nome;
    }
}
