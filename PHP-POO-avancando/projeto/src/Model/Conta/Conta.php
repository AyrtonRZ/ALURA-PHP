<?php

namespace Alura\Banco\Model\Conta;

abstract class Conta
{
    //propriedades privadas nao seram alteradas livremente
    private Titular $titular;
    protected float $saldo;
    //atributo da classe
    private static $numeroContas = 0;

    //metodo construtur
    public function __construct(Titular $titular)
    {
        //$this acessa a instacia
        $this->titular = $titular;
        $this->saldo = 0;
        //os :: acessa o atributo o self pega o nome da classe
        self::$numeroContas++;
    }

    //metodo destruct
    public function __destruct()
    {
        self::$numeroContas--;
    }
    //funcionalidades alterar valores
    public function sacar(float $valorSacar)
    {
        $tarifaSaque = $valorSacar * $this->percentualTarifa();
        $valorSaque = $valorSacar + $tarifaSaque;
        if($valorSaque > $this->saldo){
            echo "Saldo indisponivel." . PHP_EOL;
            return;
        }   
        
        $this->saldo -= $valorSaque;
    }
    
    public function depositar(float $valorDepositar)
    {
        if($valorDepositar < 0){
            echo "O valor precisa ser positivo." . PHP_EOL;
            return;
        }
        $this->saldo += $valorDepositar;  
    }

    //funcionalidades de retorno gettres
    public function retornaCpfTitular()
    {
        return $this->titular->retornaCpf(); 
    }
    
    public function retornaNomeTitular()
    {
        return $this->titular->retornaNome();
    }

    public function retornaSaldo()
    {
        return $this->saldo;
    }

    //metodo static, para retornar qtd de contas
    public static function retornaNumeroContas()
    {
        return self::$numeroContas;
    }

    abstract protected function percentualTarifa():float;
}