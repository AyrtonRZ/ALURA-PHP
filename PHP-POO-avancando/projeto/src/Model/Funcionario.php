<?php

namespace Alura\Banco\Model;

class Funcionario extends Pessoa
{
    private string $cargo;
    private float $salario;

    public function __construct(string $nome, Cpf $cpf, Endereco $endereco, string $cargo, float $salario)
    {
        parent::__construct($nome, $cpf, $endereco);
        $this->cargo = $cargo;
        $this->salario = $salario;
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

    public function retornaSalario():float
    {
        return $this->salario;
    }

    public function bonificacao():float{
        return $this->salario * 0.1;
    }
}
