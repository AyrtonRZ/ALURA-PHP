<?php
/*
$idade = 24;
$nome = "ayrton";
echo "So pode entrar se tiver mais que 18 anos.".PHP_EOL;

if($idade >= 18 && $nome == "ayrton"){
    echo "Voce tem $idade anos. \nPode entrar.".PHP_EOL;
}else{
    echo "Voce tem $idade anos. \nNao pode entrar.".PHP_EOL;
}
echo PHP_EOL;
echo "Adeus!!";*/

$idade = 19;
$numeroPessoas = 2;

if($idade >= 16 && $idade < 18){
    if($numeroPessoas >= 2){
        echo "Voce pode entrar!";
    }else{
        echo "Voce nao pode entrar!";
    }
}
else if($idade >= 18){
    echo "Voce pode entrar!";
}
else{
    echo "Voce nao pode entrar!";
};