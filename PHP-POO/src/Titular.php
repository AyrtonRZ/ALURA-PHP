<?php

class Titular
{
    private string $cpf;
    private string $nome;

    public function __construct(string $cpf, string $nome)
    {
        $this->cpf = $cpf;
        $this->nome = $nome;
        $this->validaNomeTitular($nome);
    }

    //funcionalidades de retorno gettres
    public function retornaCpf()
    {
        return $this->cpf;
    }
    
    public function retornaNome()
    {
        return $this->nome;
    }
    //metodo privado para verificar tamanho nome
    private function validaNomeTitular(string $nomeTitular)
    {
        if(strlen($nomeTitular) < 5){
        echo "Nome precisa de no minimo 5 caracteres.";
            exit();
        }
    }
}