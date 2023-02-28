<?php

namespace Alura\Banco\Model\Funcionario;

class Desenvolvedor extends Funcionario
{
    public function sobeNivel()
    {
        $this->recebeAumento($this->retornaSalario() * 0.7);
    }
}