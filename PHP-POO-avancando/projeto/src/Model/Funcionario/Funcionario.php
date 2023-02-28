<?php

namespace Alura\Banco\Model\Funcionario;

use Alura\Banco\Model\Pessoa;
use Alura\Banco\Model\Cpf;
use Alura\Banco\Model\Endereco;

abstract class Funcionario extends Pessoa
{
    private float $salario;

    public function __construct(string $nome, Cpf $cpf, Endereco $endereco, float $salario)
    {
        parent::__construct($nome, $cpf, $endereco);
        $this->salario = $salario;
    }

    public function alteraNome(string $nome): void
    {
        $this->validaNome($nome);
        $this->nome = $nome;
    }

    public function recebeAumento(float $valorAumento): void
    {
        if ($valorAumento < 0) {
            echo "Aumento deve ser positivo!!";
            return;
        }
        $this->salario += $valorAumento;
    }

    public function retornaSalario():float
    {
        return $this->salario;
    }
    
    abstract public function bonificacao(): float;
}
