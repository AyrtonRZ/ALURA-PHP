<?php

$texto = "Texto com um caralho de um filho da puta";
//(oque quer trocar, pelo oq quer trocar, onde)
//para uma alteracao
//str_replace('caralho', 'c$%@#**', $texto);
echo str_replace(
    ['caralho', 'puta'],
    ['c%$#@*', 'p%$*'],
    $texto
);

