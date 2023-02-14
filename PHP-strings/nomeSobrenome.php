<?php

$nome = 'Ayrton Rodrigues';
$email = 'ayrton@alura.com.br';
$senha = '1234';

if(mb_strlen($senha) < 8){
    echo 'Senha insegura' . PHP_EOL;
}
$posicaoDoArroba = strpos($email, '@');
$usuario = substr($email, 0, $posicaoDoArroba);

echo mb_strtoupper($usuario) . PHP_EOL;
echo mb_strtolower($usuario) . PHP_EOL;
echo substr($email, $posicaoDoArroba + 1) . PHP_EOL;

[$nome, $sobrenome] = explode(' ', $nome);
//explode(separador , oque sera separado) transforma em uma array
//var_dump(explode(' ', $nome));
echo "Nome: $nome" . PHP_EOL;
echo "Sobrenome: $sobrenome" . PHP_EOL;
