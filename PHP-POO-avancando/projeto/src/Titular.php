<?php

class Titular extends Pessoa
{
    private Endereco $endereco;

    public function __construct(Cpf $cpf, string $nome, Endereco $endereco)
    {
        $this->validaNomeTitular($nome);
        $this->cpf = $cpf;
        $this->nome = $nome;
    }
    
    public function retornaEndereco(string $nome, Cpf $cpf, Endereco $endereco)
    {
        parent::__construct($nome, $cpf);
        $this->endereco = $endereco;
    }
}