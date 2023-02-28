<?php 

namespace Alura\Banco\Modelo\Conta;

class ContaPoupanca extends Conta 
{
    public function sacar(float $valorSacar)
    {
        $tarifaSaque = $valorSacar * 0.03;
        $valorSaque = $valorSacar + $tarifaSaque;
        if($valorSaque > $this->saldo){
            echo "Saldo indisponivel." . PHP_EOL;
            return;
        }   
        
        $this->saldo -= $valorSaque;
    }
}