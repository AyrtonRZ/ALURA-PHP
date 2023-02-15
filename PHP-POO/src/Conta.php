<?php

class Conta
{
    //propriedades privadas nao seram alteradas livremente
    private string $cpfTitular;
    private string $nomeTitular;
    private float $saldo;
    
    //metodo construtur
    public function __construct(string $cpfTitular, string $nomeTitular)
    {
        $this->cpfTitular = $cpfTitular;
        $this->nomeTitular = $nomeTitular;
        $this->saldo = 0;
    }
    //funcionalidades alterar valores
    public function sacar(float $valorSacar)
    {
        if($valorSacar > $this->saldo){
            echo "Saldo indisponivel." . PHP_EOL;
            return;
        }   
        
        $this->saldo -= $valorSacar;
    }
    
    public function depositar(float $valorDepositar)
    {
        if($valorDepositar < 0){
            echo "O valor precisa ser positivo." . PHP_EOL;
            return;
        }
        $this->saldo += $valorDepositar;  
    }

    public function transferir(float $valorTransferir, $contaDestino)
    {
        if($valorTransferir > $this->saldo){
            echo "Saldo Insuficiente";
            return;
        }
        $this->sacar($valorTransferir);
        $contaDestino->depositar($valorTransferir);
    }

    //funcionalidades de retorno gets
    public function retornaCpfTitular()
    {
        return $this->cpfTitular;
    }

    public function retornaNomeTitular()
    {
        return $this->nomeTitular;
    }

    public function retornaSaldo()
    {
        return $this->saldo;
    }

    /* 
    com o construct nao sera mais necessario
    //funcionalidades para definir valores em propriedades privadas sets
    public function defineCpfTitular(string $cpf)
    {
        $this->cpfTitular = $cpf;
    }

    public function defineNomeTitular(string $nome)
    {
        $this->nomeTitular = $nome;
    }*/
}