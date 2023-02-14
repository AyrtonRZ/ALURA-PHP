<?php

$contas = [
    12346587690 => [
        'titular'=> 'ayrton',
        'saldo' => 24244
    ],
    12346587390 => [
        'titular'=> 'marcos',
        'saldo' => 24244
    ],
    12346587890 => [
        'titular'=> 'rodrigues',
        'saldo' => 100000
    ]
];
//add valores no arrey associativo 
$contas[12345678909] = [
    'titular' => 'maria',
    'saldo' => 29932
];

$contas[] = [
    'titular' => 'bruno',
    'saldo' => 76554
];

foreach($contas as $cpf => $conta){
    echo $cpf . $conta['titular'] . PHP_EOL;
}