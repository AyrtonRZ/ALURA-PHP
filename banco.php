<?php

function exibeMensagem($mensagem){
    echo $mensagem . PHP_EOL;
}

$contas = [
    '123' => [
        'titular' => 'ayrton',
        'saldo' => 5000
    ], 
    '234' => [
        'titular' => 'maria',
        'saldo' => 2000
    ]
];

if(500 > $contas['123']['saldo']){
    exibeMensagem("Voce nao pode sacar");
}else{
    $contas['123']['saldo'] -= 500;
}

if(500 > $contas['234']['saldo']){
    exibeMensagem("Voce nao pode sacar");
}else{
    $contas['234']['saldo'] -= 500;
}

foreach($contas as $cpf => $conta){
    exibeMensagem($cpf . " " . $conta['titular'] . ' ' . $conta['saldo']);  
}