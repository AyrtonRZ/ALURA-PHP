<?php

class Titular
{
    private Cpf $cpf;
    private string $nome;

    public function __construct(Cpf $cpf, string $nome)
    {
        $this->validaNomeTitular($nome);
        $this->cpf = $cpf;
        $this->nome = $nome;
    }

    //funcionalidades de retorno gettres
    public function retornaCpf()
    {
        return $this->cpf->retornaNumero();
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