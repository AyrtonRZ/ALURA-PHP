<?php

namespace Alura\Banco\Model\Funcionario;

use Alura\Banco\Model\Autenticavel;

class Diretor extends Funcionario implements Autenticavel
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