<?php

namespace Alura\Banco\Model\Funcionario;

class Diretor extends Funcionario
{
    public function bonificacao(): float
    {
        return $this->retornaSalario() * 2;
    }

    public function podeAutenticar(string $senha): bool
    {
        return $senha === '1234';
    }
}