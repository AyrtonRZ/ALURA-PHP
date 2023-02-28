<?php

namespace Alura\Banco\Model\Conta;

class ContaCorrente extends Conta
{
    protected function percentualTarifa():float
    {
        return 0.05;
    }

    //metodos para transferencia de saldo
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