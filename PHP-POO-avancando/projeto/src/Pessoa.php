<<<<<<< HEAD
<?php 

class Pessoa
{
    public string $nome;
    public Cpf $cpf;

    public function __construct(string $nome, Cpf $cpf)
    {
=======
<?php

class Pessoa
{
    protected string $nome;
    private Cpf $cpf;


    public function __construct(string $nome, Cpf $cpf)
    {
        $this->validaNome($nome);
>>>>>>> 83e9613795de0e89b216b49a05611a2936a1d597
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

<<<<<<< HEAD
    public function retornaNome():string
=======
    public function retornaNome(): string
>>>>>>> 83e9613795de0e89b216b49a05611a2936a1d597
    {
        return $this->nome;
    }

<<<<<<< HEAD
    public function retornaCpf():string
=======
    public function retornaCpf(): string
>>>>>>> 83e9613795de0e89b216b49a05611a2936a1d597
    {
        return $this->cpf->retornaNumero();
    }

<<<<<<< HEAD
    public function validaNomeTitular(string $nomeTitular)
    {
        if(strlen($nomeTitular) < 5){
        echo "Nome precisa de no minimo 5 caracteres.";
            exit();
        }
    }

}
=======
    protected function validaNome(string $nome)
    {
        if (strlen($nome) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }
}
>>>>>>> 83e9613795de0e89b216b49a05611a2936a1d597
