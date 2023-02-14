<?php
//exemplo 1
    //$dados = ['Ayrton', 10, 24];
    //list($nome, $nota, $idade) = $dados;

//exemplo 2
//array associativo
$dados = [
    'nome' => 'Ayrton', 
    'nota' => 10, 
    'idade' => 24
];
//list
    //['nome' => $nome,'nota' => $nota,'idade' => $idade] = $dados;

//extract
//percorre o array e transforma cada chave em uma nova variavel
extract($dados);
var_dump($nome, $nota, $idade);

//compact
//pega varias variaveis e compacta em uma array
var_dump(compact('nome', 'nota', 'idade'));