<?php

namespace Alura\Banco\Model\Funcionario;

class Gerente extends Funcionario
{
    public function bonificacao(): float
    {
        return $this->retornaSalario();
    }
}