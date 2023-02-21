<?php 

class Pessoa
{
    public string $nome;
    public Cpf $cpf;

    public function __construct(string $nome, Cpf $cpf)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function retornaNome():string
    {
        return $this->nome;
    }

    public function retornaCpf():string
    {
        return $this->cpf->retornaNumero();
    }

    public function validaNomeTitular(string $nomeTitular)
    {
        if(strlen($nomeTitular) < 5){
        echo "Nome precisa de no minimo 5 caracteres.";
            exit();
        }
    }

}