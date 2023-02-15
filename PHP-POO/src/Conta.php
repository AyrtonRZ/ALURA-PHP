<?php

class Conta
{
    public string $cpfTitular;
    public string $nomeTitular;
    public float $saldo = 0;

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
}