<?php 

require_once 'functions.php';

$contas = [ 
    '123' => [
        'titular'=> 'Ayrton',
        'saldo' => 3000
    ],
    '234' => [
        'titular' => 'Marcos',
        'saldo' => 500
    ],
    '345' => [
        'titular' => 'Maria',
        'saldo' => 300
    ]
];

//remover item do array
unset($contas['345']);

//saque da conta
$contas['123'] = sacar(
    $contas['123'],
    500
);
$contas['234'] = sacar(
    $contas['234'],
    500
);

//dposito
$contas['123'] = depositar(
    $contas['123'],
    250
);
$contas['234'] = depositar(
    $contas['234'],
    250
);

titularComLetrasMaiusculas($contas['234']);

/*
//retornar valores loop
foreach($contas as $cpf => $conta){
    ['titular' => $titular, 'saldo' => $saldo] = $conta;

    exibirMensagem("$cpf $titular $saldo");
}*/
?>

//usando html no php
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Contas correntes</h1>

    <dl>
        <?php foreach($contas as $cpf => $conta) { ?>
        <dt>
            <h3><?= $conta['titular']; ?> - <?= $cpf; ?></h3>
        </dt>
        <dd>
            Saldo: <?= $conta['saldo']; ?>
        </dd>
        <?php } ?>
    </dl>
</body>
</html>
