<?php

class Conta
{
    //propriedades privadas nao seram alteradas livremente
    private $titular;
    private float $saldo;
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