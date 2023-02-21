<?php

$telefones = ['(24) 9999 - 9999', '(83) 8888 - 8888', '(84) 2222 - 2222'];
foreach ($telefones as $telefone){
    //(expresao regular, oq quer ser avaliado)
    $telefoneValido = preg_match(
        '/\([0-9]){2}\) 9?[0-9]{4} - [0-9]{4}/',
        $telefone,
        $verificacao
    );
    var_dump($verificacao);

    if ($telefoneValido){
        echo 'Telefone valido!' . PHP_EOL;
    } else {
        echo 'Telefone Invalido!' . PHP_EOL;
    }
}