<?php

$email = 'ayrton@alura.com.br';
$senha = '1234';

//tamanho em byts
//echo strlen($senha) . PHP_EOL;

if(mb_strlen($senha) < 8){
    echo 'Senha insegura' . PHP_EOL;
}

$posicaoDoArroba = strpos($email, '@');

//pegar nome
$usuario = substr($email, 0, $posicaoDoArroba);

//passar nome do usuario para maiusculo
//o mb_ serve para identificar caract com acentos
echo mb_strtoupper($usuario) . PHP_EOL;

//passar nome do usuario para minusculo
echo mb_strtolower($usuario) . PHP_EOL;

//pegar dominio
echo substr($email, $posicaoDoArroba + 1) . PHP_EOL;
