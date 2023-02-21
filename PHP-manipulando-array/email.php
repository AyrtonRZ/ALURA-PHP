<?php

// nesse exemplo mostra o uso do <<<(nome), (nome). isso retira todo o espaco das string 
function geraEmail(string $nome)
{
    $conteudoEmail = <<<FINAL
        Ola $nome!
        Estamos mandando esse email para
        {motivo do contato}

        {assinatura}

        FINAL;

    echo $conteudoEmail;
}

geraEmail('Ayrton Rodrigues');