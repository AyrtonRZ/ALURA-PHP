<?php

$email = 'ayrton@alura.com.br';
//pegar uma substring de uma string
//(de onde vai pegar, de onde vai iniciar, e o tamanho)
echo substr($email, 0, 6) . PHP_EOL;

//pegar o dominio com outra substring
//se nao informar o tamanho ele pega ate o final
echo substr($email, 7, ) . PHP_EOL;
echo PHP_EOL;


//melhor forma
$email2 = 'ayrtonrodrigues@alura.com.br';
//$posicaoDoArroba = 15;

//melhor 
//(onde buscar, oque quer buscar)
$posicaoDoArroba = strpos($email2, '@');

//pegar nome
echo substr($email2, 0, $posicaoDoArroba) . PHP_EOL;
//pegar dominio
echo substr($email2, $posicaoDoArroba + 1) . PHP_EOL;


