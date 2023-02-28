<?php

namespace Alura\Banco\Service;

use Alura\Banco\Model\Funcionario\Diretor;

class Autenticador
{
    public function tentaLogin(Diretor $diretor, string $senha): void
    {
        if ($diretor->podeAutenticar($senha)){
            echo "ok. Usuario logado no sistema";
        } else {
            echo "Senha invalida!!";
        }
    }
}