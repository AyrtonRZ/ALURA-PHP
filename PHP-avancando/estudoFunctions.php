<?php

//subrotina nao precisa de parametros
function exibeOlaMundo()
{
    echo "Ola Mundo!!!!".PHP_EOL;
}

exibeOlaMundo();

//funcoes retorna valor
function adiciona2($x)
{
    return $x + 2;
}

$resultado = adiciona2(8);
echo $resultado;
