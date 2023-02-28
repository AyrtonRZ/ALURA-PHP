<?php

namespace Alura\Banco\Model;

class Endereco
{
    private string $cidade;
    private string $bairro;
    private string $rua;
    private string $numero;

    public function __construct(string $cidade, string $bairro, string $rua, string $numero)
    {
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->rua = $rua;
        $this->numero = $numero;
    }

    public function retornaCidade():string
    {
        return $this->cidade;
    }

    public function retornaBairro():string
    {
        return $this->bairro;
    }

    public function retornaRua():string
    {
        return $this->rua;
    }

    public function retornaNumero():string
    {
        return $this->numero;
    }
}