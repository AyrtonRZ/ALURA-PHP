<?php

namespace Alura\Banco\Modelo;
class Pessoa
{
    protected string $nome;
    private Cpf $cpf;
    protected Endereco $endereco;

    public function __construct(string $nome, Cpf $cpf, Endereco $endereco)
    {
        $this->validaNome($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->endereco = $endereco;
    }

    public function retornaNome(): string
    {
        return $this->nome;
    }

    public function retornaCpf(): string
    {
        return $this->cpf->retornaNumero();
    }

    public function retornaEndereco():Endereco
    {
        return $this->endereco;
    }

    protected function validaNome(string $nome)
    {
        if (strlen($nome) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }
}