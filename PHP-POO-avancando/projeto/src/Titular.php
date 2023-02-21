<?php

class Titular extends Pessoa
{
    private Endereco $endereco;

    public function __construct(Cpf $cpf, string $nome, Endereco $endereco)
    {
<<<<<<< HEAD
        $this->validaNomeTitular($nome);
        $this->cpf = $cpf;
        $this->nome = $nome;
    }
    
    public function retornaEndereco()
=======
        parent::__construct($nome, $cpf);
        $this->endereco = $endereco;
    }

    public  function retornaEndereco():Endereco
>>>>>>> 83e9613795de0e89b216b49a05611a2936a1d597
    {
        return $this->endereco;
    }
}