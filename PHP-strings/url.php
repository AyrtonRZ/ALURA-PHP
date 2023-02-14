<?php

$url = 'https://alura.com.br';

//verifica se a string e existente na variavel no INICIO
if(str_starts_with($url, 'https')){
    echo 'Eh uma URL segura';
} else{
    echo 'Nao eh uma url segura';
}
echo PHP_EOL;

//verificar se a string e existente no FINAL da variavel
if(str_ends_with($url, '.br')){
    echo 'E um dominio do Brasil';
} else{
    echo 'Nao e um dominio do Brasil';
}
echo PHP_EOL;