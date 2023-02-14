<?php

function sacar(array $conta, float $valorSacar):array 
{
    if($valorSacar > $conta['saldo']){
        exibirMensagem("Voce nao pode sacar");
    } else{
        $conta['saldo'] -= $valorSacar;
    }
    return $conta;
}

function depositar(array $conta, float $valorDeposito):array 
{
    if($valorDeposito > 0){
        $conta['saldo'] += $valorDeposito;
    } else{
        exibirMensagem("Os depositos precisam ser positivos");
    }
    return $conta;
}

function exibirMensagem(string $mensagem):void
{
    echo $mensagem . PHP_EOL;
}

function titularComLetrasMaiusculas(array &$conta)
{
    $conta['titular'] =  strtoupper($conta['titular']);
}

function exibeConta(array $conta)
{
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    echo "<li>Titular: $titular. Saldo: $saldo</li>";
}