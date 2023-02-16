<?php

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

    public function retornaCidade()
    {
        return $this->cidade;
    }

    public function retornaBairro()
    {
        return $this->bairro;
    }

    public function retornaRua()
    {
        return $this->rua;
    }

    public function retornaNumero()
    {
        return $this->numero;
    }
}